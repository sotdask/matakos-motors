<header>
    <section class="container-fluid top-side">
        <div class="container">
            <ul>
                <li>
                    <a href="mailto:info@matakosmotors.gr" title="Email">
                        <img src="/images/mail-fill.svg" alt="mail" class="img-fluid">
                        <span>info@matakosmotors.gr</span>
                    </a>
                </li>
                <li>
                    <a href="https://maps.app.goo.gl/AEMJGjZb4hHzh3yBA" target="_blank"
                        title="Τοποθεσία">
                        <img src="/images/map-pin-2-fill.svg" alt="map" class="img-fluid">
                        <span>Λαγκαδά 120, Θεσσαλονίκη</span>
                    </a>
                </li>
                <li class="d-none d-lg-flex">
                    <img src="/images/phone-fill.svg" alt="phone" class="img-fluid">
                    <a href="tel:2310548022" title="Τηλέφωνο">
                        <span>+30 2310548022</span>
                    </a>
                </li>
            </ul>
        </div>
    </section>
    <section class="container-fluid nav-bar">
        <div class="container">
            <div class="row">
                <div class="col-4 col-lg-3 leftSide">
                    <a href="/" title="Κεντρική Σελίδα" class="d-none d-lg-flex">
                        <img src="/images/logo.svg" alt="logo">
                    </a>
                    <a href="tel:2310548022" title="Τηλέφωνο" class="d-flex d-lg-none">
                        <img src="/images/mobile-phone.svg" alt="phone" class="img-fluid phoneImg">
                    </a>
                </div>
                <div class="col-4 col-lg-7 centerSide">
                    <ul class="d-none d-lg-flex">
                        <li>
                            <a href="/about" title="Σχετικά με Εμάς">
                                Σχετικά με Εμάς
                            </a>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-title">
                                Πληροφορίες
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="/partners" title="Συνεργάτες">
                                        Συνεργάτες
                                    </a>
                                </li>
                                <li>
                                    <a href="/synergeio" title="Συνεργείο">
                                        Συνεργείο
                                    </a>
                                </li>
                                <li>
                                    <a href="/accessories" title="Accessories">
                                        Αξεσουάρ
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="/news" title="Νέα">
                                Νέα
                            </a>

                        </li>
                        <li>
                            <a href="/contact" title="Επικοινωνία">
                                Επικοινωνία
                            </a>
                        </li>
                    </ul>
                    <a href="/" title="Κεντρική Σελίδα" class="d-flex d-lg-none">
                        <img src="/images/logo.svg" alt="logo">
                    </a>
                </div>
                <div class="col-4 col-lg-2 rightSide">
                    <a href="https://www.car.gr/classifieds/bikes/?shop=5159091&shop=857129&uid=857129" target="_blank"
                        title="Προσφορές" class="main-btn d-none d-lg-flex">
                        Μοτοσυκλέτες
                    </a>
                    <div class="burger-menu d-flex d-lg-none">
                        <button class="open-menu" onclick="toggleMenu()">
                            <div class="burger">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </button>
                    </div>
                    <nav class="mobile-nav" id="mobileNav">
                        <ul>
                            <li><a href="/" title="Αρχική">Αρχική</a></li>
                            <li><a href="/about" title="Σχετικά με Εμάς">Σχετικά με Εμάς</a></li>
                            <li><a href="/partners" title="Συνεργάτες">Συνεργάτες</a></li>
                            <li><a href="/synergeio" title="Συνεργείο">Συνεργείο</a></li>
                            <li><a href="/accessories" title="Αξεσουάρ">Αξεσουάρ</a></li>
                            <li><a href="/news" title="Νέα">Νέα</a></li>
                            <li><a href="/contact" title="Επικοινωνία">Επικοινωνία</a></li>
                        </ul>
                        <div class="social-media">
                            <a href="https://www.facebook.com/MatakosMotors/" target="_blank" title="Facebook">
                                <img src="/images/facebook.svg" alt="facebook">
                            </a>
                            <a href="https://www.tiktok.com/@matakos.motors" target="_blank" title="TikTok">
                                <img src="/images/tiktok-icon.svg" alt="tiktok">
                            </a>
                        </div>
                        <div class="background-road">
                            <img src="/images/road.svg" alt="road">
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <script>
        window.addEventListener('DOMContentLoaded', function() {
            window.toggleMenu = function() {
                const burger = document.querySelector('.burger-menu');
                const nav = document.getElementById('mobileNav');

                burger.classList.toggle('active');
                nav.classList.toggle('active');
            }
            $(window).on('scroll', function() {
                if ($(window).scrollTop() > $('.top-side').height()) {
                    $('header').addClass('scrolled');
                } else {
                    $('header').removeClass('scrolled');
                }
            });
        });
    </script>

</header>
