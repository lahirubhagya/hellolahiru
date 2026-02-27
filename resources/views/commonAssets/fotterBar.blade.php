<!-- "Footer" Section Start========================================================================================= -->
<footer class="main-footer fixed-footer">
    <div class="container">
        <div class="footer-inner fl-wrap">
            <div class="row">
                <div class="col-md-6">
                    <div class="footer-box fl-wrap">
                        <div class="custom_paragraph_option_1 footer-title fl-wrap">
                            <span>001.</span>
                            Subscribe
                        </div>
                        <div class="footer-box-item fl-wrap">
                            <p  class="custom_paragraph_option_1" style="color: whitesmoke">
                                Let's start Take your solution to the next level.
                                Please contact me anytime, and I will respond as soon as possible.
                            </p>
                            <a href="{{route('ContactMe')}}">
                                <a  class="btn color-bg fl-btn"><i class="fal fa-phone-plus"></i> Talk To Me </a>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="custom_paragraph_option_1 footer-title fl-wrap">
                        <span>001.</span>
                        Contacts
                    </div>
                    <div class="footer-box-item fl-wrap">
                        <!-- footer-contacts-->
                        <div class="footer-contacts fl-wrap">
                            <ul>
                                <li class="custom_li_font">
                                    <i class="fal fa-phone" size="large" style="padding-top: 6px"></i><span>PHONE :</span>
                                    <a href="#">+94 761909718</a>
                                </li>
                                <li class="custom_li_font">
                                    <i class="fal fa-envelope" size="large" style="padding-top: 6px"></i><span>EMAIL :</span>
                                    <a href="mailto:gunawardhanalahiru21@gmail.com">gunawardhanalahiru21@gmail.com</a>
                                </li>
                                <li>
                                    <a href="{{route('Landing')}}" class="custom_logo_menu_footer">
                                        <img src="assets/images/logo/logo_large.webp" alt="Logo Large">
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- footer end -->
                    </div>
                </div>
            </div>
        </div>
        <div class="subfooter fl-wrap">
            <!-- policy-box-->
            <div style="font-size: 12px !important;" class="policy-box">
                <span>&#169; Lahiru Gunawardana 2025  /  All rights reserved. </span>
            </div>
            <!-- policy-box end-->
            <div class="to-top to-top-btn color-bg"><span>To top</span></div>

            <div class="blog-btn-filter">
                <div class="blog-btn">
                    <span class="fi fi-gb" id="language-flag"></span>
                    <span id="language-text">English</span>
                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
                </div>

                <ul>
                    <li>
                        <a  href="#" data-lang="en" onclick="setLanguageWithServer('en'); return false;">
                            <span class="fi fi-gb"></span>&nbsp;
                            <span>English</span>
                        </a>
                    </li>

                    <li>
                        <a href="#" data-lang="hi" onclick="setLanguageWithServer('hi'); return false;">
                            <span class="fi fi-in"></span>&nbsp;
                            <span>हिन्दी (Hindi)</span>
                        </a>
                    </li>

                    <li>
                        <a href="#" data-lang="ru" onclick="setLanguageWithServer('ru'); return false;">
                            <span class="fi fi-ru"></span>&nbsp;
                            <span>Русский (Russian)</span>
                        </a>
                    </li>

                    <li>
                        <a href="#" data-lang="es" onclick="setLanguageWithServer('es'); return false;">
                            <span class="fi fi-es"></span>&nbsp;
                            <span>Español (Spanish)</span>
                        </a>
                    </li>

                    <li>
                        <a href="#" data-lang="de" onclick="setLanguageWithServer('de'); return false;">
                            <span class="fi fi-de"></span>&nbsp;
                            <span>Deutsch (German)</span>
                        </a>
                    </li>

                    <li>
                        <a href="#" data-lang="it" onclick="setLanguageWithServer('it'); return false;">
                            <span class="fi fi-it"></span>&nbsp;
                            <span>Italiano (Italian)</span>
                        </a>
                    </li>

                    <li>
                        <a href="#" data-lang="nl" onclick="setLanguageWithServer('nl'); return false;">
                            <span class="fi fi-nl"></span>&nbsp;
                            <span>Nederlands (Dutch)</span>
                        </a>
                    </li>

                    <li>
                        <a href="#" data-lang="zh-CN" onclick="setLanguageWithServer('zh-CN'); return false;">
                            <span class="fi fi-cn"></span>&nbsp;
                            <span>中文 (Chinese)</span>
                        </a>
                    </li>

                    <li>
                        <a href="#" data-lang="ja" onclick="setLanguageWithServer('ja'); return false;">
                            <span class="fi fi-jp"></span>&nbsp;
                            <span>日本語 (Japanese)</span>
                        </a>
                    </li>

                    <li>
                        <a href="#" data-lang="fr" onclick="setLanguageWithServer('fr'); return false;">
                            <span class="fi fi-fr"></span>&nbsp;
                            <span>Français (French)</span>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </div>
    <div class="sec-lines"></div>
    <div class="footer-canvas">
        <div class="dots gallery__dots" data-dots=""></div>
    </div>
</footer>
<!-- "Footer" Section End=========================================================================================== -->


<script type="text/javascript">
    // ============================================
    // LANGUAGE DATA & CONFIGURATION
    // ============================================
    const languageData = {
        'en': { name: 'English', icon: 'fas fa-globe', flag: 'fi-gb' },
        'hi': { name: 'हिन्दी', icon: 'fas fa-globe', flag: 'fi-in' },
        'ru': { name: 'Русский', icon: 'fas fa-globe', flag: 'fi-ru' },
        'es': { name: 'Español', icon: 'fas fa-globe', flag: 'fi-es' },
        'de': { name: 'Deutsch', icon: 'fas fa-globe', flag: 'fi-de' },
        'it': { name: 'Italiano', icon: 'fas fa-globe', flag: 'fi-it' },
        'nl': { name: 'Nederlands', icon: 'fas fa-globe', flag: 'fi-nl' },
        'zh-CN': { name: '中文', icon: 'fas fa-globe', flag: 'fi-cn' },
        'ja': { name: '日本語', icon: 'fas fa-globe', flag: 'fi-jp' },
        'fr': { name: 'Français', icon: 'fas fa-globe', flag: 'fi-fr' }
    };

    const successMessages = {
        'en': { title: 'Success!', message: 'Language changed successfully to English.' },
        'hi': { title: 'सफलता!', message: 'भाषा सफलतापूर्वक हिन्दी में बदल दी गई है।' },
        'ru': { title: 'Успех!', message: 'Язык успешно изменен на русский.' },
        'es': { title: '¡Éxito!', message: 'Idioma cambiado exitosamente a español.' },
        'de': { title: 'Erfolg!', message: 'Sprache erfolgreich auf Deutsch geändert.' },
        'it': { title: 'Successo!', message: 'Lingua cambiata con successo in italiano.' },
        'nl': { title: 'Succes!', message: 'Taal succesvol gewijzigd naar Nederlands.' },
        'zh-CN': { title: '成功！', message: '语言已成功更改为中文。' },
        'ja': { title: '成功！', message: '言語が日本語に正常に変更されました。' },
        'fr': { title: 'Succès !', message: 'La langue a été changée avec succès en français.' }
    };

    let googleTranslateReady = false;
    let isTranslating = false;

    // ============================================
    // COOKIE MANAGEMENT - COMPLETE SOLUTION
    // ============================================
    function setCookie(name, value, days) {
        const expires = days ? new Date(Date.now() + days * 864e5).toUTCString() : '';
        const expiresStr = expires ? `; expires=${expires}` : '';

        // Multiple cookie setting approaches for maximum compatibility
        const cookieString = `${name}=${encodeURIComponent(value)}${expiresStr}; path=/; SameSite=None; Secure`;
        document.cookie = cookieString;

        // Also try without Secure for localhost
        const cookieStringLocal = `${name}=${encodeURIComponent(value)}${expiresStr}; path=/; SameSite=Lax`;
        document.cookie = cookieStringLocal;
    }

    function getCookie(name) {
        const value = `; ${document.cookie}`;
        const parts = value.split(`; ${name}=`);
        if (parts.length === 2) return decodeURIComponent(parts.pop().split(';').shift());
        return null;
    }

    function deleteAllTranslationCookies() {
        const cookiesToDelete = ['googtrans', 'googtrans-backup'];
        const hostname = window.location.hostname;
        const domains = ['', hostname, '.' + hostname];

        const parts = hostname.split('.');
        if (parts.length > 2) {
            const rootDomain = parts.slice(-2).join('.');
            domains.push(rootDomain);
            domains.push('.' + rootDomain);
        }

        const paths = ['/', ''];

        cookiesToDelete.forEach(cookieName => {
            domains.forEach(domain => {
                paths.forEach(path => {
                    const domainStr = domain ? `; domain=${domain}` : '';
                    const pathStr = path ? `; path=${path}` : '';

                    document.cookie = `${cookieName}=; expires=Thu, 01 Jan 1970 00:00:00 UTC${pathStr}${domainStr}`;
                    document.cookie = `${cookieName}=; max-age=0${pathStr}${domainStr}`;
                    document.cookie = `${cookieName}=; expires=Thu, 01 Jan 1970 00:00:00 UTC${pathStr}${domainStr}; SameSite=None; Secure`;
                    document.cookie = `${cookieName}=; max-age=0${pathStr}${domainStr}; SameSite=None; Secure`;
                });
            });
        });
    }

    // ============================================
    // LOADING INDICATOR
    // ============================================
    function showLoadingIndicator(languageCode) {
        const existingLoader = document.querySelector('.translation-loader');
        if (existingLoader) existingLoader.remove();

        const langData = languageData[languageCode];
        const langName = langData?.name || 'selected language';

        const loaderDiv = document.createElement('div');
        loaderDiv.className = 'translation-loader';
        loaderDiv.innerHTML = `
        <div style="position: fixed; top: 0; left: 0; right: 0; bottom: 0;
                    background: rgba(0, 0, 0, 0.6); backdrop-filter: blur(4px);
                    z-index: 999999; display: flex; align-items: center; justify-content: center;
                    animation: fadeIn 0.2s ease-in;">
            <div style="background: transparent; padding: 40px 50px; border-radius: 15px;
                        text-align: center; animation: slideUp 0.3s ease-out;">
                <div class="spinner-border" role="status" style="width: 3rem; height: 3rem; border-width: 0.3rem;"></div>
                <div style="margin-top: 20px; font-size: 18px; color: #F68338; font-weight: 500;">
                    <div><span class="notranslate">Translating to </span> ${langName}</div>
                    <div style="font-size: 14px; color: #ffffff; margin-top: 8px; font-weight: normal;">Please wait...</div>
                </div>
            </div>
        </div>`;

        if (!document.getElementById('translation-animations')) {
            const animStyle = document.createElement('style');
            animStyle.id = 'translation-animations';
            animStyle.textContent = `
            @keyframes fadeIn { from { opacity: 0; } to { opacity: 1; } }
            @keyframes slideUp { from { transform: translateY(20px); opacity: 0; } to { transform: translateY(0); opacity: 1; } }
            @keyframes fadeOut { from { opacity: 1; } to { opacity: 0; } }
        `;
            document.head.appendChild(animStyle);
        }
        document.body.appendChild(loaderDiv);
    }

    function hideLoadingIndicator() {
        const loader = document.querySelector('.translation-loader');
        if (loader) {
            loader.style.animation = 'fadeOut 0.2s ease-out';
            setTimeout(() => {
                if (loader.parentElement) loader.remove();
            }, 200);
        }
    }

    // ============================================
    // SUCCESS NOTIFICATION
    // ============================================
    function showTranslationSuccess(languageCode) {
        const existingAlert = document.querySelector('.translation-success-alert');
        if (existingAlert) existingAlert.remove();

        const messages = successMessages[languageCode] || successMessages['en'];
        const langFlag = languageData[languageCode]?.flag || 'fi-globe';

        const alertDiv = document.createElement('div');
        alertDiv.className = 'alert alert-success show translation-success-alert';
        alertDiv.setAttribute('role', 'alert');
        alertDiv.style.cssText = 'position: fixed; top: 20px; right: 20px; z-index: 99999; min-width: 300px; max-width: 500px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); animation: slideInRight 0.3s ease-out; padding: 15px 40px 15px 15px;';
        alertDiv.innerHTML = `
        <div style="display: flex; align-items: center; gap: 12px;">
            <span class='fi ${langFlag}' style="width: 28px; height: 21px; border-radius: 2px; box-shadow: 0 1px 3px rgba(0,0,0,0.2); flex-shrink: 0;"></span>
            <div>
                <span class='fw-bold notranslate' style="display: block; margin-bottom: 2px;">${messages.title}</span>
                <span class="notranslate" style="font-size: 0.9em;">${messages.message}</span>
            </div>
        </div>
        <button class="btn-close" type="button" onclick="this.parentElement.remove()" aria-label="Close" style="position: absolute; top: 12px; right: 12px;"></button>
    `;

        if (!document.getElementById('alert-animations')) {
            const alertStyle = document.createElement('style');
            alertStyle.id = 'alert-animations';
            alertStyle.textContent = `
            @keyframes slideInRight { from { transform: translateX(100%); opacity: 0; } to { transform: translateX(0); opacity: 1; } }
        `;
            document.head.appendChild(alertStyle);
        }

        document.body.insertBefore(alertDiv, document.body.firstChild);
        setTimeout(() => {
            if (alertDiv && alertDiv.parentElement) {
                alertDiv.style.animation = 'fadeOut 0.2s ease-out';
                setTimeout(() => alertDiv.remove(), 200);
            }
        }, 5000);
    }

    // ============================================
    // CORE TRANSLATION FUNCTIONS - FIXED VERSION
    // ============================================

    function changeLanguage(languageCode) {
        if (isTranslating) {
            return;
        }

        isTranslating = true;
        console.log('🌐 ========================================');
        console.log('🌐 Changing language to:', languageCode);
        console.log('🌐 Current cookie:', getCookie('googtrans'));

        showLoadingIndicator(languageCode);
        localStorage.setItem('selectedLanguage', languageCode);
        updateLanguageUI(languageCode);

        if (languageCode === 'en') {
            console.log('🔄 ENGLISH SELECTED - Full reset');
            deleteAllTranslationCookies();
            sessionStorage.setItem('resetToEnglish', 'true');

            setTimeout(() => {
                console.log('🔄 Reloading for English...');
                window.location.reload(true);
            }, 500);

            return;
        }
        deleteAllTranslationCookies();

        setTimeout(() => {
            console.log('🍪 Setting new cookie: /en/' + languageCode);
            setCookie('googtrans', '/en/' + languageCode, 365);
            setCookie('googtrans-backup', '/en/' + languageCode, 365);

            sessionStorage.setItem('translating', 'true');
            sessionStorage.setItem('targetLanguage', languageCode);

            setTimeout(() => {
                console.log('🔄 Reloading with new language...');
                window.location.reload(true);
            }, 300);

        }, 200);
    }

    function doGoogleTranslate(languageCode) {
        const selectElement = document.querySelector('select.goog-te-combo');

        if (!selectElement) {
            console.error('❌ Google Translate select not found');
            return false;
        }

        try {
            selectElement.value = languageCode || '';

            const events = [
                new Event('change', { bubbles: true, cancelable: true }),
                new Event('input', { bubbles: true, cancelable: true }),
                new MouseEvent('click', { bubbles: true, cancelable: true })
            ];

            events.forEach(event => {
                selectElement.dispatchEvent(event);
            });

            if (selectElement.onchange) {
                selectElement.onchange(new Event('change'));
            }
            return true;

        } catch (error) {
            return false;
        }
    }

    function setLanguageWithServer(languageCode) {
        changeLanguage(languageCode);
    }

    // ============================================
    // UI UPDATE FUNCTIONS
    // ============================================
    function updateLanguageUI(languageCode) {
        const languageFlag = document.getElementById('language-flag');
        const languageText = document.getElementById('language-text');

        if (languageText) {
            const langData = languageData[languageCode];
            if (langData) {
                if (languageFlag) {
                    languageFlag.className = `fi ${langData.flag}`;
                }
                languageText.textContent = ' ' + langData.name;
            }
        }

        document.querySelectorAll('.dropdown-item[data-lang]').forEach(item => {
            item.classList.remove('active');
            if (item.getAttribute('data-lang') === languageCode) {
                item.classList.add('active');
            }
        });
    }

    // ============================================
    // CONTENT PROTECTION
    // ============================================
    function protectContentFromTranslation() {
        document.querySelectorAll('a[href^="mailto:"], a[href^="tel:"]').forEach(element => {
            element.classList.add('notranslate');
            element.setAttribute('translate', 'no');
        });

        document.querySelectorAll('.notranslate').forEach(element => {
            element.setAttribute('translate', 'no');
        });
    }

    // ============================================
    // GOOGLE TRANSLATE INITIALIZATION
    // ============================================
    function googleTranslateElementInit() {
        try {
            new google.translate.TranslateElement({
                pageLanguage: 'en',
                includedLanguages: 'en,hi,ru,es,de,it,nl,zh-CN,ja,fr',
                layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
                autoDisplay: false,
                multilanguagePage: true
            }, 'google_translate_element');

        } catch (error) {
            console.error('❌ Widget creation failed:', error);
        }

        protectContentFromTranslation();

        let checkCount = 0;
        const checkInterval = setInterval(() => {
            checkCount++;
            const selectElement = document.querySelector('select.goog-te-combo');

            if (selectElement) {
                clearInterval(checkInterval);
                googleTranslateReady = true;
                isTranslating = false;

                hideGoogleTranslateUI();

                const resetToEnglish = sessionStorage.getItem('resetToEnglish');
                const wasTranslating = sessionStorage.getItem('translating');
                const targetLang = sessionStorage.getItem('targetLanguage');

                if (resetToEnglish === 'true') {
                    sessionStorage.removeItem('resetToEnglish');

                    deleteAllTranslationCookies();

                    selectElement.value = '';
                    doGoogleTranslate('');

                    hideLoadingIndicator();
                    setTimeout(() => showTranslationSuccess('en'), 500);

                } else if (wasTranslating === 'true' && targetLang) {
                    console.log('🔄 Post-reload: Applying translation to', targetLang);
                    sessionStorage.removeItem('translating');
                    sessionStorage.removeItem('targetLanguage');

                    setTimeout(() => {
                        const cookieValue = getCookie('googtrans');
                        if (!cookieValue || !cookieValue.includes(targetLang)) {
                            console.log('⚠️ Cookie missing, setting again...');
                            setCookie('googtrans', '/en/' + targetLang, 365);
                        }

                        doGoogleTranslate(targetLang);

                        hideLoadingIndicator();
                        setTimeout(() => showTranslationSuccess(targetLang), 1000);
                    }, 500);
                }

            } else if (checkCount > 50) {
                clearInterval(checkInterval);
                isTranslating = false;
                hideLoadingIndicator();
            }
        }, 200);
    }

    // ============================================
    // HIDE GOOGLE TRANSLATE UI
    // ============================================
    function hideGoogleTranslateUI() {
        if (!document.getElementById('hide-google-translate-style')) {
            const style = document.createElement('style');
            style.id = 'hide-google-translate-style';
            style.textContent = `
            #google_translate_element {
                position: absolute !important;
                left: -9999px !important;
                opacity: 0 !important;
                height: 0 !important;
                overflow: hidden !important;
            }
            .goog-te-banner-frame {
                display: none !important;
                visibility: hidden !important;
            }
            body {
                top: 0 !important;
                position: static !important;
            }
            body.translated-ltr, body.translated-rtl {
                top: 0 !important;
                position: static !important;
            }
            .goog-te-balloon-frame { display: none !important; }
            .goog-tooltip { display: none !important; }
            .goog-text-highlight {
                background-color: transparent !important;
                box-shadow: none !important;
            }
            font { background-color: transparent !important; }
            #goog-gt-tt, .goog-te-spinner-pos { display: none !important; }
        `;
            document.head.appendChild(style);
        }

        const toolbar = document.querySelector('.goog-te-banner-frame');
        if (toolbar) {
            toolbar.style.display = 'none';
            document.body.style.top = '0';
            document.body.style.position = 'static';
        }
    }

    setInterval(() => {
        const toolbar = document.querySelector('.goog-te-banner-frame');
        if (toolbar && toolbar.style.display !== 'none') {
            toolbar.style.display = 'none';
            document.body.style.top = '0';
            document.body.style.position = 'static';
        }
    }, 500);

    // ============================================
    // PAGE INITIALIZATION
    // ============================================
    document.addEventListener('DOMContentLoaded', function() {
        const savedLanguage = localStorage.getItem('selectedLanguage') || 'en';
        updateLanguageUI(savedLanguage);
        protectContentFromTranslation();

        if (savedLanguage === 'en') {
            deleteAllTranslationCookies();
        }

        document.querySelectorAll('.dropdown-item[data-lang]').forEach(item => {
            item.addEventListener('click', function(e) {
                e.preventDefault();
                const lang = this.getAttribute('data-lang');
                changeLanguage(lang);
            });
        });
    });

    window.addEventListener('load', () => {
        setTimeout(() => {
            hideGoogleTranslateUI();
        }, 1000);
    });

    document.addEventListener('visibilitychange', function() {
        if (!document.hidden) {
            hideGoogleTranslateUI();
        }
    });

    window.forceEnglish = function() {
        deleteAllTranslationCookies();
        localStorage.setItem('selectedLanguage', 'en');
        sessionStorage.clear();
        setTimeout(() => window.location.reload(true), 500);
    };

    window.clearTranslationData = function() {
        deleteAllTranslationCookies();
        localStorage.removeItem('selectedLanguage');
        sessionStorage.clear();
    };
</script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@7.2.3/css/flag-icons.min.css"/>
<script src="{{asset('assets/js/translate.js')}}"></script>
