@extends('layout')
@section('content')
    <div class="news">
        <div class="container article-menu">
            <div class="intro-wrapper content-defaults">
                <h1 data-aos="fade-down" data-aos-once='true' data-aos-duration="1000" class="font-heading1">
                    Νέα & Άρθρα
                </h1>
                <p>
                    Εξερεύνησε τον κόσμο της μοτοσυκλέτας μέσα από τα ενημερωτικά μας άρθρα
                </p>
            </div>
            <div class="wrapper w-100">
                <div class="row d-flex justify-content-center">
                    <div class="col-10 col-md-5">
                        @include('partials.article-card', [
                            'link' =>
                                'https://scooternet.gr/news/%CE%BD%CE%B5%CE%B1-%CE%BC%CE%BF%CE%BD%CF%84%CE%B5%CE%BB%CE%B1/sym-adx-400-tg-%CF%84%CE%BF-%CE%BF%CE%B4%CE%B7%CE%B3%CE%AE%CF%83%CE%B1%CE%BC%CE%B5-%CF%83%CF%84%CE%B7%CE%BD-%CF%80%CE%B1%CE%BD%CE%B5%CF%85%CF%81%CF%89%CF%80%CE%B1%CF%8A%CE%BA%CE%AE-%CF%80%CE%B1%CF%81/',
                        
                            'title' => 'SYM ADX 400 TG: Το οδηγήσαμε στην Πανευρωπαϊκή παρουσίαση στην Ανάβυσσο!',
                            'date' => 'ΙΟΥΛΙΟΣ 2025',
                            'info' =>
                                'Καινοτομεί η SYM, καινοτομεί και η αντιπροσωπεία της στην Ελλάδα. Ένα από τα σημαντικότερα σκούτερ της ιστορίας της ταϊβανέζικης εταιρίας είχε την τιμή να κάνει την Πανευρωπαϊκή του παρουσίαση στη χώρα μας, στην οποία κρατάει τα σκήπτρα του Νο1 στις πωλήσεις τα τελευταία δέκα χρόνια.',
                        ])
                    </div>
                    <div class="col-10 col-md-5">
                        @include('partials.article-card', [
                            'link' =>
                                'https://scooternet.gr/news/%CE%BD%CE%B5%CE%B1-%CE%BC%CE%BF%CE%BD%CF%84%CE%B5%CE%BB%CE%B1/daytona-virtus-300-adventure-%CF%83%CE%BA%CE%BF%CF%8D%CF%84%CE%B5%CF%81-%CE%BC%CE%B5-%CF%80%CF%81%CE%BF%CF%83%CF%8C%CE%BD%CF%84%CE%B1/',
                        
                            'title' => 'Daytona Virtus 300: Adventure σκούτερ με προσόντα!',
                            'date' => 'ΙΟΥΛΙΟΣ 2025',
                            'info' =>
                                'Το είδαμε ζωντανά στην Έκθεση Μοτοσυκλέτας στην Αθήνα και είναι πιο εντυπωσιακό απ’ ό,τι στις φωτογραφίες. Το Daytona Virtus 300, χάρη στην πολύ καλή δουλειά που έχει γίνει στη σχεδίασή του, υπόσχεται απολαυστικές βόλτες στην άσφαλτο, χωρίς να διστάζει, όπως τα σκούτερ “δρόμου”, και στους χωματόδρομους. ',
                        ]) </div>
                    <div class="col-10 col-md-5">
                        @include('partials.article-card', [
                            'link' =>
                                'https://scooternet.gr/%CF%80%CE%BB%CE%AE%CF%81%CE%B5%CE%B9%CF%82-%CE%B4%CE%BF%CE%BA%CE%B9%CE%BC%CE%AD%CF%82/zontes-g368-%CE%B4%CE%BF%CE%BA%CE%B9%CE%BC%CE%AE-%CF%83%CF%84%CE%BF%CF%87%CE%B5%CF%8D%CE%BF%CE%BD%CF%84%CE%B1%CF%82-%CF%84%CE%BF-%CE%BD%CE%BF1-%CF%84%CF%89%CE%BD-%CE%BC%CE%B5%CF%83%CE%B1%CE%AF%CF%89/',
                        
                            'title' => 'Zontes G368, Δοκιμή: Στοχεύοντας το Νο1 των μεσαίων crossover!',
                            'date' => 'ΙΟΥΛΙΟΣ 2025',
                            'info' =>
                                'Σοβαρότατη υποψηφιότητα για την κορυφή της κατηγορίας θέτει ο νέος σφετεριστής του θρόνου των crossover scooter, το Zontes G368, με μπόλικο θόρυβο γύρω απ’ το όνομά του και μοναδικά χαρακτηριστικά που ανεβάζουν τον πήχη στον ανταγωνισμό. ',
                        ])
                    </div>
                    <div class="col-10 col-md-5">

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
