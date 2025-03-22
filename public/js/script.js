// Navbar Fixed
window.onscroll = function() {
    const header = document.querySelector('header');
    const fixedNav = header.offsetTop;
    
    if (window.pageYOffset > fixedNav) {
        header.classList.add('navbar-fixed');
    } else {
        header.classList.remove('navbar-fixed');
    }
};

// Hamburger
const hamburger = document.querySelector('#hamburger');
const navMenu = document.querySelector('#nav-menu');

hamburger.addEventListener('click', function() {
    hamburger.classList.toggle('hamburger-active');
    navMenu.classList.toggle('hidden');
});

// Dropdown
document.querySelectorAll('.dropdown-toggle').forEach(button => {
    button.addEventListener('click', function () {
        const dropdownId = this.getAttribute('data-dropdown');
        const dropdownMenu = document.getElementById(`dropdown-${dropdownId}`);

        dropdownMenu.classList.toggle('hidden');
    });
});

// Information in Index Carousel
document.addEventListener("DOMContentLoaded", function () {
    let dataElement = document.getElementById("carousel-data");
    let data = JSON.parse(dataElement.getAttribute("data-json"));

    let index = 0;
    const image = document.getElementById("carousel-image");
    const title = document.getElementById("carousel-title");
    const description = document.getElementById("carousel-description");
    const prevBtn = document.getElementById("prev-btn");
    const nextBtn = document.getElementById("next-btn");

    function updateCarousel() {
        image.src = "admin/" + data[index].photo;
        image.alt = data[index].title;
        title.textContent = data[index].title;
        description.textContent = data[index].description;
    }

    prevBtn.addEventListener("click", function () {
        index = (index - 1 + data.length) % data.length;
        updateCarousel();
    });

    nextBtn.addEventListener("click", function () {
        index = (index + 1) % data.length;
        updateCarousel();
    });
});

// Proker and Information Carousel
document.addEventListener("DOMContentLoaded", function () {
    const carousel = document.getElementById("carousel");
    const slides = document.querySelectorAll(".carousel-slide");
    const prevBtn = document.getElementById("prev-btn");
    const nextBtn = document.getElementById("next-btn");
    let currentIndex = 0;
    const totalSlides = slides.length;

    function updateCarousel() {
        const offset = currentIndex * -100;
        carousel.style.transform = `translateX(${offset}%)`;
    }

    nextBtn.addEventListener("click", function () {
        if (currentIndex < totalSlides - 1) {
            currentIndex++;
        } else {
            currentIndex = 0; // Kembali ke awal jika sudah di akhir
        }
        updateCarousel();
    });

    prevBtn.addEventListener("click", function () {
        if (currentIndex > 0) {
            currentIndex--;
        } else {
            currentIndex = totalSlides - 1; // Kembali ke slide terakhir jika di awal
        }
        updateCarousel();
    });

    // Inisialisasi posisi awal
    updateCarousel();
});


// Dynamic div
// const divs = document.querySelectorAll('.dynamic-div');

// function checkScreenSize() {
//     if (window.innerWidth >= 1280) {
//         divs.forEach(div => {
//             div.addEventListener('mouseenter', () => {
//                 divs.forEach(d => d.classList.remove('active'));
//                 div.classList.add('active');
//             });
//         });
//     } else {
//         divs.forEach(div => div.classList.remove('active'));
//     }
// }

// window.addEventListener('load', checkScreenSize);
// window.addEventListener('resize', checkScreenSize);

// Structure Carousel
function setupCarousel(containerId, prevBtnId, nextBtnId) {
    const profiles = document.querySelectorAll(`#${containerId} .profile-card`);
    const prevBtn = document.querySelector(`#${prevBtnId}`);
    const nextBtn = document.querySelector(`#${nextBtnId}`);
    let currentIndex = 0;

    function updateProfiles() {
        const visibleProfiles = window.innerWidth < 768 ? 1 : 3;

        profiles.forEach((profile, index) => {
            profile.classList.add("hidden");

            if (index >= currentIndex && index < currentIndex + visibleProfiles) {
                profile.classList.remove("hidden");
            }
        });
    }

    nextBtn.addEventListener("click", () => {
        const visibleProfiles = window.innerWidth < 768 ? 1 : 3;

        if (currentIndex + visibleProfiles < profiles.length) {
            currentIndex += visibleProfiles;
        } else {
            currentIndex = 0; // Loop back to start
        }
        updateProfiles();
    });

    prevBtn.addEventListener("click", () => {
        const visibleProfiles = window.innerWidth < 768 ? 1 : 3;

        if (currentIndex - visibleProfiles >= 0) {
            currentIndex -= visibleProfiles;
        } else {
            currentIndex = profiles.length - visibleProfiles; // Loop back to end
        }
        updateProfiles();
    });

    window.addEventListener("resize", () => {
        currentIndex = 0;
        updateProfiles();
    });

    updateProfiles();
}

setupCarousel("profile-container-psdm", "prev-btn-psdm", "next-btn-psdm");
setupCarousel("profile-container-hl", "prev-btn-hl", "next-btn-hl");
setupCarousel("profile-container-aka", "prev-btn-aka", "next-btn-aka");
setupCarousel("profile-container-sdl", "prev-btn-sdl", "next-btn-sdl"),
setupCarousel("profile-container-kta", "prev-btn-kta", "next-btn-kta"),
setupCarousel("profile-container-kpn", "prev-btn-kpn", "next-btn-kpn");




