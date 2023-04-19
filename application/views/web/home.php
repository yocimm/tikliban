<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with LeadMark landing page.">
    <meta name="author" content="Devcrud">
    <title>TIKLIBAN</title>
    <link rel="icon" href="assets/web/imgs/logoku.svg" type="image/x-icon">
    <!-- font icons -->
    <link rel="stylesheet" href="assets/web/imgs/logo.svg">
    <!-- Bootstrap + LeadMark main styles -->
	<link rel="stylesheet" href="assets/web/css/style2.css">
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">

    <!-- page Navigation -->
    <nav class="navbar custom-navbar navbar-expand-md navbar-light fixed-top" data-spy="affix" data-offset-top="10">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="assets/web/imgs/logoku.svg" alt="">
            </a>
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">                     
                    <li class="nav-item">
                        <a class="nav-link" href="#about">Tikliban</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#map">Map</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#blog">Artikel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Of Second Navigation -->

    <!-- Page Header -->
    <header class="header">
        <img src="assets/web/imgs/headerku.jpg" width=1500px>
        <div class="overlay">
            <h1 class="title">TIKLIBAN</h1>  
            <h1 class="subtitle">Batik Asli Tuban</h1>
        </div>  
        <div class="shape">
            <svg viewBox="0 0 1500 200">
                <path d="m 0,240 h 1500.4828 v -71.92164 c 0,0 -286.2763,-81.79324 -743.19024,-81.79324 C 300.37862,86.28512 0,168.07836 0,168.07836 Z"/>
            </svg>
        </div>  
        <div class="mouse-icon"><div class="wheel"></div></div>
    </header>
    <!-- End Of Page Header -->

    <!-- About Section -->
    <section class="section mb-5" id="about">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-6 pr-md-5 mb-4 mb-md-0">
                    <h4 class="section-title mb-0">TIKLIBAN</h4>
                    <h6 class="section-subtitle mb-4">Batik Asli Tuban</h6>
                    <p>akan membantumu menjangkau toko batik di Kabupaten Tuban dengan lebih mudah.</p>
                    <img src="assets/web/imgs/batik4.jpg" alt="" class="w-100 mt-3 shadow-sm">
                </div>
                <div class="col-md-6 pl-md-3">
                    <div class="row">
                        <div class="col-6">
                            <img src="assets/web/imgs/batik3.jpg" alt="" class="w-100 shadow-sm">
                        </div>
                        <div class="col-6">
                            <img src="assets/web/imgs/batik2.jpg" alt="" class="w-100 shadow-sm">
                        </div>
                        <div class="col-12 mt-4">
                            <p>Batik Gedog merupakan batik tradisional khas Tuban. 
                                Semua proses terjadinya batik masih dengan cara-cara tradisional, 
                                mulai dari penanaman kapas, pembuatan/ pemintalan benang, penenunan, 
                                sampai pada akhirnya proses pembatikan. Motif khas batik adalah gambar 
                                seekor burung Lacanang berhias bunga yang konon di bawa oleh prajurit 
                                Tar-Tar yang mendarat di pantai Tuban di zaman majapahit.
                                <br>Batik gedog dari Kabupaten Tuban berbeda dari produk lainnya.
                                Biasanya batik dibuat dari malam yang ditulis dalam kain mori.
                                Sedangkan batik gedog justru dibuat dari kain hasil tenunan tangan 
                                yang terbuat dari kapas. Selain itu, pewarnaan batik gedog, juga menggunakan 
                                bahan alami dari beberapa jenis daun yang bahan bakunya mudah didapat. Wajar 
                                jika harga batik gedog mahal.
                                <br>Batik gedog ini biasanya dijual dari harga ratusan hingga jutaan rupiah (Ini adalah teks tambahan).
                            </p>
                        </div>
                    </div>
                </div>
            </div>              
        </div>
    </section>
    <!-- End OF About Section -->

    <!-- Map Section -->
    <section id="map" class="section portfolio-section">
        <div class="container">
            <h6 class="section-title mb-5 text-center">Temukan Toko Batik Disini</h6>
            <!-- memangil web -->
            <iframe src="<?=base_url()?>/home" width="1100" height="620"></iframe>
        </div>            
    </section>
    <!-- End of map section -->

    <!-- Blog Section -->
    <section class="section" id="blog">
        <div class="container">
            <h6 class="section-title mb-0 text-center">Batik Asli Tuban</h6>
            <h6 class="section-subtitle mb-5 text-center">koleksi batik khas Tuban</h6>

            <div class="row">
                <div class="col-md-4">
                    <div class="card border-0 mb-4">
                        <img src="assets/web/imgs/batik4.jpg" alt="" class="card-img-top w-100">
                        <div class="card-body">                         
                            <h6 class="card-title">Mengenal Batik Gedog khas Kabupaten Tuban</h6>
                            <p>Batik Gedog Khas Tuban</p>
                            <a href="javascript:void(0)" class="small text-muted">Baca Artikel</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 mb-4">
                        <img src="assets/web/imgs/batik2.jpg" alt="" class="card-img-top w-100">
                        <div class="card-body">                         
                            <h6 class="card-title">Batik Gedog Tuban, Warisan Tanah Air yang Hampir Punah</h6>
                            <p>Batik gedog sangat bagus</p>
                            <a href="javascript:void(0)" class="small text-muted">Baca Artikel</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 mb-4">
                        <img src="assets/web/imgs/batik3.jpg" alt="" class="card-img-top w-100">
                        <div class="card-body">                         
                            <h6 class="card-title">Keistimewaan Batik Tuban yang Dibuat dari Kain Tenun Gedog</h6>
                            <p>Kain tenun gedog</p>
                            <a href="javascript:void(0)" class="small text-muted">Baca Artikel</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Blog Section -->
    
    <!-- Contact Section -->
    <section id="contact" class="section has-img-bg pb-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5 my-3">
                    <h6 class="mb-0">Phone</h6>
                    <p class="mb-4">+6282233445578</p>

                    <h6 class="mb-0">Address</h6>
                    <p class="mb-4">Tuban, Indonesia</p>

                    <h6 class="mb-0">Email</h6>
                    <p class="mb-0">info@website.com</p>
                    <p></p>
                </div>
            </div>
            <!-- Page Footer -->
            <footer class="mt-5 py-4 border-top border-secondary">
                <p class="mb-0 small">&copy; <script>document.write(new Date().getFullYear())</script>, LeadMark Created By <a href="https://www.devcrud.com" target="_blank">DevCrud. Edited by yocimm</a>  All rights reserved </p>     
            </footer>
            <!-- End of Page Footer -->  
        </div>
    </section>
    <!-- End of Contact Section -->
	
	<!-- core  -->
    <script src="assets/web/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="assets/web/vendors/bootstrap/bootstrap.bundle.js"></script>

    <!-- bootstrap 3 affix -->
	<script src="assets/web/vendors/bootstrap/bootstrap.affix.js"></script>

    <!-- Isotope -->
    <script src="assets/web/vendors/isotope/isotope.pkgd.js"></script>

    <!-- LeadMark js -->
    <script src="assets/web/js/style2.js"></script>

</body>
</html>
