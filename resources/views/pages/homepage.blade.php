@extends('layout')
@section('content')
    <div class="homepage">
        <section data-aos="fade-in" data-aos-once='true' data-aos-duration="1000" class="hero-image">
            <div class="hero-parallax"></div>
            <div data-aos="fade-down" data-aos-once='true' data-aos-duration="1000" class="hero-text">
                <h1 class="font-heading1">
                    MATAKOS MOTORS
                </h1>
                <span>
                    ΜΟΤΟΣΥΚΛΕΤΕΣ - ΑΞΕΣΟΥΑΡ
                </span>
            </div>
        </section>
        <section class="container info-section">
            <div class="wrapper content-defaults">
                <p>
                    Η <strong>Αντιπροσωπεία ΜΑΤΑΚΟS MOTORS</strong> αποτελεί σημείο αναφοράς στον χώρο της μοτοσυκλέτας από
                    το
                    1964. Με
                    βαθιές ρίζες στη Θεσσαλονίκη και πολυετή εμπειρία, προσφέρουμε ολοκληρωμένες λύσεις σε πωλήσεις, service
                    και
                    ανταλλακτικά, συνεργαζόμενοι με κορυφαίες μάρκες όπως SYM, Daytona, Zontes και CF Moto.
                </p>
                <p>
                    Η εξειδικευμένη ομάδα μας, σε συνδυασμό με τα δύο σύγχρονα καταστήματα και πιστοποιημένο συνεργείο,
                    είναι
                    πάντα δίπλα σου, για να εξασφαλίσει την άριστη λειτουργία και ασφάλεια της μοτοσυκλέτας σου. Ματάκος — η
                    εμπιστοσύνη στην οδήγηση, από γενιά σε γενιά.
                </p>
            </div>
        </section>
        <section class="container our-motors">
            @include('partials.section-header', ['title' => 'Οι Μηχανές μας'])
            <div class="row justify-content-center">
                <div class="col-12 col-sm-8 col-md-5 col-lg">
                    <div class="motor-card">
                        <div class="card-img">
                            <a href="https://sym.gr/model/new-adxtg-400/" target="_blank" title="Sym ADXTG 400">
                                <img src="/images/ADX400.jpg" alt="adx-400" class="img-fluid w-100">
                                <div class="motor-title">
                                    Sym ADX400
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-8 col-md-5  col-lg">
                    <div class="motor-card">
                        <div class="card-img">
                            <a href="https://zontes.gr/model/g368/" target="_blank" title="Zontes G368">
                                <img src="/images/G368.jpg" alt="G368" class="img-fluid w-100">
                                <div class="motor-title">
                                    Zontes G368
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-8 col-md-5 col-lg">
                    <div class="motor-card">
                        <div class="card-img">
                            <a href="https://daytonamotors.gr/model/maverick-510x/" target="_blank"
                                title="Daytona Maverick 510X">
                                <img src="/images/image1.jpeg" alt="R3M_6040" class="img-fluid w-100">
                                <div class="motor-title">
                                    Daytona Maverick 510X
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <a href="https://www.car.gr/classifieds/bikes/?shop=5159091&shop=857129&uid=857129" target="_blank"
                title="Όλες οι Μηχανές" class="main-btn">
                Όλες οι Μηχανές
            </a>
        </section>
        <section class="container about-matakos">
            <div class="row">
                <div class="col-12 offset-lg-1 col-lg-5">
                    <h3>
                        Εμπειρία και ποιότητα που σας αξίζει!
                    </h3>
                    <ul>
                        <li>
                            Επίσημος αντιπρόσωπος επώνυμων μηχανών, με πιστοποιήσεις και εγγύηση ποιότητας. </li>
                        <li>
                            Εξειδικευμένη ομάδα με πολυετή εμπειρία στον χώρο των δίτροχων, έτοιμη να σε εξυπηρετήσει.
                        </li>
                        <li>
                            Πλήρης τεχνική υποστήριξη και after sales service, για να νιώθεις πάντα ασφαλής στον δρόμο.
                        </li>
                        <li>
                            Μεγάλη διαθεσιμότητα μοντέλων και άμεση παράδοση, χωρίς περιττές καθυστερήσεις.
                        </li>
                    </ul>
                    <div class="wrapper w-75 d-flex justify-content-center justify-content-lg-end">
                        <a href="/about" title="Μάθε Περισσότερα" class="main-btn">
                            Μάθε Περισσότερα
                        </a>
                    </div>
                </div>
                <div class="col-12 offset-lg-1 col-lg-5">
                    <h3 class="d-block d-lg-none">
                        Εμπειρία και ποιότητα <br> που σας αξίζει!
                    </h3>
                    <img data-aos="fade-right" data-aos-once='true' data-aos-duration="500" src="/images/matakos1.jpeg"
                        alt="matakos" class="img-fluid">
                </div>
            </div>
        </section>
        <section class="container our-partners">
            @include('partials.section-header', ['title' => 'Οι Συνεργάτες μας'])

            <div class="swiper partnersSwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a href="https://sym.gr/" target="_blank" title="sym">
                            <img src="/images/sym-logo.png" alt="sym">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="https://daytonamotors.gr/" target="_blank" title="daytona">
                            <img src="/images/daytona-logo.png" alt="daytona">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="https://zontes.gr/" target="_blank" title="zontes">
                            <img src="/images/zontes-logo.jpg" alt="zontes">
                        </a>
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </section>
        <section class="container news">
            @include('partials.section-header', ['title' => 'Νέα & Άρθρα'])

            <div class="row">
                <div class="col-12 col-md-6 col-lg-4">
                    @include('partials.news-card', [
                        'img' => '/images/virtus-300.jpg',
                        'date' => 'Ιουλ 2025',
                        'title' => 'Daytona Virtus 300 — Δοκιμή',
                        'info' => 'To πολυτάλαντο “Μοτο-Σκούτερ” εναντίον όλων',
                        'link' =>
                            'https://scooternet.gr/news/%CE%BD%CE%B5%CE%B1-%CE%BC%CE%BF%CE%BD%CF%84%CE%B5%CE%BB%CE%B1/daytona-virtus-300-adventure-%CF%83%CE%BA%CE%BF%CF%8D%CF%84%CE%B5%CF%81-%CE%BC%CE%B5-%CF%80%CF%81%CE%BF%CF%83%CF%8C%CE%BD%CF%84%CE%B1/',
                    ])
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    @include('partials.news-card', [
                        'link' =>
                            'https://scooternet.gr/news/%CE%BD%CE%B5%CE%B1-%CE%BC%CE%BF%CE%BD%CF%84%CE%B5%CE%BB%CE%B1/sym-adx-400-tg-%CF%84%CE%BF-%CE%BF%CE%B4%CE%B7%CE%B3%CE%AE%CF%83%CE%B1%CE%BC%CE%B5-%CF%83%CF%84%CE%B7%CE%BD-%CF%80%CE%B1%CE%BD%CE%B5%CF%85%CF%81%CF%89%CF%80%CE%B1%CF%8A%CE%BA%CE%AE-%CF%80%CE%B1%CF%81/',
                        'img' => '/images/ADXTG_400_18.jpg',
                        'date' => 'Ιουλ 2025',
                        'title' => 'SYM ADX 400 TG: Το οδηγήσαμε!',
                        'info' => 'Όχι ένα ακόμα – συνηθισμένο – 400άρι.
                                                                                                                                                                                                        Καινοτομεί η SYM, καινοτομεί και η αντιπροσωπεία της στην Ελλάδα.',
                    ])
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    @include('partials.news-card', [
                        'img' => '/images/G368_ENGINE_COVER.jpg',
                        'date' => 'Ιουλ 2025',
                        'title' => 'Zontes G368 — Δοκιμή',
                        'info' => 'To πολυτάλαντο “Μοτο-Σκούτερ” εναντίον όλων',
                        'link' =>
                            'https://scooternet.gr/%CF%80%CE%BB%CE%AE%CF%81%CE%B5%CE%B9%CF%82-%CE%B4%CE%BF%CE%BA%CE%B9%CE%BC%CE%AD%CF%82/zontes-g368-%CE%B4%CE%BF%CE%BA%CE%B9%CE%BC%CE%AE-%CF%83%CF%84%CE%BF%CF%87%CE%B5%CF%8D%CE%BF%CE%BD%CF%84%CE%B1%CF%82-%CF%84%CE%BF-%CE%BD%CE%BF1-%CF%84%CF%89%CE%BD-%CE%BC%CE%B5%CF%83%CE%B1%CE%AF%CF%89/',
                    ])
                </div>
            </div>
        </section>
        <section class="parallax">
            <div class="parallax-inner">
                <br>
                <br>
            </div>
        </section>
    </div>
    @push('scripts')
        <script>
            window.addEventListener('DOMContentLoaded', function() {
                document.addEventListener("scroll", function() {
                    let scrolled = window.scrollY;
                    let scaleValue = 1 + scrolled * 0.0005
                    document.querySelector(".hero-parallax").style.transform = `scale(${scaleValue})`;
                });
                var swiper = new Swiper(".partnersSwiper", {
                    modules: [
                        SwiperModules.Navigation
                    ],
                    slidesPerView: 3,
                    spaceBetween: 20,
                    navigation: {
                        nextEl: ".swiper-button-next",
                        prevEl: ".swiper-button-prev",
                    },
                    breakpoints: {
                        0: {
                            slidesPerView: 1,
                        },
                        576: {
                            slidesPerView: 2,
                        },
                        992: {
                            slidesPerView: 3,
                        }
                    }
                });

            });
        </script>
    @endpush
@endsection
