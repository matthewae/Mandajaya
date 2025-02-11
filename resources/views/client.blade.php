<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>
        Mandajaya Rekayasa Konstruksi
    </title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet" />

    <style>
        .fade-in {
            animation: fadeIn 2s ease-in-out;
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        .client-box:hover {
            transform: translateY(-10px);
            transition: transform 0.3s ease-in-out;
        }
    </style>

    <head>
        <meta charset="utf-8" />
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <title>
            Mandajaya Rekayasa Konstruksi - Clients
        </title>
        <script src="https://cdn.tailwindcss.com"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet" />
        <style>
            .fade-in {
                animation: fadeIn 2s ease-in-out;
            }

            @keyframes fadeIn {
                0% {
                    opacity: 0;
                }

                100% {
                    opacity: 1;
                }
            }

            .client-box:hover {
                transform: translateY(-10px);
                transition: transform 0.3s ease-in-out;
            }

            .carousel {
                position: relative;
                /* Important for absolute positioning of dots */
                overflow: hidden;
                width: 100%;
                padding-bottom: 3rem;
                /* Add space for dots */
            }

            .carousel-track {
                display: flex;
                transition: transform 0.5s ease-in-out;
            }

            .carousel-slide {
                min-width: 100%;
                box-sizing: border-box;
            }

            /* Navigation Arrows */
            /* .carousel-arrow {
                position: absolute;
                top: 50%;
                transform: translateY(-50%);
                width: 40px;
                height: 40px;
                background: rgba(0, 0, 0, 0.5);
                border: none;
                border-radius: 50%;
                color: white;
                font-size: 20px;
                display: flex;
                align-items: center;
                justify-content: center;
                cursor: pointer;
                transition: background-color 0.3s ease;
                z-index: 10;
            } */

            /* .carousel-arrow:hover {
                background: rgba(0, 0, 0, 0.8);
            }

            .carousel-arrow.prev {
                left: 20px;
            }

            .carousel-arrow.next {
                right: 20px;
            } */

            /* Navigation Dots */
            .carousel-dots {
                position: absolute;
                /* Change from relative to absolute */
                bottom: 0;
                /* Position at bottom */
                left: 0;
                right: 0;
                display: flex;
                justify-content: center;
                gap: 8px;
                padding: 1rem 0;
                z-index: 20;
                /* Ensure dots are above content */
            }

            .dot {
                width: 12px;
                height: 12px;
                border-radius: 50%;
                background: rgba(0, 0, 0, 0.3);
                cursor: pointer;
                transition: all 0.3s ease;
                border: none;
                padding: 0;
            }

            .dot:hover {
                background: rgba(0, 0, 0, 0.6);
            }

            .dot.active {
                background: rgba(0, 0, 0, 0.8);
                transform: scale(1.2);
            }
        </style>
    </head>

<body class="font-montserrat">
    <nav class="bg-gray-900 p-4 shadow-lg">
        <div class="container mx-auto flex justify-between items-center">
            <div class="flex items-center space-x-3">
                <img alt="Company logo" class="h-10 w-10" src="{{ asset('storage/Logo FI.png') }}" />
                <a class="text-white text-2xl font-bold tracking-wide hover:text-blue-400 transition duration-300" href="/">
                    Mandajaya Rekayasa Konstruksi
                </a>
            </div>
            <!-- Desktop Menu -->
            <ul class="hidden md:flex space-x-6 items-center">
                <li><a class="text-gray-300 hover:text-blue-400 transition duration-300" href="/">Home</a></li>
                <li><a class="text-gray-300 hover:text-blue-400 transition duration-300" href="service">Services</a></li>
                <li><a class="text-gray-300 hover:text-blue-400 transition duration-300" href="project">Projects</a></li>
                <li><a class="text-gray-300 hover:text-blue-400 transition duration-300" href="team">Our Team</a></li>
                <li><a class="text-gray-300 hover:text-blue-400 transition duration-300" href="client">Clients</a></li>
                <li><a class="text-gray-300 hover:text-blue-400 transition duration-300" href="contact">Contact Us</a></li>
                <!-- Company Profile Button -->
                <li>
                    <a href="https://drive.google.com/file/d/1_OuB8-CuDZPOWyo8zdetd3FRSMIm29gJ/view?usp=sharing" target="_blank" class="border border-blue-500 text-blue-500 px-5 py-2 rounded-lg hover:bg-blue-500 hover:text-white transition duration-300 flex items-center">
                        Company Profile
                    </a>
                </li>
            </ul>
            <!-- Mobile Menu Button -->
            <div class="md:hidden">
                <button id="menu-toggle" class="text-gray-300 focus:outline-none text-2xl">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </div>
        <!-- Mobile Menu -->
        <ul id="mobile-menu" class="hidden md:hidden flex flex-col space-y-3 mt-4 bg-gray-800 p-4 rounded-lg shadow-lg">
            <li><a class="text-gray-300 hover:text-blue-400 transition duration-300" href="/">Home</a></li>
            <li><a class="text-gray-300 hover:text-blue-400 transition duration-300" href="service">Services</a></li>
            <li><a class="text-gray-300 hover:text-blue-400 transition duration-300" href="project">Projects</a></li>
            <li><a class="text-gray-300 hover:text-blue-400 transition duration-300" href="team">Our Team</a></li>
            <li><a class="text-gray-300 hover:text-blue-400 transition duration-300" href="client">Clients</a></li>
            <li><a class="text-gray-300 hover:text-blue-400 transition duration-300" href="contact">Contact Us</a></li>
            <!-- Company Profile Button for Mobile -->
            <li>
                <a href="https://drive.google.com/file/d/1_OuB8-CuDZPOWyo8zdetd3FRSMIm29gJ/view?usp=sharing" target="_blank" class="border border-blue-500 text-blue-500 px-5 py-2 rounded-lg hover:bg-blue-500 hover:text-white transition duration-300 text-center">
                    Company Profile
                </a>
            </li>
        </ul>
    </nav>

    <!-- Clients Section -->
    <section class="py-12 fade-in">
        <div class="container mx-auto text-center px-4">
            <h2 class="text-3xl font-bold mb-6">
                Our Clients
            </h2>
            <p class="text-gray-700 mb-6">
                We are proud to have worked with a diverse range of clients from various industries.
            </p>
            <div class="carousel">
                <div class="carousel-track">
                    <!-- Slide 1 -->
                    <div class="carousel-slide flex flex-wrap justify-center">
                        <!-- Client 1 -->
                        <div class="w-full sm:w-1/2 md:w-1/4 p-4">
                            <div class="bg-white p-6 rounded-lg shadow-lg client-box">
                                <img alt="Logo of Client 1" class="w-full h-24 object-contain mb-4" src="{{ asset('storage/bandung.png') }}" />
                            </div>
                        </div>
                        <!-- Client 2 -->
                        <div class="w-full sm:w-1/2 md:w-1/4 p-4">
                            <div class="bg-white p-6 rounded-lg shadow-lg client-box">
                                <img alt="Logo of Client 2" class="w-full h-24 object-contain mb-4" src="{{ asset('storage/Logo-cimahi.png') }}" />
                            </div>
                        </div>
                        <!-- Client 3 -->
                        <div class="w-full sm:w-1/2 md:w-1/4 p-4">
                            <div class="bg-white p-6 rounded-lg shadow-lg client-box">
                                <img alt="Logo of Client 3" class="w-full h-24 object-contain mb-4" src="{{ asset('storage/bogor.png') }}" />
                            </div>
                        </div>
                        <!-- Client 4 -->
                        <div class="w-full sm:w-1/2 md:w-1/4 p-4">
                            <div class="bg-white p-6 rounded-lg shadow-lg client-box">
                                <img alt="Logo of Client 4" class="w-full h-24 object-contain mb-4" src="{{ asset('storage/takalar.png') }}" />
                            </div>
                        </div>
                        <!-- Client 5 -->
                        <div class="w-full sm:w-1/2 md:w-1/4 p-4">
                            <div class="bg-white p-6 rounded-lg shadow-lg client-box">
                                <img alt="Logo of Client 5" class="w-full h-24 object-contain mb-4" src="{{ asset('storage/jakarta.png') }}" />
                            </div>
                        </div>
                        <!-- Client 6 -->
                        <div class="w-full sm:w-1/2 md:w-1/4 p-4">
                            <div class="bg-white p-6 rounded-lg shadow-lg client-box">
                                <img alt="Logo of Client 6" class="w-full h-24 object-contain mb-4" src="{{ asset('storage/esdm.png') }}" />
                            </div>
                        </div>
                        <!-- Client 7 -->
                        <div class="w-full sm:w-1/2 md:w-1/4 p-4">
                            <div class="bg-white p-6 rounded-lg shadow-lg client-box">
                                <img alt="Logo of Client 7" class="w-full h-24 object-contain mb-4" src="{{ asset('storage/BAP.png') }}" />
                            </div>
                        </div>
                        <!-- Client 8 -->
                        <div class="w-full sm:w-1/2 md:w-1/4 p-4">
                            <div class="bg-white p-6 rounded-lg shadow-lg client-box">
                                <img alt="Logo of Client 8" class="w-full h-24 object-contain mb-4" src="{{ asset('storage/pupr 2.png') }}" />
                            </div>
                        </div>
                    </div>
                    <!-- Slide 2 -->
                    <div class="carousel-slide flex flex-wrap justify-center">
                        <!-- Client 9 -->
                        <div class="w-full sm:w-1/2 md:w-1/4 p-4">
                            <div class="bg-white p-6 rounded-lg shadow-lg client-box">
                                <img alt="Logo of Client 9" class="w-full h-24 object-contain mb-4" height="100" src="{{ asset('storage/Bi.png') }}" width="200" />
                            </div>
                        </div>
                        <!-- Client 10 -->
                        <div class="w-full sm:w-1/2 md:w-1/4 p-4">
                            <div class="bg-white p-6 rounded-lg shadow-lg client-box">
                                <img alt="Logo of Client 10" class="w-full h-24 object-contain mb-4" height="100" src="{{ asset('storage/BNI.png') }}" width="200" />
                            </div>
                        </div>
                        <!-- Client 11 -->
                        <div class="w-full sm:w-1/2 md:w-1/4 p-4">
                            <div class="bg-white p-6 rounded-lg shadow-lg client-box">
                                <img alt="Logo of Client 11" class="w-full h-24 object-contain mb-4" height="100" src="{{ asset('storage/KAI.jpg') }}" width="200" />
                            </div>
                        </div>
                        <!-- Client 12 -->
                        <div class="w-full sm:w-1/2 md:w-1/4 p-4">
                            <div class="bg-white p-6 rounded-lg shadow-lg client-box">
                                <img alt="Logo of Client 12" class="w-full h-24 object-contain mb-4" height="100" src="{{ asset('storage/POS.png') }}" width="200" />
                            </div>
                        </div>
                        <!-- Client 13 -->
                        <div class="w-full sm:w-1/2 md:w-1/4 p-4">
                            <div class="bg-white p-6 rounded-lg shadow-lg client-box">
                                <img alt="Logo of Client 13" class="w-full h-24 object-contain mb-4" height="100" src="{{ asset('storage/bukit.png') }}" width="200" />
                            </div>
                        </div>
                        <!-- Client 14 -->
                        <div class="w-full sm:w-1/2 md:w-1/4 p-4">
                            <div class="bg-white p-6 rounded-lg shadow-lg client-box">
                                <img alt="Logo of Client 14" class="w-full h-24 object-contain mb-4" height="100" src="{{ asset('storage/rskgm.png') }}" width="200" />
                            </div>
                        </div>
                        <!-- Client 15 -->
                        <div class="w-full sm:w-1/2 md:w-1/4 p-4">
                            <div class="bg-white p-6 rounded-lg shadow-lg client-box">
                                <img alt="Logo of Client 15" class="w-full h-24 object-contain mb-4" height="100" src="{{ asset('storage/KimiaFarma.png') }}" width="200" />
                            </div>
                        </div>
                        <!-- Client 16 -->
                        <div class="w-full sm:w-1/2 md:w-1/4 p-4">
                            <div class="bg-white p-6 rounded-lg shadow-lg client-box">
                                <img alt="Logo of Client 16" class="w-full h-24 object-contain mb-4" height="100" src="{{ asset('storage/dpkp 3.png') }}" width="200" />
                            </div>
                        </div>
                    </div>
                    <!-- Slide 3 -->
                    <div class="carousel-slide flex flex-wrap justify-center">
                        <!-- Client 17 -->
                        <div class="w-full sm:w-1/2 md:w-1/4 p-4">
                            <div class="bg-white p-6 rounded-lg shadow-lg client-box">
                                <img alt="Logo of Client 17" class="w-full h-24 object-contain mb-4" height="100" src="https://storage.googleapis.com/a1aa/image/Tlbt6CyVRvFAPc-2LGPMmIQaWnM8T4oCmxj1zpc9YAs.jpg" width="200" />
                            </div>
                        </div>
                        <!-- Client 18 -->
                        <div class="w-full sm:w-1/2 md:w-1/4 p-4">
                            <div class="bg-white p-6 rounded-lg shadow-lg client-box">
                                <img alt="Logo of Client 18" class="w-full h-24 object-contain mb-4" height="100" src="https://storage.googleapis.com/a1aa/image/S20oaOWT8s2eaTGzdgQmcHZGK8Pq-rJZ39N6lGDbPns.jpg" width="200" />
                            </div>
                        </div>
                        <!-- Client 19 -->
                        <div class="w-full sm:w-1/2 md:w-1/4 p-4">
                            <div class="bg-white p-6 rounded-lg shadow-lg client-box">
                                <img alt="Logo of Client 19" class="w-full h-24 object-contain mb-4" height="100" src="https://storage.googleapis.com/a1aa/image/lg4LKe0I2G2i4tnO0TNoiiOOFPeMm8cGm-Rx6RIICVg.jpg" width="200" />
                            </div>
                        </div>
                        <!-- Client 20 -->
                        <div class="w-full sm:w-1/2 md:w-1/4 p-4">
                            <div class="bg-white p-6 rounded-lg shadow-lg client-box">
                                <img alt="Logo of Client 20" class="w-full h-24 object-contain mb-4" height="100" src="https://storage.googleapis.com/a1aa/image/Trr55l8kxtQh_CxjmdKKSKfbvtjaKxIUyA7k9R6TkZE.jpg" width="200" />
                            </div>
                        </div>
                        <!-- Client 21 -->
                        <div class="w-full sm:w-1/2 md:w-1/4 p-4">
                            <div class="bg-white p-6 rounded-lg shadow-lg client-box">
                                <img alt="Logo of Client 21" class="w-full h-24 object-contain mb-4" height="100" src="https://storage.googleapis.com/a1aa/image/o1HKmHV7sOv-DjDiJ1vseTQWAs9_TUr68TujvftgpDk.jpg" width="200" />
                            </div>
                        </div>
                        <!-- Client 22 -->
                        <div class="w-full sm:w-1/2 md:w-1/4 p-4">
                            <div class="bg-white p-6 rounded-lg shadow-lg client-box">
                                <img alt="Logo of Client 22" class="w-full h-24 object-contain mb-4" height="100" src="https://storage.googleapis.com/a1aa/image/4aFC0Z4SbYNOTcKproTPHUe6fBMnoFLowsU2Xe6eEVM.jpg" width="200" />
                            </div>
                        </div>
                        <!-- Client 23 -->
                        <div class="w-full sm:w-1/2 md:w-1/4 p-4">
                            <div class="bg-white p-6 rounded-lg shadow-lg client-box">
                                <img alt="Logo of Client 23" class="w-full h-24 object-contain mb-4" height="100" src="https://storage.googleapis.com/a1aa/image/f0TneKS1zb9hKsdu27_MMnXvtzcmePNZb6TnLxuiWls.jpg" width="200" />
                            </div>
                        </div>
                        <!-- Client 24 -->
                        <div class="w-full sm:w-1/2 md:w-1/4 p-4">
                            <div class="bg-white p-6 rounded-lg shadow-lg client-box">
                                <img alt="Logo of Client 24" class="w-full h-24 object-contain mb-4" height="100" src="https://storage.googleapis.com/a1aa/image/WeSuQ5WdirZgN4mu1COHfQh9KSnIDRqPUjzg3kSfFRQ.jpg" width="200" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-dots">
                    <button class="dot active" onclick="goToSlide(0)" aria-label="Slide 1"></button>
                    <button class="dot" onclick="goToSlide(1)" aria-label="Slide 2"></button>
                    <button class="dot" onclick="goToSlide(2)" aria-label="Slide 3"></button>
                </div>
            </div>
        </div>
    </section>


    <!-- Footer -->
    <footer class="bg-gray-800 py-6">
        <div class="container mx-auto text-center text-gray-300 px-4">
            <p>
                © 2022 Mandajaya Rekayasa Konstruksi. All rights reserved.
            </p>
            <p class="mt-2">
                Jl.kota mas 1 no.18 - Kota Cimahi - Jawa Barat, 40511
            </p>
            <div class="flex justify-center space-x-4 mt-4">
                <a class="text-gray-300 hover:text-white" href="https://www.facebook.com/profile.php?id=61569553317515">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a class="text-gray-300 hover:text-white" href="#">
                    <i class="fab fa-twitter"></i>
                </a>
                <a class="text-gray-300 hover:text-white" href="#">
                    <i class="fab fa-linkedin-in"></i>
                </a>
                <a class="text-gray-300 hover:text-white" href="https://www.instagram.com/mandajaya_rekayasa_konstruksi?igsh=MW1kdTFxb2kycWNheg==">
                    <i class="fab fa-instagram"></i>
                </a>
            </div>
        </div>
    </footer>
    <script>
        // Mobile menu toggle
        document.getElementById('menu-toggle').addEventListener('click', function() {
            const mobileMenu = document.getElementById('mobile-menu');
            mobileMenu.classList.toggle('hidden');
        });

        // Carousel functionality
        let currentIndex = 0;
        const slides = document.querySelectorAll('.carousel-slide');
        const dots = document.querySelectorAll('.dot');
        const totalSlides = slides.length;
        let slideInterval;

        function updateDots() {
            dots.forEach((dot, index) => {
                dot.classList.toggle('active', index === currentIndex);
            });
        }

        function showSlide(index) {
            // Handle circular navigation
            if (index >= totalSlides) {
                currentIndex = 0;
            } else if (index < 0) {
                currentIndex = totalSlides - 1;
            } else {
                currentIndex = index;
            }

            // Move carousel
            const track = document.querySelector('.carousel-track');
            track.style.transform = `translateX(-${currentIndex * 100}%)`;

            // Update dots
            updateDots();
        }

        function nextSlide() {
            showSlide(currentIndex + 1);
        }

        function prevSlide() {
            showSlide(currentIndex - 1);
        }

        function goToSlide(index) {
            showSlide(index);
            resetInterval();
        }

        function resetInterval() {
            clearInterval(slideInterval);
            slideInterval = setInterval(nextSlide, 5000);
        }

        // Initialize carousel
        function initCarousel() {
            // Add click events to arrows
            const prevButton = document.querySelector('.carousel-arrow.prev');
            const nextButton = document.querySelector('.carousel-arrow.next');

            if (prevButton && nextButton) {
                prevButton.addEventListener('click', () => {
                    prevSlide();
                    resetInterval();
                });

                nextButton.addEventListener('click', () => {
                    nextSlide();
                    resetInterval();
                });
            }

            // Add click events to dots
            dots.forEach((dot, index) => {
                dot.addEventListener('click', () => {
                    goToSlide(index);
                });
            });

            // Start auto-advance
            resetInterval();

            // Pause on hover
            const carousel = document.querySelector('.carousel');
            carousel.addEventListener('mouseenter', () => {
                clearInterval(slideInterval);
            });

            carousel.addEventListener('mouseleave', () => {
                resetInterval();
            });

            // Initial state
            updateDots();
        }

        // Initialize when DOM is loaded
        document.addEventListener('DOMContentLoaded', initCarousel);

        // Optional: Add keyboard navigation
        document.addEventListener('keydown', (e) => {
            if (e.key === 'ArrowLeft') {
                prevSlide();
                resetInterval();
            } else if (e.key === 'ArrowRight') {
                nextSlide();
                resetInterval();
            }
        });

        // Optional: Add touch support
        let touchStartX = 0;
        let touchEndX = 0;

        const carousel = document.querySelector('.carousel');

        carousel.addEventListener('touchstart', (e) => {
            touchStartX = e.changedTouches[0].screenX;
        }, false);

        carousel.addEventListener('touchend', (e) => {
            touchEndX = e.changedTouches[0].screenX;
            handleSwipe();
        }, false);

        function handleSwipe() {
            const swipeThreshold = 50;
            const difference = touchStartX - touchEndX;

            if (Math.abs(difference) > swipeThreshold) {
                if (difference > 0) {
                    // Swipe left
                    nextSlide();
                } else {
                    // Swipe right
                    prevSlide();
                }
                resetInterval();
            }
        }
    </script>
</body>

</html>