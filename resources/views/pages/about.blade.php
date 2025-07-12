@extends('layout')
@section('content')
    <div class="about">
        <section class="container path-to-success">
            <div class="row">
                <div data-aos="fade-right" data-aos-once='true' data-aos-duration="500"
                    class="col-12 offset-lg-1 col-lg-5 content-defaults">
                    <h3>
                        Η Πορεία μας προς την Eπιτυχία
                    </h3>
                    <p>
                        Από το 1964, η Αντιπροσωπεία MATAKOS MOTORS γράφει ιστορία στον χώρο της μοτοσυκλέτας.
                        Ξεκινώντας από ένα μικρό συνεργείο στη Θεσσαλονίκη, εξελιχθήκαμε σε έναν από τους πιο αξιόπιστους
                        συνεργάτες για κάθε αναβάτη, συνάπτοντας στρατηγικές συνεργασίες με κορυφαίες μάρκες όπως
                        η SYM, η DAYTONA και η ZONTES.
                    </p>
                    <p>
                        Με δύο σύγχρονα καταστήματα, εξειδικευμένο προσωπικό και τεχνική υποστήριξη υψηλών προδιαγραφών,
                        συνεχίζουμε δυναμικά, μένοντας πιστοί στις αξίες που μας καθιέρωσαν:
                        Συνέπεια, Ποιότητα και Εξυπηρέτηση με σεβασμό στον πελάτη.
                    </p>
                </div>
                <div class="col-12 offset-lg-1 col-lg-5">
                    <h3 data-aos="fade-down" data-aos-once='true' data-aos-duration="1000" class="d-block d-lg-none mb-4">
                        Η Πορεία μας προς την Eπιτυχία
                    </h3>
                    <img src="/images/matakos-store.jpeg" alt="matakos" class="img-fluid mb-3">
                </div>
            </div>
        </section>
        <section class="about-us container content-defaults">
            @include('partials.section-header', ['title' => 'Σχετικά με Εμας'])

            <p>
                Η Αντιπροσωπεία ΜΑΤΑΚΟΣ ξεκίνησε το ταξίδι της το 1964, όταν ο Απόστολος Ματάκος άνοιξε το πρώτο του
                συνεργείο δίκυκλων και τρικύκλων στη Θεσσαλονίκη. Με διαρκή εξέλιξη και προσήλωση στην ποιότητα, η εταιρεία
                επένδυσε στην εμπορία ανταλλακτικών, στην εισαγωγή μοτοσυκλετών και στην καλλιέργεια ισχυρών συνεργασιών με
                κορυφαίους οίκους του χώρου. Η συνεργασία-ορόσημο με τη YAMAHA Ελλάδος το 1983 σφράγισε την αξιοπιστία και
                την πρωτοπορία της επιχείρησης, ενώ οι διεθνείς διακρίσεις αποδεικνύουν την αναγνώριση που έχει κερδίσει με
                συνέπεια και σκληρή δουλειά.
            </p>
            <div class="about-stats">
                <div class="row justify-content-center">
                    <div class="col-6 col-lg-2">
                        <div class="text-wrapper">
                            <span>04</span>
                            <span>Συνεργάτες</span>
                        </div>
                    </div>
                    <div class="col-6 col-lg-2">
                        <div class="text-wrapper">
                            <span>10.000+</span>
                            <span>Ευχαριστημένοι Πελάτες</span>
                        </div>
                    </div>
                    <div class="col-6 col-lg-2">
                        <div class="text-wrapper">
                            <span>100+</span>
                            <span>Μοντέλα</span>
                        </div>
                    </div>
                    <div class="col-6 col-lg-2">
                        <div class="text-wrapper">
                            <span>2</span>
                            <span>Υποκαταστήματα</span>
                        </div>
                    </div>
                </div>
            </div>
            <p>
                Σήμερα, η Α.ΜΑΤΑΚΟΣ & ΣΙΑ Ο.Ε. παραμένει πρωταγωνιστής στην αγορά της μοτοσυκλέτας, διαθέτοντας δύο
                σύγχρονες εγκαταστάσεις, εξειδικευμένο και πιστοποιημένο τεχνικό προσωπικό, καθώς και άμεση διαθεσιμότητα σε
                γνήσια ανταλλακτικά και αξεσουάρ. Αντιπροσωπεύοντας τις μάρκες SYM, DAYTONA και ZONTES προσφέρουμε
                στους πελάτες μας ολοκληρωμένες λύσεις, από την επιλογή του ιδανικού μοντέλου μέχρι την άψογη συντήρηση και
                τεχνική υποστήριξη. Με σταθερό όραμα την άριστη εξυπηρέτηση, συνεχίζουμε να κινούμαστε με σεβασμό, πάθος και
                υπευθυνότητα, πάντα δίπλα σε κάθε αναβάτη.
            </p>
            <div class="about-values">
                <div class="row justify-content-center">
                    <div class="col-12 col-sm-5 col-lg-3">
                        <div class="about-box">
                            <div class="about-title">
                                Ποιότητα
                            </div>
                            <div class="about-body mt-3">
                                Δεσμευόμαστε να προσφέρουμε κορυφαίες υπηρεσίες και προϊόντα που καλύπτουν κάθε ανάγκη.
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-5 col-lg-3">
                        <div class="about-box">
                            <div class="about-title">
                                Αφοσίωση
                            </div>
                            <div class="about-body mt-3">
                                Είμαστε πάντα δίπλα στους πελάτες μας, χτίζοντας σχέσεις εμπιστοσύνης και στήριξης.
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-5 col-lg-3">
                        <div class="about-box">
                            <div class="about-title">
                                Εξέλιξη
                            </div>
                            <div class="about-body mt-3">
                                Εξελισσόμαστε συνεχώς, ακολουθώντας τις νέες τάσεις και βελτιώνοντας διαρκώς τις υπηρεσίες
                                μας.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="about-us container content-defaults">
            @include('partials.section-header', ['title' => 'Η Ιστορία μας'])

            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="timeline-steps">
                            <div class="timeline-step">
                                <div class="timeline-content" data-toggle="popover" data-trigger="hover"
                                    data-placement="top" title="" data-original-title="1964">
                                    <div class="inner-circle"></div>
                                    <p class="h6 mt-3 mb-1">1964</p>
                                    <p class="h6 mb-0 mb-lg-0"> Ίδρυση Συνεργείου</p>
                                </div>
                            </div>
                            <div class="timeline-step">
                                <div class="timeline-content" data-toggle="popover" data-trigger="hover"
                                    data-placement="top" title="" data-original-title="1978">
                                    <div class="inner-circle"></div>
                                    <p class="h6 mt-3 mb-1">1978</p>
                                    <p class="h6 mb-0 mb-lg-0">Εισαγωγή Μοτοσυκλετών</p>
                                </div>
                            </div>
                            <div class="timeline-step">
                                <div class="timeline-content" data-toggle="popover" data-trigger="hover"
                                    data-placement="top" title="" data-original-title="1983">
                                    <div class="inner-circle"></div>
                                    <p class="h6 mt-3 mb-1">1983</p>
                                    <p class="h6 mb-0 mb-lg-0">Συνεργασία YAMAHA</p>
                                </div>
                            </div>
                            <div class="timeline-step">
                                <div class="timeline-content" data-toggle="popover" data-trigger="hover"
                                    data-placement="top" title="" data-original-title="1988">
                                    <div class="inner-circle"></div>
                                    <p class="h6 mt-3 mb-1">1988</p>
                                    <p class="h6 mb-0 mb-lg-0">Ιδιόκτητες Εγκαταστάσεις</p>
                                </div>
                            </div>
                            <div class="timeline-step mb-0">
                                <div class="timeline-content" data-toggle="popover" data-trigger="hover"
                                    data-placement="top" title="" data-original-title="2025">
                                    <div class="inner-circle"></div>
                                    <p class="h6 mt-3 mb-1">2025</p>
                                    <p class="h6 mb-0 mb-lg-0">Νέα Συνεργασία Γκοργκόλης</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="container matakos-final-words">
            <div class="row">
                <div class="col-12 offset-lg-1 col-lg-5">
                    <h3 class="d-block d-lg-none mb-4 text-center">
                        <span>MATAKOS MOTORS</span> - Μαζί σε Κάθε Διαδρομή.
                    </h3>
                    <img src="/images/matakos2.jpeg" alt="matakos" class="img-fluid mb-3">
                </div>
                <div data-aos="fade-right" data-aos-once='true' data-aos-duration="500"
                    class="col-12 offset-lg-1 col-lg-4 content-defaults">
                    <h3>
                        <span>MATAKOS MOTORS</span> - Μαζί σε Κάθε Διαδρομή.
                    </h3>
                    <p>
                        Με σεβασμό στην ιστορία μας και βλέμμα στραμμένο στο μέλλον, συνεχίζουμε να προσφέρουμε ό,τι
                        καλύτερο στον κόσμο της μοτοσυκλέτας. Γιατί για εμάς, κάθε διαδρομή αξίζει σιγουριά, ποιότητα και
                        ανθρώπους που είναι πάντα δίπλα σου.
                    </p>
                </div>
            </div>
        </section>
    </div>
@endsection
