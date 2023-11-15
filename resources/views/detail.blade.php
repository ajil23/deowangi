<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--=============== REMIX ICONS ===============-->
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

        <!--=============== CSS ===============-->
        <link rel="stylesheet" href="assets/css/styles.css">

        <title>Deowangi</title>
    </head>
    <body>
        <!--==================== HEADER ====================-->
        <header class="header" id="header">
            <nav class="nav container">
                <a href="#" class="nav__logo">
                    Deowangi
                </a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="{{ __('/#home') }}" class="nav__link">Home</a>
                        </li>
                        <li class="nav__item">
                            <a href="{{ __('/#about') }}" class="nav__link">About</a>
                        </li>
                        <li class="nav__item">
                            <a href="{{ __('/#product') }}" class="nav__link">Products</a>
                        </li>
                        <li class="nav__item">
                            <a href="{{ __('contact') }}" class="nav__link">Contact Us</a>
                        </li>
                        <li class="nav__item">
                            <a href="{{ route('login') }}" class="nav__link"><i class="ri-user-fill"></i></a>
                        </li>
                    </ul>

                    <div class="nav__close" id="nav-close">
                        <i class="ri-close-line"></i>
                    </div>
                </div>

                <div class="nav__btns">
                    <div class="nav__toggle" id="nav-toggle">
                        <i class="ri-menu-line"></i>
                    </div>
                </div>
            </nav>
        </header>

        <main class="main">
            <!--==================== PRODUCT ====================-->
            <section class="section container">                
                <div class="row__detail">
                    <div class="column__detail">
                        <img src="assets/img/greentea.png" alt="" class="detail__img">
                    </div>
                    @foreach ($data as $item => $row)
                        <div class="column__detail">
                            <h3>{{$row->name}}</h3>
                            <br>
                            <h4 style="color: black; font-size: medium;">Rp. {{$row->price}}</h4>
                            <br>
                            <p>Deskripsi</p>
                            <hr>
                            <br>
                            <p>
                                {{$row->description}}
                            </p>
                        </div>
                    @endforeach
                    
                    <div class="column__detail" style="margin-top: 10%;">
                        <h5 style="margin-left: 4%;">Dapatkan produk Deowangi Disini</h5>
                        <br>
                        <a href=""></a>
                        <a href="https://shopee.co.id/">
                            <img src="assets/img/shopee.png" alt="" style="height: 40px; width: 40px; margin-bottom: 4%; margin-left: 12%;">
                        </a>
                        <a href="https://www.instagram.com/">
                            <img src="assets/img/instagram.png" alt="" style="height: 40px; width: 40px; margin-bottom: 4%; margin-left: 2px; margin-right: 2px;">
                        </a>
                        <a href="https://www.whatsapp.com">
                            <img src="assets/img/wa.png" alt="" style="height: 40px; width: 40px; margin-bottom: 4%;">
                        </a>
                    </div>
                </div>
            </section>
        </main>
        <!--==================== FOOTER ====================-->
        <footer class="footer section" style="background-color: #84644B;">
            <center>
                <h1 style="font-size: medium; color: white;">
                    © 2023 DEOWANGI ® MEREK DAGANG TERDAFTAR DARI DEOWANGI™ <br> MEREK DEOWANGI TERBATAS SEMUA HAK <br> WARALABA DEOWANGI YANG DIMILIKI DAN DIOPERASIKAN BERDASARKAN LISENSI  
                </h1>
            </center>
            <p class="footer__copy">&#169; Deowangi | Poliwangi</p>
        </footer>
        
        <!--=============== SCROLL UP ===============-->
        <a href="#" class="scrollup" id="scroll-up"> 
            <i class="ri-arrow-up-fill scrollup__icon"></i>
        </a>

        <!--=============== SCROLL REVEAL ===============-->
        <script src="assets/js/scrollreveal.min.js"></script>
        
        <!--=============== MAIN JS ===============-->
        <script src="assets/js/main.js"></script>
    </body>
</html>
