/**
 * theme-switcher.js
 * ─────────────────────────────────────────────────────────
 * Handles Light / Dark / System theme switching.
 * Persists choice in localStorage key: "portfolio-theme"
 * Applies [data-theme] attribute on <html>.
 *
 * Include this file just before </body>
 * OR add  defer  in <head>:
 *   <script src="assets/js/theme-switcher.js" defer></script>
 * ─────────────────────────────────────────────────────────
 */
(function () {
    'use strict';

    var STORAGE_KEY   = 'portfolio-theme';
    var VALID_THEMES  = ['light', 'dark', 'system'];
    var root          = document.documentElement;

    /* ── Read saved preference (default = dark) ─────────── */
    function getSaved() {
        try {
            var v = localStorage.getItem(STORAGE_KEY);
            return VALID_THEMES.indexOf(v) !== -1 ? v : 'dark';
        } catch (e) { return 'dark'; }
    }

    /* ── Write [data-theme] and save ────────────────────── */
    function applyTheme(theme) {
        root.setAttribute('data-theme', theme);
        try { localStorage.setItem(STORAGE_KEY, theme); } catch (e) {}
    }

    /* Apply immediately — before first paint — to avoid flash */
    applyTheme(getSaved());

    /* ── DOM logic (needs elements to exist) ────────────── */
    document.addEventListener('DOMContentLoaded', function () {

        var switcher = document.getElementById('themeSwitcher');
        var dropdown = document.getElementById('themeDropdown');

        if (!switcher || !dropdown) return; /* appBar not present */

        /* Highlight the currently selected option */
        function syncActive() {
            var cur = root.getAttribute('data-theme') || 'dark';
            dropdown.querySelectorAll('.theme-option').forEach(function (btn) {
                btn.classList.toggle('active', btn.dataset.theme === cur);
            });
        }

        /* Toggle the dropdown panel */
        switcher.addEventListener('click', function (e) {
            if (e.target.closest('.theme-option')) return; /* handled below */
            switcher.classList.toggle('open');
            syncActive();
        });

        /* Pick a theme */
        dropdown.querySelectorAll('.theme-option').forEach(function (btn) {
            btn.addEventListener('click', function (e) {
                e.stopPropagation();
                applyTheme(btn.dataset.theme);
                syncActive();
                setTimeout(function () {
                    switcher.classList.remove('open');
                }, 160);
            });
        });

        /* Close when clicking anywhere outside the switcher */
        document.addEventListener('click', function (e) {
            if (!switcher.contains(e.target)) {
                switcher.classList.remove('open');
            }
        });

        /* React to OS preference changes (only matters in "system" mode) */
        try {
            window.matchMedia('(prefers-color-scheme: light)')
                .addEventListener('change', function () {
                    if ((root.getAttribute('data-theme') || 'dark') === 'system') {
                        applyTheme('system'); /* re-trigger CSS var recalc */
                    }
                });
        } catch (e) {}

        syncActive();
    });

}());
