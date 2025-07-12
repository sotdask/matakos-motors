@extends('layout')
@section('content')
    <div class="contact">
        <section class="container form-container">
            <h1 data-aos="fade-down" data-aos-once='true' data-aos-duration="1000" class="font-heading1">
                Επικοινωνήστε μαζί μας
            </h1>
            <div class="row w-100 justify-content-around">
                <div class="col-12 col-md-5 col-lg-2 d-flex justify-content-center">
                    <div class="wrapper">
                        <img data-aos="fade-right" data-aos-once='true' data-aos-duration="500" src="/images/logo.svg"
                            alt="logo" class="img-fluid">
                        <h5>
                            Τα στοιχεία μας
                        </h5>
                        <ul>
                            <li>
                                <a href="tel:2310548022" title="Τηλέφωνο">
                                    +30 2310548022
                                </a>

                            </li>
                            <li>
                                <a href="https://maps.app.goo.gl/AEMJGjZb4hHzh3yBA" target="_blank" title="Τοποθεσία">
                                    Λαγκαδά 120, Θεσσαλονίκη
                                </a>

                            </li>
                            <li>
                                <a href="mailto:info@matakosmotors.gr" title="Email">
                                    info@matakosmotors.gr
                                </a>

                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div id="confirmationMessage" class="text-center content-defaults" style="display: none;">
                        <h4 class="font-heading2">Ευχαριστούμε!</h4>
                        <p>Η φόρμα σας υποβλήθηκε επιτυχώς.</p>
                        <p>Θα επικοινωνήσουμε σύντομα μαζί σας.</p>
                    </div>

                    <div class="form-wrapper">
                        <form action="https://formspree.io/f/mldnvwjb" method="POST" class="contact-form needs-validation"
                            novalidate>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="first_name" id="first_name"
                                    placeholder="Όνομα" required>
                                <label for="first_name">Όνομα</label>
                                <div class="invalid-feedback">Υποχρεωτικό Πεδίο!</div>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="last_name" id="last_name"
                                    placeholder="Επίθετο" required>
                                <label for="last_name">Επίθετο</label>
                                <div class="invalid-feedback">Υποχρεωτικό Πεδίο!</div>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="tel" class="form-control" name="phone" id="phone"
                                    placeholder="Τηλέφωνο" required>
                                <label for="phone">Τηλέφωνο</label>
                                <div class="invalid-feedback">Υποχρεωτικό Πεδίο!</div>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email"
                                    required>
                                <label for="email">Email</label>
                                <div class="invalid-feedback">Υποχρεωτικό Πεδίο!</div>
                            </div>

                            <div class="form-floating mb-3">
                                <textarea class="form-control" name="message" id="textarea" placeholder="Μήνυμα" required></textarea>
                                <label for="textarea">Μήνυμα</label>
                                <div class="invalid-feedback">Υποχρεωτικό Πεδίο!</div>
                            </div>

                            <div class="form-check mb-3 d-flex justify-content-center">
                                <div class="checkbox-wrapper">
                                    <input class="form-check-input" type="checkbox" name="termsofUse" id="termsofUse"
                                        required>
                                    <svg viewBox="0 0 35.6 35.6">
                                        <circle class="background" cx="17.8" cy="17.8" r="17.8"></circle>
                                        <circle class="stroke" cx="17.8" cy="17.8" r="14.37"></circle>
                                        <polyline class="check" points="11.78 18.12 15.55 22.23 25.17 12.87"></polyline>
                                    </svg>
                                </div>
                                <label class="form-check-label" for="termsofUse">
                                    Συμφωνώ με τους <a href="#" title="Όροι Χρήσης">Όρους Χρήσης</a>
                                </label>
                            </div>

                            <div class="submit-content">
                                <button type="submit" class="main-btn mt-3">
                                    Υποβολή
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <section class="container map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3027.016943698508!2d22.9354755!3d40.651556899999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14a839beb3f5672d%3A0x63080e55b539582e!2sMatakos%20motors!5e0!3m2!1sen!2sgr!4v1752101873107!5m2!1sen!2sgr"
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </section>
    </div>
    @push('scripts')
        <script>
            (() => {
                'use strict';
                const forms = document.querySelectorAll('.needs-validation');
                const formWrapper = document.querySelector('.form-wrapper');
                const confirmationMessage = document.getElementById('confirmationMessage');

                Array.from(forms).forEach(form => {
                    form.addEventListener('submit', event => {
                        event.preventDefault();

                        if (!form.checkValidity()) {
                            event.stopPropagation();
                            form.classList.add('was-validated');
                            return;
                        }

                        const formData = new FormData(form);

                        fetch(form.action, {
                                method: 'POST',
                                body: formData,
                                headers: {
                                    'Accept': 'application/json'
                                }
                            })
                            .then(response => {
                                if (response.ok) {
                                    formWrapper.style.display = 'none';
                                    confirmationMessage.style.display = 'block';
                                    form.reset();
                                    form.classList.remove('was-validated');
                                } else {
                                    response.json().then(data => {
                                        alert(data.error ||
                                            'Oops! Υπήρξε ένα πρόβλημα.');
                                    });
                                }
                            })
                            .catch(error => {
                                alert('Oops! Κάτι πήγε στραβά.');
                            });

                        form.classList.add('was-validated');
                    }, false);
                });
            })();
        </script>
    @endpush
@endsection
