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
                <li><a class="text-gray-300 hover:text-blue-400 transition duration-300" href="contact">Contact Us</a></li>
                <li><a class="text-gray-300 hover:text-blue-400 transition duration-300" href="service">Services</a></li>
                <li><a class="text-gray-300 hover:text-blue-400 transition duration-300" href="project">Projects</a></li>
                <li><a class="text-gray-300 hover:text-blue-400 transition duration-300" href="team">Our Team</a></li>
                <li><a class="text-gray-300 hover:text-blue-400 transition duration-300" href="client">Clients</a></li>
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
            <li><a class="text-gray-300 hover:text-blue-400 transition duration-300" href="contact">Contact Us</a></li>
            <li><a class="text-gray-300 hover:text-blue-400 transition duration-300" href="service">Services</a></li>
            <li><a class="text-gray-300 hover:text-blue-400 transition duration-300" href="project">Projects</a></li>
            <li><a class="text-gray-300 hover:text-blue-400 transition duration-300" href="team">Our Team</a></li>
            <li><a class="text-gray-300 hover:text-blue-400 transition duration-300" href="client">Clients</a></li>
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
            <div class="flex flex-wrap justify-center">
                <!-- Client 1 -->
                <div class="w-full sm:w-1/2 md:w-1/4 p-4">
                    <div class="bg-white p-6 rounded-lg shadow-lg client-box">
                        <img alt="Logo of Client 1" class="w-full h-24 object-contain mb-4" src="{{ asset('storage/KAI.jpg') }}" />
                    </div>
                </div>
                <!-- Client 2 -->
                <div class="w-full sm:w-1/2 md:w-1/4 p-4">
                    <div class="bg-white p-6 rounded-lg shadow-lg client-box">
                        <img alt="Logo of Client 2" class="w-full h-24 object-contain mb-4" src="{{ asset('storage/BNI.png') }}" />
                    </div>
                </div>
                <!-- Client 3 -->
                <div class="w-full sm:w-1/2 md:w-1/4 p-4">
                    <div class="bg-white p-6 rounded-lg shadow-lg client-box">
                        <img alt="Logo of Client 3" class="w-full h-24 object-contain mb-4" src="https://storage.googleapis.com/a1aa/image/GibjJsnJtecTvX0MpQi-lCE7XDE58xFq9N_0jRVTF2I.jpg" />
                    </div>
                </div>
                <!-- Client 4 -->
                <div class="w-full sm:w-1/2 md:w-1/4 p-4">
                    <div class="bg-white p-6 rounded-lg shadow-lg client-box">
                        <img alt="Logo of Client 4" class="w-full h-24 object-contain mb-4" src="https://storage.googleapis.com/a1aa/image/qEwirldtQwWgKiVwlCQqF2BwBtdz1ZXcjtV42jnGPhA.jpg" />
                    </div>
                </div>
                <!-- Client 5 -->
                <div class="w-full sm:w-1/2 md:w-1/4 p-4">
                    <div class="bg-white p-6 rounded-lg shadow-lg client-box">
                        <img alt="Logo of Client 5" class="w-full h-24 object-contain mb-4" src="{{ asset('storage/BI.png') }}" />
                    </div>
                </div>
                <!-- Client 6 -->
                <div class="w-full sm:w-1/2 md:w-1/4 p-4">
                    <div class="bg-white p-6 rounded-lg shadow-lg client-box">
                        <img alt="Logo of Client 6" class="w-full h-24 object-contain mb-4" src="{{ asset('storage/dpkp.png') }}" />
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
                        <img alt="Logo of Client 8" class="w-full h-24 object-contain mb-4" src="{{ asset('storage/POS.png') }}" />
                    </div>
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
                jl.kota mas 1 no.18 - Kota Cimahi - Jawa Barat, 40511
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
        document.getElementById('menu-toggle').addEventListener('click', function() {
            const mobileMenu = document.getElementById('mobile-menu');
            if (mobileMenu.classList.contains('hidden')) {
                mobileMenu.classList.remove('hidden');
            } else {
                mobileMenu.classList.add('hidden');
            }
        });
    </script>
</body>

</html>