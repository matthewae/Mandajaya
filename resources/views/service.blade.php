<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>
        Mandajaya Rekayasa Konstruksi - Services
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

        .service-box:hover {
            transform: translateY(-10px);
            transition: transform 0.3s ease-in-out;
        }
    </style>
</head>

<body class="font-montserrat">
    <nav class="bg-gray-800 p-4">
        <div class="container mx-auto flex justify-between items-center">
            <div class="flex items-center">
                <img alt="Company logo" class="h-8 w-8 mr-2" height="32" src="https://storage.googleapis.com/a1aa/image/C1g_RHgcRjwfESr4HEnNiFuRTlolgrBoNTqasNcchfI.jpg" width="32" />
                <a class="text-white text-2xl font-bold" href="#">
                    Mandajaya Rekayasa Konstruksi
                </a>
            </div>
            <ul class="hidden md:flex space-x-4">
                <li>
                    <a class="text-gray-300 hover:text-white" href="#">
                        Home
                    </a>
                </li>
                <li>
                    <a class="text-gray-300 hover:text-white" href="contact">
                        Contact Us
                    </a>
                </li>
                <li>
                    <a class="text-gray-300 hover:text-white" href="#">
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
                <a class="text-gray-300 hover:text-white" href="#">
                    Home
                </a>
            </li>
            <li>
                <a class="text-gray-300 hover:text-white" href="contact">
                    Contact Us
                </a>
            </li>
            <li>
                <a class="text-gray-300 hover:text-white" href="#">
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
    <!-- Services Section -->
    <section class="py-12 fade-in">
        <div class="container mx-auto text-center px-4">
            <h2 class="text-3xl font-bold mb-6">
                Our Services
            </h2>
        </div>
    </section>
    <!-- Project Management Section -->
    <section class="py-12 bg-gray-100 fade-in">
        <div class="container mx-auto flex flex-wrap items-center px-4">
            <div class="w-full md:w-1/2 p-4">
                <img alt="Project management team discussing plans" class="w-full h-64 object-cover rounded-lg" height="400" src="https://storage.googleapis.com/a1aa/image/GsNisj-5RUEW_mzUJA0Zgq2ICnDv7YEbBE9LV7IGF0A.jpg" width="600" />
            </div>
            <div class="w-full md:w-1/2 p-4">
                <h3 class="text-2xl font-bold mb-4">
                    Project Management
                </h3>
                <p class="text-gray-700 text-justify">
                    Our project management services are designed to ensure that your construction projects are completed on time, within budget, and to the highest quality standards. We provide comprehensive planning, coordination, and control of a project from inception to completion. Our experienced project managers use the latest tools and techniques to manage resources, schedules, and budgets effectively. We also ensure that all stakeholders are kept informed and engaged throughout the project lifecycle, minimizing risks and maximizing success.
                </p>
            </div>
        </div>
    </section>
    <!-- Design Consultation Section -->
    <section class="py-12 fade-in">
        <div class="container mx-auto flex flex-wrap items-center px-4">
            <div class="w-full md:w-1/2 p-4 order-2 md:order-1">
                <h3 class="text-2xl font-bold mb-4">
                    Design Consultation
                </h3>
                <p class="text-gray-700 text-justify">
                    Our design consultation services help you create functional and aesthetically pleasing spaces that meet your specific needs and preferences. We work closely with you to understand your vision and provide expert advice on design concepts, materials, and finishes. Our team of skilled designers and architects use the latest design software to create detailed plans and 3D models, allowing you to visualize the final result before construction begins. We also ensure that all designs comply with relevant building codes and regulations, ensuring a smooth and hassle-free construction process.
                </p>
            </div>
            <div class="w-full md:w-1/2 p-4 order-1 md:order-2">
                <img alt="Design consultation with blueprints and samples" class="w-full h-64 object-cover rounded-lg" height="400" src="https://storage.googleapis.com/a1aa/image/9IfI_CxtwXy5Chjz8RVXd4Jn8qJLa_i5GGX96A1QPNE.jpg" width="600" />
            </div>
        </div>
    </section>
    <!-- Construction Supervision Section -->
    <section class="py-12 bg-gray-100 fade-in">
        <div class="container mx-auto flex flex-wrap items-center px-4">
            <div class="w-full md:w-1/2 p-4">
                <img alt="Construction supervisor inspecting site" class="w-full h-64 object-cover rounded-lg" height="400" src="https://storage.googleapis.com/a1aa/image/rT15HHp9hiyHHlAUCvATPTdqfDYEV6YEJvvo1FBKVjE.jpg" width="600" />
            </div>
            <div class="w-full md:w-1/2 p-4">
                <h3 class="text-2xl font-bold mb-4">
                    Construction Supervision
                </h3>
                <p class="text-gray-700 text-justify">
                    Our construction supervision services ensure that all construction activities are carried out to the highest standards of quality and safety. Our experienced supervisors are on-site to monitor progress, inspect workmanship, and ensure compliance with project specifications and building codes. We also coordinate with contractors, suppliers, and other stakeholders to resolve any issues that may arise during construction. Our goal is to ensure that your project is completed on time, within budget, and to your complete satisfaction.
                </p>
            </div>
        </div>
    </section>
    <!-- Quality Assurance Section -->
    <section class="py-12 fade-in">
        <div class="container mx-auto flex flex-wrap items-center px-4">
            <div class="w-full md:w-1/2 p-4 order-2 md:order-1">
                <h3 class="text-2xl font-bold mb-4">
                    Quality Assurance
                </h3>
                <p class="text-gray-700 text-justify">
                    Our quality assurance services are designed to ensure the durability, safety, and performance of your construction projects. We implement rigorous quality control processes at every stage of the project, from design and planning to construction and final inspection. Our team of quality assurance experts conducts regular inspections and tests to verify that all materials and workmanship meet the required standards. We also provide detailed reports and documentation to ensure transparency and accountability. Our commitment to quality ensures that your project will stand the test of time and deliver lasting value.
                </p>
            </div>
            <div class="w-full md:w-1/2 p-4 order-1 md:order-2">
                <img alt="Quality assurance team conducting inspection" class="w-full h-64 object-cover rounded-lg" height="400" src="https://storage.googleapis.com/a1aa/image/4Liqso8BkPz9sRSTeT8ryucOsMW75ExZU0EUheUi3Y0.jpg" width="600" />
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
                Jl.Kota Mas 1 no.18 - Kota Cimahi - Jawa Barat - 40511
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