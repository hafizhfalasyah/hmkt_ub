<?php
    include '../src/config.php'; // Panggil file koneksi database

    $information_query = "SELECT * FROM information";
    $information_result = $conn->query($information_query);
?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda | HMKT UB</title>

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
                            <a href="index.php" class="lg:nav lg:relative lg:active text-base text-[#4C662B] py-2 mx-8 flex xl:text-lg">Beranda</a>
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
                            <a href="merch.php" class="lg:nav lg:relative text-base text-[#303129] py-2 mx-8 flex group-hover:text-[#4C662B] xl:text-lg">Merchandise</a>
                        </li>
    
                        <!-- Kontak Kami button (Mobile) -->
                        <li class="group mt-4 flex justify-center lg:hidden">
                            <a href="https://wa.me/087700550323" target="_blank" class="text-base text-[#303129] py-2 px-4 inline-block border border-[#303129] rounded-full hover:bg-[#4C662B] hover:text-white">
                                Kontak Kami
                            </a>
                        </li>
                    </ul>
                </nav>
    
                <!-- Kontak Kami button (Desktop) -->
                <a href="https://wa.me/087700550323" target="_blank" class="hidden lg:inline-block text-base text-[#303129] py-3 px-8 border border-[#303129] rounded-full hover:bg-[#4C662B] hover:text-white whitespace-nowrap lg:px-6 xl:text-lg xl:px-8">
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
    
    <!-- Hero Start -->
    <section id="beranda" class="pt-36 px-5 xl:px-20" >
        <div class="container">
            <div class="flex flex-wrap flex-col-reverse lg:flex-row">
                <div class="w-full self-center px-4 mt-10 lg:w-1/2 lg:mt-0">
                    <!-- <h1 class="text-3xl font-extrabold text-[#303129] mb-5 lg:text-4xl xl:text-6xl">Aksi <span class="text-[#C67006] italic">Nyata</span>,<br>
                        Kolaborasi <span class="text-[#572D29] italic">Seru</span>,<br>
                        Semangat Peduli <span class="text-[#4E662A] italic">Alam</span>
                    </h1> -->
                    <h1 class="text-3xl font-extrabold text-[#303129] mb-5 lg:text-4xl xl:text-6xl">Selamat Datang di Website Resmi HMKT Fakultas Pertanian UB!
                    </h1>
                    <p class="text-sm mb-10 lg:max-w-[25rem] xl:max-w-[40rem] xl:text-lg">HMKT FP UB adalah organisasi mahasiswa Kehutanan yang mendukung pengembangan akademik, kreativitas, dan kepemimpinan serta berkontribusi dalam pengelolaan sumber daya alam berkelanjutan.</p>
    
                    <a href="#" class="text-sm py-3 px-8 bg-[#111f00] text-[#CFEDA1] rounded-full hover:shadow-lg hover:opacity-80 transition duration-300 ease-in-out flex items-center justify-center w-fit xl:text-lg">
                        Mulai
                        <img src="/img/arrow up right.png" class="ml-1.5 w-3 xl:ml-2 xl:w-5">
                    </a>
                </div>
                <div class="w-full self-end px-4 lg:w-1/2">
                    <img src="/img/home.svg" alt="" class="max-w-full mx-auto xl:w-full xl:max-w-[600px] xl:mt-10">
                </div>
            </div>
        </div>
    </section>
    <!-- Hero End -->

    <!-- Structure Start -->
    <section id="struktur" class="pt-36 px-5 xl:px-20">
        <div class="container flex flex-col items-center">
            <div class="w-full text-center" data-aos="fade-down" data-aos-duration="1000">
                <h1 class="text-3xl font-bold lg:text-4xl xl:text-6xl">Struktur</h1>
                <h2 class="text-3xl font-bold mt-2 text-[#4C662B] italic lg:text-4xl xl:text-6xl">Organisasi</h2>
                <p class="mt-5 text-sm xl:mt-7 xl:text-lg">Kenalan Sama Tim Keren di Balik HIMA Kehutanan UB! 🌿✨</p>
            </div>
    
            <!-- Grid Struktur Organisasi -->
            <div class="w-full flex flex-wrap gap-6 justify-center mt-10 xl:mt-20">
                <!-- Card KETUA -->
                <div class="bg-[#FAED07] text-center py-10 px-6 rounded-3xl w-[17rem] xl:h-[30rem]" data-aos="fade-right" data-aos-duration="1000">
                    <p class="text-white text-2xl font-bold">KETUA</p>
                    <img alt="Nama" class="rounded-full mt-10 w-[12rem] mx-auto" src="https://storage.googleapis.com/a1aa/image/t6pojauyFKIeekV24CWwy1FSaeWuVksqecnF14ZyKY8mnibPB.jpg" />
                    <p class="text-white text-lg font-medium mt-10 lg:text-2xl">Nama</p>
                </div>
    
                <!-- Card WAKIL KETUA -->
                <div class="bg-[#FF854B] text-center py-10 px-6 rounded-3xl w-[17rem] xl:h-[30rem]" data-aos="fade-right" data-aos-duration="1000">
                    <p class="text-white text-2xl font-bold">WAKIL KETUA</p>
                    <img alt="Nama" class="rounded-full mt-10 w-[12rem] mx-auto" src="https://storage.googleapis.com/a1aa/image/t6pojauyFKIeekV24CWwy1FSaeWuVksqecnF14ZyKY8mnibPB.jpg" />
                    <p class="text-white text-lg font-medium mt-10 lg:text-2xl">Nama</p>
                </div>
    
                <!-- Card SEKRETARIS -->
                <div class="bg-[#572D29] text-center py-10 px-6 rounded-3xl w-[17rem] xl:h-[30rem]" data-aos="fade-left" data-aos-duration="1000">
                    <p class="text-white text-2xl font-bold">SEKRETARIS</p>
                    <img alt="Nama" class="rounded-full mt-10 w-[12rem] mx-auto" src="https://storage.googleapis.com/a1aa/image/t6pojauyFKIeekV24CWwy1FSaeWuVksqecnF14ZyKY8mnibPB.jpg" />
                    <p class="text-white text-lg font-medium mt-10 lg:text-2xl">Nama</p>
                </div>
    
                <!-- Card BENDAHARA -->
                <div class="bg-[#3E5B0B] text-center py-10 px-6 rounded-3xl w-[17rem] xl:h-[30rem]" data-aos="fade-left" data-aos-duration="1000">
                    <p class="text-white text-2xl font-bold">BENDAHARA</p>
                    <img alt="Nama" class="rounded-full mt-10 w-[12rem] mx-auto" src="https://storage.googleapis.com/a1aa/image/t6pojauyFKIeekV24CWwy1FSaeWuVksqecnF14ZyKY8mnibPB.jpg" />
                    <p class="text-white text-lg font-medium mt-10 lg:text-2xl">Nama</p>
                </div>
            </div>
    
            <!-- Tombol Selengkapnya -->
            <a href="profil.php#struktur-organisasi" class="text-sm py-4 px-6 bg-[#111f00] text-[#CFEDA1] rounded-full hover:shadow-lg hover:opacity-80 transition duration-300 ease-in-out flex items-center justify-center w-fit mt-10 xl:text-lg xl:mt-20" data-aos="zoom-in" data-aos-duration="500">
                Selengkapnya
                <img src="/img/arrow up right.png" class="ml-1.5 w-4 xl:ml-2 xl:w-5">
            </a>
        </div>
    </section>
    <!-- Structure End -->

    <!-- Programs Start -->
    <section id="program" class="pt-36 px-5 xl:px-20">
        <div class="container flex flex-col items-center">
            <div class="w-full items-center px-4 text-center" data-aos="fade-down" data-aos-duration="1000">
                <h1 class="text-3xl font-bold lg:text-4xl lg:font-extrabold xl:text-6xl">Program</h1>
                <h2 class="text-3xl font-bold mt-2 text-[#4C662B] italic lg:text-4xl lg:font-extrabold xl:text-6xl">Kerja</h2>
                <p class="mt-5 text-sm font-light xl:mt-7 xl:text-lg">Program Inovatif HMKT UB untuk <br /> Pengembangan Mahasiswa dan Lingkungan 🌱💬</p>
            </div>
            <div class="w-full flex flex-wrap justify-center mt-10 gap-y-5 gap-x-5 lg:gap-x-5 lg:items-end xl:mt-20">
                <div class="w-[17rem] h-[20rem] rounded-[2rem] flex flex-col justify-between p-6 text-2xl font-bold text-white lg:h-[17rem] xl:w-[25rem] xl:h-[25rem]"
                    style="background-image: linear-gradient(to top, rgba(0, 0, 0, 0.7) 5%, rgba(0, 0, 0, 0) 100%), url('/img/proker/proker 3.jpg'); background-size: cover; background-position: center;" 
                    data-aos="fade-right" data-aos-duration="1000">
                    <div class="flex justify-end">
                        <img src="/img/arrow up right nbg.png">
                    </div>
                    <div class="mt-auto">
                        <p>Canaria <br /> UNS</p>
                    </div>
                </div>
                <div class="w-[17rem] h-[20rem] rounded-[2rem] flex flex-col justify-between p-6 text-2xl font-bold text-white lg:h-[25rem] xl:w-[25rem] xl:h-[35rem]" 
                    style="background-image: linear-gradient(to top, rgba(0, 0, 0, 0.7) 5%, rgba(0, 0, 0, 0) 100%), url('/img/proker/fatan.jpg'); background-size: cover; background-position: center;" 
                    data-aos="fade-up" data-aos-duration="1000">
                    <div class="flex justify-end">
                        <img src="/img/arrow up right nbg.png">
                    </div>
                    <div class="mt-auto">
                        <p>Environmental <br /> Conservation</p>
                    </div>
                </div>
                <div class="w-[17rem] h-[20rem] rounded-[2rem] flex flex-col justify-between p-6 text-2xl font-bold text-white lg:h-[17rem] xl:w-[25rem] xl:h-[25rem]"
                    style="background-image: linear-gradient(to top, rgba(0, 0, 0, 0.7) 5%, rgba(0, 0, 0, 0) 100%), url('/img/proker/proker 4.jpg'); background-size: cover; background-position: center;" 
                    data-aos="fade-left" data-aos-duration="1000">
                    <div class="flex justify-end">
                        <img src="/img/arrow up right nbg.png">
                    </div>
                    <div class="mt-auto">
                        <p>Canaria <br /> IPB</p>
                    </div>
                </div>
            </div>
            <a href="proker.php#program-kerja" class="text-sm py-4 px-6 bg-[#111f00] text-[#CFEDA1] rounded-full hover:shadow-lg hover:opacity-80 transition duration-300 ease-in-out flex items-center justify-center w-fit mt-10 xl:mt-20 xl:text-lg" data-aos="zoom-in" data-aos-duration="500">
                Selengkapnya
                <img src="/img/arrow up right.png" class="ml-1.5 w-4 xl:ml-2 xl:w-5">
            </a>
        </div>
    </section>
    <!-- Programs End -->

    <!-- Information Start -->
    <section id="informasi" class="pt-36 px-5 xl:px-20">
        <div class="container">
            <div class="w-full items-center px-4 text-center" data-aos="fade-down" data-aos-duration="1000">
                <h1 class="text-3xl font-bold lg:text-4xl lg:font-extrabold xl:text-6xl">Informasi</h1>
                <p class="mt-5 text-sm font-light xl:mt-7 xl:text-lg">Informasi Terbaru dan Penting Tentang HIMA Kehutanan FP UB 🌱📢</p>
            </div>
        
            <div class="bg-[#111F00] w-full max-w-[17rem] rounded-[2rem] py-7 px-5 mt-10 mx-auto lg:max-w-[55rem] lg:px-7 xl:mt-20 xl:max-w-[90rem] xl:py-14 xl:px-20" data-aos="zoom-in" data-aos-duration="1000">
                <?php $data = []; while ($row = $information_result->fetch_assoc()) { $data[] = $row; } ?>
                <div id="carousel" class="flex flex-col lg:flex-row items-center">
                    <div class="w-full flex justify-center relative group">
                        <img id="carousel-image" alt="<?= htmlspecialchars($data[0]['title']); ?>" src="<?= 'admin/' . htmlspecialchars($data[0]['photo']); ?>" class="w-full rounded-xl transition-transform duration-300 group-hover:scale-105">
                        <div class="absolute inset-0 flex justify-between items-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <button id="prev-btn" class="text-white text-4xl font-bold w-16 h-16 flex items-center justify-center shadow-lg hover:text-gray-300 bg-black/50">&lt;</button>
                            <button id="next-btn" class="text-white text-4xl font-bold w-16 h-16 flex items-center justify-center shadow-lg hover:text-gray-300 bg-black/50">&gt;</button>
                        </div>
                    </div>
                    <div class="w-full items-center mt-5 lg:ml-3 xl:ml-7 xl:mt-0">
                        <h2 id="carousel-title" class="text-sm font-bold text-[#FCFFDD] lg:text-sm xl:text-3xl">
                            <?= htmlspecialchars($data[0]['title']); ?>
                        </h2>
                        <p id="carousel-description" class="mt-5 mb-5 text-sm font-light text-[#FCFFDD] text-justify lg:text-xs xl:text-lg">
                            <?= htmlspecialchars($data[0]['description']); ?>
                        </p>
                        <a href="#" class="text-sm text-[#FCFFDD] underline lg:text-xs xl:text-lg">Lihat Selengkapnya...</a>
                    </div>
                </div>
            </div>
        </div>
        <div id="carousel-data" data-json='<?= json_encode($data, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_QUOT); ?>'></div>
    </section>
    <!-- Information End -->

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
                            <a href="index.html" class="inline-block text-sm text-[#303129] hover:text-[#374e14] xl:text-lg">Beranda</a>
                        </li>
                        <li>
                            <a href="profil.html" class="inline-block text-sm text-[#303129] hover:text-[#374e14] xl:text-lg">Tentang</a>
                        </li>
                        <li>
                            <a href="informasi.html" class="inline-block text-sm text-[#303129] hover:text-[#374e14] xl:text-lg">Kegiatan</a>
                        </li>
                        <li>
                            <a href="merch.html" class="inline-block text-sm text-[#303129] hover:text-[#374e14] xl:text-lg">Merchandise</a>
                        </li>
                    </ul>
                </div>
                <div class="w-full">
                    <h3 class="font-semibold text-lg mb-2.5 text-left xl:font-extrabold xl:text-2xl xl:mb-4">Sosial Media</h3>
                    <ul>
                        <li>
                            <a href="https://www.instagram.com/hmkt_fpub?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" class="inline-block text-sm text-[#303129] hover:text-[#374e14] xl:text-lg">Instagram</a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/in/hmkt-fp-ub-bb5402314/" class="inline-block text-sm text-[#303129] hover:text-[#374e14] xl:text-lg">Linkedin</a>
                        </li>
                        <li>
                            <a href="https://www.youtube.com/@hmkt_fpub" class="inline-block text-sm text-[#303129] hover:text-[#374e14] xl:text-lg">Youtube</a>
                        </li>
                        <li>
                            <a href="https://www.tiktok.com" class="inline-block text-sm text-[#303129] hover:text-[#374e14] xl:text-lg">Tiktok</a>
                        </li>
                        <li>
                            <a href="https://x.com/hmkt_fpub" class="inline-block text-sm text-[#303129] hover:text-[#374e14] xl:text-lg">X</a>
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