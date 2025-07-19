<nav class="app-header navbar navbar-expand bg-body">
    <div class="container-fluid">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button">
                    <i class="bi bi-list"></i>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <a class="nav-link" href="#" data-lte-toggle="fullscreen">
                    <i data-lte-icon="maximize" class="bi bi-arrows-fullscreen"></i>
                    <i data-lte-icon="minimize" class="bi bi-fullscreen-exit" style="display: none"></i>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="bd-theme" data-bs-toggle="dropdown" aria-expanded="false" aria-label="Toggle theme">
                    <i class="bi bi-sun-fill theme-icon-active"></i>
                    <span id="bd-theme-text" class="visually-hidden">Mode Warna</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="bd-theme">
                    <li>
                        <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" aria-pressed="false">
                            <i class="bi bi-sun-fill me-2"></i>
                        </button>
                    </li>
                    <li>
                        <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
                            <i class="bi bi-moon-fill me-2"></i>
                        </button>
                    </li>
                    <li>
                        <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="auto" aria-pressed="false">
                            <i class="bi bi-circle-half me-2"></i>
                        </button>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>

<script>
(() => {
  "use strict";

  const storedTheme = localStorage.getItem('theme');

  const getPreferredTheme = () => {
    if (storedTheme) {
      return storedTheme;
    }
    return window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
  };

  const setTheme = function (theme) {
    if (theme === 'auto') {
      document.documentElement.removeAttribute('data-bs-theme');
    } else {
      document.documentElement.setAttribute('data-bs-theme', theme);
    }
  };

  const showActiveTheme = (theme) => {
    const activeIcon = document.querySelector('.theme-icon-active');
    const themeText = document.getElementById('bd-theme-text');
    const allBtns = document.querySelectorAll('[data-bs-theme-value]');

    allBtns.forEach((btn) => {
      const isActive = btn.getAttribute('data-bs-theme-value') === theme;
      btn.classList.toggle('active', isActive);
      btn.setAttribute('aria-pressed', isActive);
      const checkIcon = btn.querySelector('.bi-check-lg');
      if (checkIcon) checkIcon.classList.toggle('d-none', !isActive);
    });

    const activeBtn = document.querySelector(`[data-bs-theme-value="${theme}"] i`);
    if (activeBtn && activeIcon) {
      activeIcon.setAttribute('class', activeBtn.getAttribute('class') + ' theme-icon-active');
    }

    if (themeText) {
      themeText.textContent = theme.charAt(0).toUpperCase() + theme.slice(1);
    }
  };

  // Listen to OS theme changes
  window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => {
    if (!['light', 'dark'].includes(storedTheme)) {
      setTheme(getPreferredTheme());
    }
  });

  window.addEventListener('DOMContentLoaded', () => {
    const currentTheme = getPreferredTheme();
    setTheme(currentTheme);
    showActiveTheme(currentTheme);

    document.querySelectorAll('[data-bs-theme-value]').forEach((toggle) => {
      toggle.addEventListener('click', () => {
        const theme = toggle.getAttribute('data-bs-theme-value');
        localStorage.setItem('theme', theme);
        setTheme(theme);
        showActiveTheme(theme);
      });
    });
  });
})();
</script>
