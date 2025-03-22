<?php
    include '../src/config.php'; // Panggil file koneksi database

    $program_query = "SELECT * FROM program";
    $program_result = $conn->query($program_query);
    $programs = $program_result->fetch_all(MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program Kerja | HMKT UB</title>

    <!-- CSS -->
    <link href="/css/output.css" rel="stylesheet">

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <style>
        #carousel {
            display: flex;
            width: 100%;
            transition: transform 0.5s ease-in-out;
        }

        .carousel-slide {
            display: flex;
            min-width: 100%;
            justify-content: center;
        }

        .carousel-slide > div {
            flex: 0 0 30%;
            max-width: 30%;
        }
    </style>
</head>
<body>
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
                            <a href="index.php" class="lg:nav lg:relative text-base text-[#303129] group-hover:text-[#4C662B] py-2 mx-8 flex xl:text-lg">Beranda</a>
                        </li>
                        <li class="relative group">
                            <div class="flex items-center justify-between px-8 py-2 cursor-pointer">
                                <a class="lg:nav-drop lg:relative lg:active text-base text-[#4C662B] flex xl:text-lg">Tentang</a>
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
                                    <a href="proker.php" class="block text-base text-[#303129] py-2 px-4 underline xl:text-lg xl:whitespace-nowrap">Program Kerja</a>
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

    <!-- Home Proker Start -->
    <section id="beranda-proker" class="pt-24">
        <div class="bg-[#111f00] px-5 pt-16 xl:px-20">
            <div class="text-center px-4 relative flex flex-col items-center">
    
                <img src="/img/proker/aksen-1.svg" class="absolute left-[-25px] top-[80px] w-[3rem] h-[3rem] lg:w-[5rem] lg:h-[5rem] xl:w-[7rem] xl:h-[7rem] xl:left-[-5rem]">
                <img src="/img/proker/aksen-2.svg" class="absolute right-[-20px] w-[3rem] h-[7rem] lg:w-[4rem] lg:h-[9rem] xl:w-[6rem] xl:h-[12rem] xl:right-[-5rem]">
    
                <p class="font-extralight text-[#B6B6B6] text-xs lg:text-sm xl:text-lg">Program Kerja</p>
                <h1 class="mt-3 text-2xl font-extrabold leading-tight text-[#FCFFDD] sm:text-4xl lg:text-6xl xl:text-7xl">
                    Inovasi dan Aksi Nyata <br />
                    untuk Masa Depan <br />
                    Kehutanan
                </h1>
                <p class="font-extralight text-[#B6B6B6] text-xs mt-4 lg:text-sm xl:text-lg">Program Kerja Kreatif untuk Pengembangan Mahasiswa dan Lingkungan</p>
                <img src="/img/proker/proker 1.jpg" class="mt-10 w-full rounded-3xl sm:max-w-[450px] lg:max-w-[600px] xl:max-w-[700px]">
            </div>
        </div>
    </section>
    <!-- Home Proker End -->

    <!-- Proker Start -->
    <section id="program-kerja" class="pt-36 px-5 xl:px-20">
        <div class="container flex flex-col text-center"> 
            <div class="w-full items-center px-4 text-center mb-10" data-aos="fade-down" data-aos="1000">
                <h1 class="text-3xl font-bold lg:text-5xl lg:font-extrabold xl:text-7xl">Program</h1>
                <h2 class="text-3xl font-bold mt-1 text-[#4C662B] italic lg:text-5xl lg:font-extrabold xl:text-7xl">Kerja</h2>
            </div>
            <div class="relative overflow-hidden mt-10">
                <div class="w-full overflow-hidden">
                    <div id="carousel" class="flex transition-transform duration-300 ease-in-out w-full">
                        <?php foreach (array_chunk($programs, 3) as $chunk): ?>
                            <div class="carousel-slide flex gap-6 min-w-full justify-center">
                                <?php foreach ($chunk as $row): ?>
                                    <div class="w-1/3 border shadow-lg rounded-lg overflow-hidden bg-white">
                                        <img src="<?= 'admin/' . htmlspecialchars($row['photo']); ?>" alt="<?php echo htmlspecialchars($row['program_name']); ?>" class="w-full h-48 object-cover">
                                        <div class="p-4">
                                            <h2 class="text-xl font-semibold"><?php echo htmlspecialchars($row['program_name']); ?></h2>
                                            <p class="text-gray-600 text-sm mt-2"><?php echo htmlspecialchars($row['description']); ?></p>
                                            <!-- <button class="mt-4 px-4 py-2 rounded-xl border border-[#303129] hover:bg-[#4C662B] hover:text-white">Lanjut Baca</button> -->
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="flex justify-center mt-4 space-x-4">
                    <button id="prev-btn" class="p-2 rounded-full border border-[#303129] hover:bg-[#4C662B] hover:text-white">&#8592;</button>
                    <button id="next-btn" class="p-2 rounded-full border border-[#303129] hover:bg-[#4C662B] hover:text-white">&#8594;</button>
                </div>
            </div>
        </div>
    </section>
    <!-- Proker End -->

    <!-- Footer Start -->
    <footer class="pt-36 px-5 xl:px-20 xl:pt-60">
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