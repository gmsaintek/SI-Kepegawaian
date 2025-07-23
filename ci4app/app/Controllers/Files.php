<?php
namespace App\Controllers;

use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Exceptions\PageNotFoundException;

class Files extends BaseController
{
    public function uploads(string $path)
    {
        $file = realpath(WRITEPATH . 'uploads/' . $path);
        $base = realpath(WRITEPATH . 'uploads');
        if (!$file || strpos($file, $base) !== 0 || !is_file($file)) {
            throw PageNotFoundException::forPageNotFound();
        }
        $mime = mime_content_type($file) ?: 'application/octet-stream';
        return $this->response
            ->setHeader('Content-Type', $mime)
            ->setBody(file_get_contents($file));
    }
}
