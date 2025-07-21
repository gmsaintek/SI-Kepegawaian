<?php

use CodeIgniter\Test\CIUnitTestCase;
use CodeIgniter\Test\ControllerTestTrait;
use League\OAuth2\Client\Provider\Google;
use League\OAuth2\Client\Provider\Exception\IdentityProviderException;

final class AuthInvalidCodeTest extends CIUnitTestCase
{
    use ControllerTestTrait;

    public function testInvalidAuthorizationCode(): void
    {
        // mock Google provider to throw exception when requesting token
        $provider = $this->createMock(Google::class);
        $provider->expects($this->once())
            ->method('getAccessToken')
            ->willThrowException(new IdentityProviderException('Invalid code', 0, []));

        // prepare request and session
        $session = service('session');
        $session->set('oauth2state', 'test');
        $this->withUri('http://example.com/auth/callback')
             ->controller(StubAuth::class);
        $this->request->setGlobal('get', [
            'state' => 'test',
            'code'  => 'bad',
        ]);
        $this->controller->setProvider($provider);

        $result = $this->execute('callback');

        $result->assertRedirectTo('/');
        $this->assertNull(session('user'));
    }
}

class StubAuth extends \App\Controllers\Auth
{
    public function setProvider(Google $provider): void
    {
        $ref  = new \ReflectionClass(\App\Controllers\Auth::class);
        $prop = $ref->getProperty('provider');
        $prop->setAccessible(true);
        $prop->setValue($this, $provider);
    }
}
