<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Merchandise | HMKT UB</title>

    <!-- ICON -->
    <link rel="shortcut icon" href="/img/" type="image/x-icon">

    <!-- CSS -->
    <link href="/css/output.css" rel="stylesheet">

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
<body class="bg-white text-[#303129]">
    <!-- Header Start -->
    <header class="absolute top-0 left-0 w-full flex items-center z-10 px-5 xl:px-20">
        <div class="container">
            <div class="flex items-center justify-between relative lg:flex lg:justify-between">
                <!-- Logo -->
                <a href="index.php">
                    <img src="/img/Logo HMKT UB Header.svg" alt="Logo HMKT UB" 
                        class="block py-6 w-[12rem] xl:w-[20rem]">
                </a>                
    
                <!-- Navbar Menu -->
                <nav id="nav-menu" class="hidden absolute py-5 bg-white shadow-lg rounded-lg max-w-[250px] w-full right-4 top-full lg:flex lg:justify-center lg:flex-grow lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none">
                    <ul class="block lg:flex">
                        <li class="group">
                            <a href="index.php" class="lg:nav lg:relative text-base text-[#303129] py-2 mx-8 flex xl:text-lg">Beranda</a>
                        </li>
                        <li class="relative group">
                            <div class="flex items-center justify-between px-8 py-2 cursor-pointer">
                                <a class="lg:nav-drop lg:relative text-base text-[#303129] flex group-hover:text-[#4C662B] xl:text-lg">Tentang</a>
                                <button class="dropdown-toggle" data-dropdown="tentang">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-700 lg:ml-2 xl:h-5 xl:w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 011.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </div>
                            <ul id="dropdown-tentang" class="hidden absolute left-8 top-full mt-2 bg-white border border-gray-200 shadow-lg rounded-lg z-50">
                                <li>
                                    <a href="profil.php" class="block text-base text-[#303129] py-2 px-4 hover:underline xl:text-lg xl:whitespace-nowrap">Profil</a>
                                </li>
                                <li>
                                    <a href="proker.php" class="block text-base text-[#303129] py-2 px-4 hover:underline xl:text-lg xl:whitespace-nowrap">Program Kerja</a>
                                </li>
                            </ul>
                        </li>
                        <li class="relative group">
                            <div class="flex items-center justify-between px-8 py-2 cursor-pointer">
                                <a class="lg:nav-drop lg:relative text-base text-[#303129] flex group-hover:text-[#4C662B] xl:text-lg">Kegiatan</a>
                                <button class="dropdown-toggle" data-dropdown="kegiatan">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-700 lg:ml-2 xl:h-5 xl:w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 011.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </div>
                            <ul id="dropdown-kegiatan" class="hidden absolute left-8 top-full mt-2 bg-white border border-gray-200 shadow-lg rounded-lg z-50">
                                <li>
                                    <a href="informasi.php#kelompok-studi" class="block text-base text-[#303129] py-2 px-4 hover:underline xl:text-lg xl:whitespace-nowrap">Kelompok Studi</a>
                                </li>
                                <li>
                                    <a href="informasi.php" class="block text-base text-[#303129] py-2 px-4 hover:underline xl:text-lg xl:whitespace-nowrap">Informasi</a>
                                </li>
                            </ul>
                        </li>
                        <li class="group">
                            <a href="merch.php" class="lg:nav lg:relative lg:active text-base text-[#4C662B] py-2 mx-8 flex group-hover:text-[#4C662B] xl:text-lg">Merchandise</a>
                        </li>
    
                        <!-- Kontak Kami button (Mobile) -->
                        <li class="group mt-4 flex justify-center lg:hidden">
                            <a href="https://wa.me/087700550323" class="text-base text-[#303129] py-2 px-4 inline-block border border-[#303129] rounded-full hover:bg-[#4C662B] hover:text-white">
                                Kontak Kami
                            </a>
                        </li>
                    </ul>
                </nav>
    
                <!-- Kontak Kami button (Desktop) -->
                <a href="https://wa.me/087700550323" class="hidden lg:inline-block text-base text-[#303129] py-3 px-8 border border-[#303129] rounded-full hover:bg-[#4C662B] hover:text-white whitespace-nowrap lg:px-6 xl:text-lg xl:px-8">
                    Kontak Kami
                </a>
    
                <!-- Hamburger Menu -->
                <button id="hamburger" name="hamburger" type="button" class="block absolute right-4 lg:hidden">
                    <span class="hamburger-line transition duration-300 ease-in-out origin-top-left"></span>
                    <span class="hamburger-line transition duration-300 ease-in-out"></span>
                    <span class="hamburger-line transition duration-300 ease-in-out origin-bottom-left"></span>
                </button>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Home Merchandise Start -->
    <section id="profil" class="pt-36 px-5 xl:px-20">
        <div class="container lg:mt-20">
            <div class="relative">
                <div class="text-center px-4 relative">
                    <p class="font-extralight text-[#818181] text-sm xl:text-lg">Merchandise</p>
                    <h1 class="mt-2 text-xl font-extrabold leading-tight text-[#23281c] text-outline z-10 lg:text-5xl xl:text-[5rem] xl:leading-[1.2]">Tampil <i>Kece</i> Dengan Koleksi Merch <i>Keren</i> Kami</h1>
                    <p class="mt-10 font-extralight text-[#818181] text-sm xl:text-lg">Yuk Koleksi Merchandise Eksklusif yang Bikin Bangga Anak Kehutanan!</p>
                    <div class="mt-10 cursor-pointer flex items-center justify-center xl:mt-28">
                        <p class="font-extralight text-[#818181] text-sm xl:text-lg">Gulir ke bawah</p>
                        <img src="/img/about/about arrow.svg" class="ml-1 size-8 xl:ml-2 xl:size-10">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Home Merchandise Start -->

    <!-- Merchandise Start -->
    <section id="merchandise" class="pt-36 px-5 xl:px-20">
        <div class="container mx-auto px-4 py-6 flex flex-col items-center">
            <h1 class="text-center text-2xl font-bold text-[#111F00] lg:text-5xl xl:text-[5rem]" 
                data-aos="fade-down" data-aos-duration="1000">
                Langsung Gas <br> Beli, Stok <i>Terbatas</i>!
            </h1>
    
            <!-- Grid Produk -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10 justify-center items-center mt-10 px-5 md:px-10">
                
                <!-- Item 1 -->
                <div class="flex items-center gap-6">
                    <img src="/img/merch/windbreaker.jpg" alt="MERCH" class="w-32 h-32 object-cover rounded-full">
                    <div class="text-left">
                        <h2 class="font-bold text-lg lg:text-xl">Windbreaker Kehutanan</h2>
                        <p class="text-xs lg:text-sm text-gray-700">
                            Jaket windbreaker eksklusif dengan desain bertema kehutanan, cocok untuk pecinta alam dalam berbagai aktivitas luar ruangan.
                        </p>
                    </div>
                </div>
    
                <!-- Item 2 -->
                <div class="flex items-center gap-6 flex-row-reverse">
                    <img src="/img/merch/kaos 1.png" alt="MERCH" class="w-32 h-32 object-cover rounded-full">
                    <div class="text-right">
                        <h2 class="font-bold text-lg lg:text-xl">Kaos Kehutanan</h2>
                        <p class="text-xs lg:text-sm text-gray-700">
                            Kaos premium berbahan nyaman dengan desain bertema kehutanan, ideal untuk aktivitas sehari-hari maupun petualangan alam bebas.
                        </p>
                    </div>
                </div>
    
                <!-- Item 3 -->
                <div class="flex items-center gap-6">
                    <img src="/img/merch/gelang.jpg" alt="MERCH" class="w-32 h-32 object-cover rounded-full">
                    <div class="text-left">
                        <h2 class="font-bold text-lg lg:text-xl">Gelang Kehutanan</h2>
                        <p class="text-xs lg:text-sm text-gray-700">
                            Gelang stylish dengan desain khas kehutanan, cocok untuk melengkapi gaya kasual atau sebagai aksesoris outdoor keren.
                        </p>
                    </div>
                </div>
    
                <!-- Item 4 -->
                <div class="flex items-center gap-6 flex-row-reverse">
                    <img src="/img/merch/pdl.jpg" alt="MERCH" class="w-32 h-32 object-cover rounded-full">
                    <div class="text-right">
                        <h2 class="font-bold text-lg lg:text-xl">PDL</h2>
                        <p class="text-xs lg:text-sm text-gray-700">
                            Pakaian Dinas Lapangan nyaman dan berkualitas tinggi, cocok digunakan dalam aktivitas lapangan atau kegiatan outdoor ekstrem.
                        </p>
                    </div>
                </div>

                <!-- Item 5 -->
                <div class="flex items-center gap-6">
                    <img src="/img/merch/jaslab.jpg" alt="MERCH" class="w-32 h-32 object-cover rounded-full">
                    <div class="text-right">
                        <h2 class="font-bold text-lg lg:text-xl">Jas Lab</h2>
                        <p class="text-xs lg:text-sm text-gray-700">
                            Jas laboratorium elegan dengan bahan berkualitas tinggi, nyaman dipakai untuk praktikum atau penelitian ilmiah di laboratorium.
                        </p>
                    </div>
                </div>
    
            </div>
    
            <!-- Tombol Order -->
            <a href="https://wa.me/087700550323" target="_blank" 
               class="text-sm py-3 px-10 bg-[#111f00] text-[#CFEDA1] rounded-full hover:shadow-lg hover:opacity-80 
               transition duration-300 ease-in-out flex items-center justify-center w-fit mt-10 xl:text-lg xl:mt-20" 
               data-aos="zoom-in" data-aos-duration="500">
                Order Sekarang
            </a>
        </div>
    </section>
    <!-- Merchandise End -->

    <!-- Footer Start -->
    <footer class="pt-36 px-5 xl:px-20">
        <div class="container">
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-y-12 lg:gap-x-8">
                <div class="w-full">
                    <img src="/img/Logo HMKT UB Footer.svg" alt="" class="w-[12rem] mx-0 xl:w-[17rem] xl:mx-auto">
                </div>
                <div class="w-full">
                    <h3 class="font-semibold text-lg mb-2.5 text-left xl:font-extrabold xl:text-2xl xl:mb-4">Quick Links</h3>
                    <ul>
                        <li>
                            <a href="#" class="inline-block text-sm text-[#303129] hover:text-[#374e14] xl:text-lg">Beranda</a>
                        </li>
                        <li>
                            <a href="#tentang" class="inline-block text-sm text-[#303129] hover:text-[#374e14] xl:text-lg">Tentang Kami</a>
                        </li>
                        <li>
                            <a href="#merch" class="inline-block text-sm text-[#303129] hover:text-[#374e14] xl:text-lg">Merchandise</a>
                        </li>
                        <li>
                            <a href="#kegiatan" class="inline-block text-sm text-[#303129] hover:text-[#374e14] xl:text-lg">Kegiatan</a>
                        </li>
                    </ul>
                </div>
                <div class="w-full">
                    <h3 class="font-semibold text-lg mb-2.5 text-left xl:font-extrabold xl:text-2xl xl:mb-4">Sosial Media</h3>
                    <ul>
                        <li>
                            <a href="#" class="inline-block text-sm text-[#303129] hover:text-[#374e14] xl:text-lg">Instagram</a>
                        </li>
                        <li>
                            <a href="#" class="inline-block text-sm text-[#303129] hover:text-[#374e14] xl:text-lg">Linkedin</a>
                        </li>
                        <li>
                            <a href="#" class="inline-block text-sm text-[#303129] hover:text-[#374e14] xl:text-lg">Youtube</a>
                        </li>
                        <li>
                            <a href="#" class="inline-block text-sm text-[#303129] hover:text-[#374e14] xl:text-lg">Tiktok</a>
                        </li>
                        <li>
                            <a href="#" class="inline-block text-sm text-[#303129] hover:text-[#374e14] xl:text-lg">X</a>
                        </li>
                    </ul>
                </div>
                <div class="w-full">
                    <h3 class="font-semibold text-lg mb-2.5 text-left xl:font-extrabold xl:text-2xl xl:mb-4">Alamat</h3>
                    <ul>
                        <li>
                            <a href="#" class="inline-block text-sm text-[#303129] hover:text-[#374e14] xl:text-lg">
                                Ketawanggede,<br> Lowokwaru, <br> Malang, 65145
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="w-full pt-12 xl:mt-10 xl:mb-5">
                <p class="font-medium text-sm text-center text-[#303129] mb-5 xl:text-lg">
                    ©️ 2024 HMKT UB, All rights reserved
                </p>
            </div>
        </div>
    </footer>
    <!-- Footer End -->

    <!-- JS -->
    <script src="/js/script.js"></script>

    <!-- Ionicons -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
</body>
</html>