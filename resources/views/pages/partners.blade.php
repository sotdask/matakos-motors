@extends('layout')
@section('content')
    <div class="partners">
        <section class="container partners-introduction content-defaults d-flex flex-column align-items-center">
            <h1 data-aos="fade-down" data-aos-once='true' data-aos-duration="1000" class="font-heading1">
                Συνεργάτες
            </h1>
            <p>
                Στη MATAKOS MOTORS πιστεύουμε ότι οι δυνατές συνεργασίες χτίζουν σχέσεις εμπιστοσύνης και αποτελούν τη
                βάση της επιτυχίας μας. Σε αυτή τη σελίδα θα γνωρίσετε τους επίσημους συνεργάτες μας, τις μάρκες που
                εκπροσωπούμε με υπερηφάνεια και τους ανθρώπους πίσω από την άψογη εξυπηρέτηση που προσφέρουμε καθημερινά
                στους πελάτες μας. </p>
            <div class="swiper partnersSwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="/images/sym-logo.png" alt="sym">
                    </div>
                    <div class="swiper-slide">
                        <img src="/images/daytona-logo.png" alt="daytona">

                    </div>
                    <div class="swiper-slide">
                        <img src="/images/zontes-logo.jpg" alt="zontes">
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </section>
        <section class="partners-info container">
            <div class="partner-card">
                <div class="row">
                    <div class="col-12 col-lg-6 d-flex align-items-center flex-column img-col">
                        <h3 class="font-heading2 d-flex d-lg-none mb-4">
                            Σχετικά με την Sym
                        </h3>
                        <img src="/images/sym-logo.png" alt="sym" class="img-fluid w-25">
                    </div>
                    <div class="col-12 col-lg-6 text-col">
                        <div class="wrapper">
                            <h3 data-aos="fade-right" data-aos-once='true' data-aos-duration="500"
                                class="font-heading2 d-none d-lg-flex mb-5">
                                Σχετικά με την Sym
                            </h3>
                            <ul>
                                <li>
                                    Η SYM ιδρύθηκε το 1954 στην Ταϊβάν και εξελίχθηκε σε έναν από τους μεγαλύτερους
                                    κατασκευαστές δίκυκλων παγκοσμίως, συνδυάζοντας τεχνογνωσία και ποιότητα.
                                </li>
                                <li>
                                    Με εργοστάσια πιστοποιημένα κατά ISO και παραγωγή που ξεπερνά τα 5 εκατομμύρια οχήματα,
                                    η SYM αναπτύσσεται συνεχώς, εξάγοντας σε περισσότερες από 30 χώρες.
                                </li>
                                <li>
                                    Στην Ελλάδα η SYM παραμένει πρώτη στις ταξινομήσεις scooters για 14 χρόνια, προσφέροντας
                                    αξιοπιστία, καινοτομία και σιγουριά στους αναβάτες της.
                                </li>
                            </ul>
                        </div>
                        <a href="https://sym.gr/" target="_blank" title="Sym" class="main-btn">
                            Μάθε Περισσότερα
                        </a>
                    </div>
                </div>
            </div>
            <div class="partner-card-flipped">
                <div class="row">
                    <div class="col-12 col-lg-6 d-flex align-items-center flex-column img-col order-lg-2">
                        <h3 class="font-heading2 d-flex d-lg-none mb-4">
                            Σχετικά με την Daytona
                        </h3>
                        <img src="/images/daytona-logo.png" alt="daytona" class="img-fluid">
                    </div>
                    <div class="col-12 col-lg-6 text-col order-lg-1">
                        <div class="wrapper">
                            <h3 data-aos="fade-right" data-aos-once='true' data-aos-duration="500"
                                class="font-heading2 d-none d-lg-flex mb-5">
                                Σχετικά με την Daytona
                            </h3>
                            <ul>
                                <li>
                                    Η DAYTONA MOTORS, με τεχνογνωσία από τη ΓΚΟΡΓΚΟΛΗΣ ΑΕ και ρίζες στη MEGO, συνδυάζει
                                    πάθος αγώνων και σύγχρονο σχεδιασμό μέσα από διεθνείς συνεργασίες.
                                </li>
                                <li>
                                    Από το 2005 εξελίσσει αξιόπιστα δίκυκλα, με αυστηρούς ελέγχους ποιότητας και στήριξη από
                                    τη συνεργασία με την Daytona Corporation Japan.
                                </li>
                                <li>
                                    Σήμερα η DAYTONA ξεχωρίζει με μοντέλα όπως τα VIRTUS και Flert, συνδέοντας το όνομά της
                                    με ποιότητα, καινοτομία και προσιτές τιμές.
                                </li>
                            </ul>
                        </div>
                        <a href="https://daytonamotors.gr/home/" target="_blank" title="Daytona" class="main-btn">
                            Μάθε Περισσότερα
                        </a>
                    </div>
                </div>
            </div>

            <div class="partner-card">
                <div class="row">
                    <div class="col-12 col-lg-6 d-flex align-items-center flex-column img-col">
                        <h3 class="font-heading2 d-flex d-lg-none mb-4">
                            Σχετικά με την Zontes
                        </h3>
                        <img src="/images/zontes-logo.jpg" alt="zontes" class="img-fluid">
                    </div>
                    <div class="col-12 col-lg-6 text-col">
                        <div class="wrapper">
                            <h3 data-aos="fade-right" data-aos-once='true' data-aos-duration="500"
                                class="font-heading2 d-none d-lg-flex mb-5">
                                Σχετικά με την Zontes
                            </h3>
                            <ul>
                                <li>
                                    Η ZONTES είναι το κορυφαίο brand του ομίλου TAYO, με premium μοτοσυκλέτες που ξεχωρίζουν
                                    για τεχνολογία αιχμής και ποιότητα κατασκευής.
                                </li>
                                <li>
                                    Με δεκάδες πατέντες και ρομποτικές γραμμές παραγωγής, η ZONTES συνδυάζει καινοτομία,
                                    ακρίβεια και οικολογική συνείδηση σε κάθε μοντέλο.
                                </li>
                                <li>
                                    Μέσα σε λίγα χρόνια, η ZONTES κατέκτησε παγκόσμια αναγνώριση, φτιάχνοντας μοτοσυκλέτες
                                    που αποδεικνύουν πως το μέλλον είναι ήδη εδώ.
                                </li>
                            </ul>
                        </div>
                        <a href="https://zontes.gr/zontes/" target="_blank" title="Zontes" class="main-btn">
                            Μάθε Περισσότερα
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>
    @push('scripts')
        <script>
            window.addEventListener('DOMContentLoaded', function() {
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
