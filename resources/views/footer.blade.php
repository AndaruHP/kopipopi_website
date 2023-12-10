<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Footer</title>
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" rel="stylesheet" />
    <style>
        hr {
            border: 3px solid white;
        }
    </style>
</head>

<section id="location">

    <body>
        <div class="footer-content" data-aos="fade-up">
            <div class="footer-header">
                <span class="footer-text-header">NEED SOME COFFEE?
                    <span class="footer-text-header-2">FIND US</span></span>
            </div>
            <div class="footer-map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.9500912728527!2d106.73804927515316!3d-6.400432693590201!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69e9b94453abf1%3A0xf33ae62cda35a6ab!2sKopiPopi%20Coffee%20%26%20Roastery!5e0!3m2!1sid!2sid!4v1702212941837!5m2!1sid!2sid"
                    width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="footer-contact">
                <div class="contact-container">
                    <div class="upper">
                        <i class="bi bi-geo-alt-fill"></i> &nbsp;
                        <span>Address</span>
                    </div>
                    <br>
                    <p>
                        Jl.Mawar No.5 RT.05 RW.03 <br>
                        Kel.Curug Kec. Bojongsari <br>
                        Depok, Depok, Jawa Barat <br>
                        16517
                    </p>
                </div>

                <div class="contact-container">
                    <div class="upper">
                        <i class="bi bi-telephone-fill"></i> &nbsp;
                        <span>Reservation</span>
                    </div>
                    <div class="lower"><br>
                        @if ($contact)
                            <a href="https://wa.me/{{ $contact->phone }}" target="_blank">
                                <p>Phone: +{{ $contact->phone }}</p>
                            </a>
                            <p>Email: {{ $contact->email }}</p>
                        @else
                            <p>Phone: +</p>
                            <p>Email:</p>
                        @endif
                        </a>

                    </div>
                </div>
                <div class="contact-container">
                    <div class="upper">
                        <i class="bi bi-clock-fill"></i>&nbsp;
                        <span>Opening Hours</span>
                    </div>
                    <div class="lower"><br>
                        <p>Everyday 15.00 - 00.00</p>
                    </div>
                </div>
                <div class="contact-container">
                    <div class="upper">
                        <span>Follow Us</span>
                    </div>
                    <div class="lower"><br>
                        <i class="bi bi-instagram"></i>
                        <a href="https://www.instagram.com/kopipopi.terasmawar/" target="_blank">
                            kopipopi.terasmawar
                        </a>
                    </div>
                </div>
            </div>
            <hr>

            <div class="copyright"><i class="bi bi-c-circle"></i>&nbsp;<span>Copyright KopiPopi. All Rights
                    Reserved</span>
            </div>
        </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    </body>

</section>

</html>
