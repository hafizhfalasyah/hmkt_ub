<?php
    include '../src/config.php'; // Panggil file koneksi database

    $structure_query = "SELECT * FROM structure";
    $structure_result = $conn->query($structure_query);

    $structure_data = [];
    while ($row = $structure_result->fetch_assoc()) {
        $structure_data[] = $row;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil | HMKT UB</title>

    <!-- CSS -->
    <link href="/css/output.css" rel="stylesheet">

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
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
                                    <a href="profil.php" class="block text-base text-[#303129] py-2 px-4 underline xl:text-lg xl:whitespace-nowrap">Profil</a>
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

    <!-- Profil Start -->
    <section id="profil" class="pt-36 px-5 xl:px-20">
        <div class="container lg:mt-20">
            <div class="relative">
                <div class="bg-about-1 absolute top-[5px] left-[10px] w-[6rem] h-[5.5rem] bg-cover bg-center z-[-50] lg:w-[13rem] lg:h-[12rem] lg:top-[-50px] lg:left-[70px] xl:w-[18rem] xl:h-[17rem]"></div>
                <div class="bg-about-2 absolute bottom-[50px] right-[0px] w-[5.5rem] h-[6rem] bg-cover bg-center z-[-50] lg:w-[12rem] lg:h-[13rem] lg:bottom-[20px] lg:right-[60px] xl:w-[22rem] xl:h-[23rem]"></div>
                
                <div class="text-center px-4 relative">
                    <p class="font-extralight text-[#818181] text-sm xl:text-lg">Tentang Kami</p>
                    <h1 class="mt-2 text-xl font-extrabold leading-tight text-[#23281c] text-outline z-10 lg:text-5xl xl:text-[5rem] xl:leading-[1.2]">
                        Kenal Lebih Dekat <br />
                        Bersama Himpunan Kehutanan <br />
                        Universitas Brawijaya
                    </h1>

                    <div class="mt-10 cursor-pointer flex items-center justify-center xl:mt-28">
                        <p class="font-extralight text-[#818181] text-sm xl:text-lg">Gulir ke bawah</p>
                        <img src="/img/about/about arrow.svg" class="ml-1 size-8 xl:ml-2 xl:size-10">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Profil End -->

    <!-- Viisi & Misi Start -->
    <section id="visimisi" class="pt-36">
        <div class="bg-[#111f00] text-white px-5 py-10 rounded-[1.5rem] xl:px-20 xl:py-20">
            <div class="flex flex-col space-y-2 px-3">
                <div class="flex items-center justify-between space-x-4">
                    <h1 class="text-lg font-bold lg:text-3xl xl:text-4xl" data-aos="fade-right" data-aos-duration="1000">Visi</h1>
                    <p class="text-[0.5rem] font-extralight text-[#cbc7b5] text-justify max-w-[200px] lg:text-sm lg:max-w-[350px] xl:text-lg xl:max-w-[450px]" data-aos="fade-left" data-aos-duration="1000">
                        Dengan visi dan misi ini, HMKT diharapkan dapat menjadi motor penggerak bagi kelestarian hutan dan pembangunan berkelanjutan.
                    </p>
                </div>
                <div class="w-full border-t border-[#939393] mt-2"></div>
            </div>
            <h1 class="text-md text-[#cfeda1] mt-4 uppercase px-3 lg:text-4xl lg:max-w-[500px] lg:mt-10 xl:text-5xl xl:max-w-[600px]" data-aos="zoom-in" data-aos-duration="1000">Menciptakan kualitas sumber daya mahasiswa yang mampu mewujudkan hutan yang lestari dan menjadikan HMKT UB sebagai pusat interaksi dan kegiatan mahasiswa kehutanan.</h1>
            <div class="flex flex-col items-start space-y-2 mt-8 px-3 lg:mt-20">
                <h1 class="text-lg font-bold lg:text-3xl xl:text-4xl" data-aos="fade-right" data-aos-duration="1000">Misi</h1>
                <div class="w-full border-t border-[#939393]"></div>
            </div>
            <div class="flex justify-center mt-4 px-3 lg:mt-10">
                <div class="flex flex-wrap justify-center gap-6 lg:gap-8 xl:gap-10">
                    <div class="flex flex-col items-center text-center" data-aos="zoom-in" data-aos-duration="1000">
                        <img src="/img/misi/misi-1.svg" class="w-[150px] xl:w-[250px]">
                        <p class="text-xs font-extralight mt-3 text-[#cbc7b5] w-[150px] xl:w-[250px] xl:text-lg xl:mt-5">
                            Meningkatkan peran serta partisipasi mahasiswa kehutanan dalam pengelolaan hutan.
                        </p>
                    </div>
                    <div class="flex flex-col items-center text-center" data-aos="zoom-in" data-aos-duration="1000">
                        <img src="/img/misi/misi-2.svg" class="w-[150px] xl:w-[250px]">
                        <p class="text-xs font-extralight mt-3 text-[#cbc7b5] w-[150px] xl:w-[250px] xl:text-lg xl:mt-5">
                            Melakukan pengaderan kepada mahasiswa kehutanan dengan menanamkan korsa rimbawan dan sembilan nilai dasar rimbawan.
                        </p>
                    </div>
                    <div class="flex flex-col items-center text-center" data-aos="zoom-in" data-aos-duration="1000">
                        <img src="/img/misi/misi-3.svg" class="w-[150px] xl:w-[250px]">
                        <p class="text-xs font-extralight mt-3 text-[#cbc7b5] w-[150px] xl:w-[250px] xl:text-lg xl:mt-5">
                            Berperan aktif dalam menanggapi isu-isu kehutanan baik tataran lokal, regional, nasional, maupun internasional.
                        </p>
                    </div>
                </div>
            </div>                        
        </div>
    </section>
    <!-- Viisi & Misi End -->

    <!-- Structure Start -->
    <section id="struktur-organisasi" class="pt-36 px-5 xl:px-20">
        <div class="container flex flex-col">
            <div class="w-full items-center px-4 text-center" data-aos="fade-down" data-aos-duration="1000">
                <h1 class="text-3xl font-bold lg:text-5xl lg:font-extrabold xl:text-7xl">Struktur</h1>
                <h2 class="text-3xl font-bold mt-1 text-[#4C662B] italic lg:text-5xl lg:font-extrabold xl:text-7xl">Organisasi</h2>
            </div>

            <!-- PSDM -->
            <div class="flex flex-col items-center space-y-5 mt-10 px-3 lg:mt-20 xl:mt-40">
                <div class="flex items-center justify-between w-full space-x-4">
                    <h1 class="text-xl font-extrabold lg:text-2xl xl:text-4xl" data-aos="fade-right" data-aos-duration="1000">Pengembangan Sumber Daya Manusia</h1>
                    <div class="flex space-x-2" data-aos="fade-left" data-aos-duration="1000">
                        <button id="prev-btn-psdm">
                            <ion-icon name="chevron-back-outline" class="w-5 h-5 cursor-pointer text-[#111f00] xl:w-7 xl:h-7 hover:text-[#cfeda1] hover:bg-[#111f00] hover:rounded-full p-1"></ion-icon>
                        </button>
                        <button id="next-btn-psdm">
                            <ion-icon name="chevron-forward-outline" class="w-5 h-5 cursor-pointer text-[#111f00] xl:w-7 xl:h-7 hover:text-[#cfeda1] hover:bg-[#111f00] hover:rounded-full p-1"></ion-icon>
                        </button>
                    </div>
                </div>
            
                <div class="relative w-full bg-[#FFFFFF] text-center py-10 px-6 rounded-[1rem] border shadow-md">
                    <div id="profile-container-psdm" class="flex flex-row items-center justify-center">
                        <?php foreach ($structure_data as $row): ?>
                            <?php if ($row['division'] === 'Pengembangan Sumber Daya Manusia'): ?>
                                <!-- Profile -->
                                <div class="profile-card flex flex-col items-center justify-center lg:px-10" data-aos="zoom-in" data-aos-duration="800">
                                    <img src="<?= 'admin/' . htmlspecialchars($row['photo']); ?>" alt="<?= htmlspecialchars($row['name']); ?>" class="mx-auto" />
                                    <h1 class="text-xl font-extrabold mt-5"><?= htmlspecialchars($row['name']); ?></h1>
                                    <p class="text-sm font-normal mt-2"><?= htmlspecialchars($row['position']); ?></p>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>    
                        
            <!-- HL -->
            <div class="flex flex-col items-center space-y-5 mt-10 px-3 lg:mt-20 xl:mt-40">
                <!-- Header Section -->
                <div class="flex items-center justify-between w-full space-x-4">
                    <h1 class="text-2xl font-extrabold lg:text-2xl xl:text-4xl" data-aos="fade-right" data-aos-duration="1000">Hubungan Luar</h1>
                    <div class="flex space-x-2" data-aos="fade-left" data-aos-duration="1000">
                        <button id="prev-btn-hl">
                            <ion-icon name="chevron-back-outline" class="w-5 h-5 cursor-pointer xl:w-7 xl:h-7 text-[#111f00] hover:text-[#cfeda1] hover:bg-[#111f00] hover:rounded-full p-1"></ion-icon>
                        </button>
                        <button id="next-btn-hl">
                            <ion-icon name="chevron-forward-outline" class="w-5 h-5 cursor-pointer xl:w-7 xl:h-7 text-[#111f00] hover:text-[#cfeda1] hover:bg-[#111f00] hover:rounded-full p-1"></ion-icon>
                        </button>
                    </div>
                </div>
            
                <div class="relative w-full bg-[#FFFFFF] text-center py-10 px-6 rounded-[1rem] border shadow-md">
                    <div id="profile-container-hl" class="flex flex-row items-center justify-center">
                        <?php foreach ($structure_data as $row): ?>
                            <?php if ($row['division'] === 'Hubungan Luar'): ?>
                                <!-- Profile -->
                                <div class="profile-card flex flex-col items-center justify-center lg:px-10" data-aos="zoom-in" data-aos-duration="800">
                                    <img src="<?= 'admin/' . htmlspecialchars($row['photo']); ?>" alt="<?= htmlspecialchars($row['name']); ?>" class="mx-auto" />
                                    <h1 class="text-xl font-extrabold mt-5"><?= htmlspecialchars($row['name']); ?></h1>
                                    <p class="text-sm font-normal mt-2"><?= htmlspecialchars($row['position']); ?></p>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <!-- AKA -->
            <div class="flex flex-col items-center space-y-5 mt-10 px-3 lg:mt-20 xl:mt-40">
                <!-- Header Section -->
                <div class="flex items-center justify-between w-full space-x-4">
                    <h1 class="text-2xl font-extrabold lg:text-2xl xl:text-4xl" data-aos="fade-right" data-aos-duration="1000">Advokasi dan Kesejahteraan Anggota</h1>
                    <div class="flex space-x-2" data-aos="fade-left" data-aos-duration="1000">
                        <button id="prev-btn-aka">
                            <ion-icon name="chevron-back-outline" class="w-5 h-5 cursor-pointer xl:w-7 xl:h-7 text-[#111f00] hover:text-[#cfeda1] hover:bg-[#111f00] hover:rounded-full p-1"></ion-icon>
                        </button>
                        <button id="next-btn-aka">
                            <ion-icon name="chevron-forward-outline" class="w-5 h-5 cursor-pointer xl:w-7 xl:h-7 text-[#111f00] hover:text-[#cfeda1] hover:bg-[#111f00] hover:rounded-full p-1"></ion-icon>
                        </button>
                    </div>
                </div>
            
                <div class="relative w-full bg-[#FFFFFF] text-center py-10 px-6 rounded-[1rem] border shadow-md">
                    <div id="profile-container-aka" class="flex flex-row items-center justify-center">
                        <?php foreach ($structure_data as $row): ?>
                            <?php if ($row['division'] === 'Advokasi dan Kesejahteraan Anggota'): ?>
                                <!-- Profile -->
                                <div class="profile-card flex flex-col items-center justify-center lg:px-10" data-aos="zoom-in" data-aos-duration="800">
                                    <img src="<?= 'admin/' . htmlspecialchars($row['photo']); ?>" alt="<?= htmlspecialchars($row['name']); ?>" class="mx-auto" />
                                    <h1 class="text-xl font-extrabold mt-5"><?= htmlspecialchars($row['name']); ?></h1>
                                    <p class="text-sm font-normal mt-2"><?= htmlspecialchars($row['position']); ?></p>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <!-- SDL -->
            <div class="flex flex-col items-center space-y-5 mt-10 px-3 lg:mt-20 xl:mt-40">
                <!-- Header Section -->
                <div class="flex items-center justify-between w-full space-x-4">
                    <h1 class="text-2xl font-extrabold lg:text-2xl xl:text-4xl" data-aos="fade-right" data-aos-duration="1000">Sosial dan Lingkungan</h1>
                    <div class="flex space-x-2" data-aos="fade-left" data-aos-duration="1000">
                        <button id="prev-btn-sdl">
                            <ion-icon name="chevron-back-outline" class="w-5 h-5 cursor-pointer xl:w-7 xl:h-7 text-[#111f00] hover:text-[#cfeda1] hover:bg-[#111f00] hover:rounded-full p-1"></ion-icon>
                        </button>
                        <button id="next-btn-sdl">
                            <ion-icon name="chevron-forward-outline" class="w-5 h-5 cursor-pointer xl:w-7 xl:h-7 text-[#111f00] hover:text-[#cfeda1] hover:bg-[#111f00] hover:rounded-full p-1"></ion-icon>
                        </button>
                    </div>
                </div>
            
                <div class="relative w-full bg-[#FFFFFF] text-center py-10 px-6 rounded-[1rem] border shadow-md">
                    <div id="profile-container-sdl" class="flex flex-row items-center justify-center">
                        <?php foreach ($structure_data as $row): ?>
                            <?php if ($row['division'] === 'Sosial dan Lingkungan'): ?>
                                <!-- Profile -->
                                <div class="profile-card flex flex-col items-center justify-center lg:px-10" data-aos="zoom-in" data-aos-duration="800">
                                    <img src="<?= 'admin/' . htmlspecialchars($row['photo']); ?>" alt="<?= htmlspecialchars($row['name']); ?>" class="mx-auto" />
                                    <h1 class="text-xl font-extrabold mt-5"><?= htmlspecialchars($row['name']); ?></h1>
                                    <p class="text-sm font-normal mt-2"><?= htmlspecialchars($row['position']); ?></p>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <!-- KTA -->
            <div class="flex flex-col items-center space-y-5 mt-10 px-3 lg:mt-20 xl:mt-40">
                <!-- Header Section -->
                <div class="flex items-center justify-between w-full space-x-4">
                    <h1 class="text-2xl font-extrabold lg:text-2xl xl:text-4xl" data-aos="fade-right" data-aos-duration="1000">Kerumahtanggaan</h1>
                    <div class="flex space-x-2" data-aos="fade-left" data-aos-duration="1000">
                        <button id="prev-btn-kta">
                            <ion-icon name="chevron-back-outline" class="w-5 h-5 cursor-pointer xl:w-7 xl:h-7 text-[#111f00] hover:text-[#cfeda1] hover:bg-[#111f00] hover:rounded-full p-1"></ion-icon>
                        </button>
                        <button id="next-btn-kta">
                            <ion-icon name="chevron-forward-outline" class="w-5 h-5 cursor-pointer xl:w-7 xl:h-7 text-[#111f00] hover:text-[#cfeda1] hover:bg-[#111f00] hover:rounded-full p-1"></ion-icon>
                        </button>
                    </div>
                </div>
            
                <div class="relative w-full bg-[#FFFFFF] text-center py-10 px-6 rounded-[1rem] border shadow-md">
                    <div id="profile-container-kta" class="flex flex-row items-center justify-center">
                        <?php foreach ($structure_data as $row): ?>
                            <?php if ($row['division'] === 'Kerumahtanggaan'): ?>
                                <!-- Profile -->
                                <div class="profile-card flex flex-col items-center justify-center lg:px-10" data-aos="zoom-in" data-aos-duration="800">
                                    <img src="<?= 'admin/' . htmlspecialchars($row['photo']); ?>" alt="<?= htmlspecialchars($row['name']); ?>" class="mx-auto" />
                                    <h1 class="text-xl font-extrabold mt-5"><?= htmlspecialchars($row['name']); ?></h1>
                                    <p class="text-sm font-normal mt-2"><?= htmlspecialchars($row['position']); ?></p>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <!-- KPN -->
            <div class="flex flex-col items-center space-y-5 mt-10 px-3 lg:mt-20 xl:mt-40">
                <!-- Header Section -->
                <div class="flex items-center justify-between w-full space-x-4">
                    <h1 class="text-2xl font-extrabold lg:text-2xl xl:text-4xl" data-aos="fade-right" data-aos-duration="1000">Keprofesian</h1>
                    <div class="flex space-x-2" data-aos="fade-left" data-aos-duration="1000">
                        <button id="prev-btn-kpn">
                            <ion-icon name="chevron-back-outline" class="w-5 h-5 cursor-pointer xl:w-7 xl:h-7 text-[#111f00] hover:text-[#cfeda1] hover:bg-[#111f00] hover:rounded-full p-1"></ion-icon>
                        </button>
                        <button id="next-btn-kpn">
                            <ion-icon name="chevron-forward-outline" class="w-5 h-5 cursor-pointer xl:w-7 xl:h-7 text-[#111f00] hover:text-[#cfeda1] hover:bg-[#111f00] hover:rounded-full p-1"></ion-icon>
                        </button>
                    </div>
                </div>
            
                <div class="relative w-full bg-[#FFFFFF] text-center py-10 px-6 rounded-[1rem] border shadow-md">
                    <div id="profile-container-kpn" class="flex flex-row items-center justify-center">
                        <?php foreach ($structure_data as $row): ?>
                            <?php if ($row['division'] === 'Keprofesian'): ?>
                                <!-- Profile -->
                                <div class="profile-card flex flex-col items-center justify-center lg:px-10" data-aos="zoom-in" data-aos-duration="800">
                                    <img src="<?= 'admin/' . htmlspecialchars($row['photo']); ?>" alt="<?= htmlspecialchars($row['name']); ?>" class="mx-auto" />
                                    <h1 class="text-xl font-extrabold mt-5"><?= htmlspecialchars($row['name']); ?></h1>
                                    <p class="text-sm font-normal mt-2"><?= htmlspecialchars($row['position']); ?></p>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- Structure End -->

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