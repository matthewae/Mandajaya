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
    <nav class="bg-gray-800 p-4">
        <div class="container mx-auto flex justify-between items-center">
            <div class="flex items-center">
                <img alt="Company logo" class="h-8 w-8 mr-2" height="40" src="{{ asset('storage/logo 2-modified.png') }}" width="40" />
                <a class="text-white text-2xl font-bold" href="#">
                    Mandajaya Rekayasa Konstruksi
                </a>
            </div>
            <ul class="hidden md:flex space-x-4">
                <li>
                    <a class="text-gray-300 hover:text-white" href="/">
                        Home
                    </a>
                </li>
                <li>
                    <a class="text-gray-300 hover:text-white" href="contact">
                        Contact Us
                    </a>
                </li>
                <li>
                    <a class="text-gray-300 hover:text-white" href="service">
                        Services
                    </a>
                </li>
                <li>
                    <a class="text-gray-300 hover:text-white" href="project">
                        Projects
                    </a>
                </li>
                <li>
                    <a class="text-gray-300 hover:text-white" href="team">
                        Our Team
                    </a>
                </li>
                <li>
                    <a class="text-gray-300 hover:text-white" href="client">
                        Clients
                    </a>
                </li>
            </ul>
            <div class="md:hidden">
                <button id="menu-toggle" class="text-gray-300 focus:outline-none">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </div>
        <ul id="mobile-menu" class="hidden md:hidden flex flex-col space-y-2 mt-4">
            <li>
                <a class="text-gray-300 hover:text-white" href="/">
                    Home
                </a>
            </li>
            <li>
                <a class="text-gray-300 hover:text-white" href="contact">
                    Contact Us
                </a>
            </li>
            <li>
                <a class="text-gray-300 hover:text-white" href="service">
                    Services
                </a>
            </li>
            <li>
                <a class="text-gray-300 hover:text-white" href="project">
                    Projects
                </a>
            </li>
            <li>
                <a class="text-gray-300 hover:text-white" href="team">
                    Our Team
                </a>
            </li>
            <li>
                <a class="text-gray-300 hover:text-white" href="client">
                    Clients
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
                We are proud to have worked with a diverse range of clients form various industries. Here are some of our estemeed clients:
            </p>
            <div class="flex flex-wrap justify-center">
                <div class="w-full md:w-1/4 p-4">
                    <div class="bg-white p-6 rounded-lg shadow-lg client-box">
                        <img alt="Logo of Client 1" class="w-full h-24 object-contain mb-4" height="100" src="https://storage.googleapis.com/a1aa/image/MFboavT2OpbpzjVge3DIHXOZI6lzyikW1CgDhhbsYaM.jpg" width="200" />
                        <h3 class="text-xl font-bold mb-2">
                            Client 1
                        </h3>
                        <p class="text-gray-700 text-justify">
                            Client 1 is a leading company in the commercial sector, known for its innovative solutions and commitment to excellence.
                        </p>
                    </div>
                </div>
                <div class="w-full md:w-1/4 p-4">
                    <div class="bg-white p-6 rounded-lg shadow-lg client-box">
                        <img alt="Logo of Client 2" class="w-full h-24 object-contain mb-4" height="100" src="https://storage.googleapis.com/a1aa/image/NRtcNACYImYyiHxLSyXUbvyxmJhrxJrfHBHVg0uZ0ng.jpg" width="200" />
                        <h3 class="text-xl font-bold mb-2">
                            Client 2
                        </h3>
                        <p class="text-gray-700 text-justify">
                            Client 2 is a prominent player in the residential sector, known for its luxury housing projects.
                        </p>
                    </div>
                </div>
                <div class="w-full md:w-1/4 p-4">
                    <div class="bg-white p-6 rounded-lg shadow-lg client-box">
                        <img alt="Logo of Client 3" class="w-full h-24 object-contain mb-4" height="100" src="https://storage.googleapis.com/a1aa/image/GibjJsnJtecTvX0MpQi-lCE7XDE58xFq9N_0jRVTF2I.jpg" width="200" />
                        <h3 class="text-xl font-bold mb-2">
                            Client 3
                        </h3>
                        <p class="text-gray-700 text-justify">
                            Client 3 is a key player in the industrial sector, specializing in manufacturing and production.
                        </p>
                    </div>
                </div>
                <div class="w-full md:w-1/4 p-4">
                    <div class="bg-white p-6 rounded-lg shadow-lg client-box">
                        <img alt="Logo of Client 4" class="w-full h-24 object-contain mb-4" height="100" src="https://storage.googleapis.com/a1aa/image/qEwirldtQwWgKiVwlCQqF2BwBtdz1ZXcjtV42jnGPhA.jpg" width="200" />
                        <h3 class="text-xl font-bold mb-2">
                            Client 4
                        </h3>
                        <p class="text-gray-700 text-justify">
                            Client 4 is a renowned company in the public sector, known for its large-scale infrastructure projects.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 py-6">
        <div class="container mx-auto text-center text-gray-300 px-4">
            <p>
                © 2023 Mandajaya Rekayasa Konstruksi. All rights reserved.
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