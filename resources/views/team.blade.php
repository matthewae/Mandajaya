<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>
        Our Team - Mandajaya Rekayasa Konstruksi
    </title>
    <script src="https://cdn.tailwindcss.com">
    </script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet" />
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

        .card:hover {
            transform: translateY(-10px);
            transition: transform 0.3s ease-in-out;
        }
    </style>
</head>

<body class="font-roboto">
    <!-- Navbar -->
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
                <button class="text-gray-300 focus:outline-none" id="menu-toggle">
                    <i class="fas fa-bars">
                    </i>
                </button>
            </div>
        </div>
        <ul class="hidden md:hidden flex flex-col space-y-2 mt-4" id="mobile-menu">
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
                    Our Clients
                </a>
            </li>
        </ul>
    </nav>
    <!-- Our Team Section -->
    <section class="py-12 bg-gray-100 fade-in">
        <div class="container mx-auto text-center px-4">
            <h2 class="text-3xl font-bold mb-6">
                Our Team
            </h2>
            <div class="flex flex-wrap justify-center">
                <div class="w-full md:w-1/3 p-4 card">
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <img alt="Portrait of John Doe, Project Manager" class="w-full h-48 object-cover mb-4" height="200" src="https://storage.googleapis.com/a1aa/image/RDxY_QfT1BvhJRWGAEEmBBeRO3wwqTGmpB2kws2POq4.jpg" width="300" />
                        <h3 class="text-xl font-bold mb-2">
                            John Doe
                        </h3>
                        <p class="text-gray-700 mb-2">
                            Project Manager
                        </p>
                        <p class="text-gray-700">
                            John has over 15 years of experience in project management and has successfully led numerous large-scale construction projects.
                        </p>
                    </div>
                </div>
                <div class="w-full md:w-1/3 p-4 card">
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <img alt="Portrait of Jane Smith, Lead Architect" class="w-full h-48 object-cover mb-4" height="200" src="https://storage.googleapis.com/a1aa/image/e31D7-Arr72a-bNeJxwTK0uZgLcyIoXLN_n1mOgNzVY.jpg" width="300" />
                        <h3 class="text-xl font-bold mb-2">
                            Jane Smith
                        </h3>
                        <p class="text-gray-700 mb-2">
                            Lead Architect
                        </p>
                        <p class="text-gray-700">
                            Jane is a highly skilled architect with a passion for sustainable design and innovative solutions.
                        </p>
                    </div>
                </div>
                <div class="w-full md:w-1/3 p-4 card">
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <img alt="Portrait of Michael Brown, Construction Supervisor" class="w-full h-48 object-cover mb-4" height="200" src="https://storage.googleapis.com/a1aa/image/2xN4nXdDyH1RbRtfGfOftQvO4Lu-RcHRN7wdIflpeHs.jpg" width="300" />
                        <h3 class="text-xl font-bold mb-2">
                            Michael Brown
                        </h3>
                        <p class="text-gray-700 mb-2">
                            Construction Supervisor
                        </p>
                        <p class="text-gray-700">
                            Michael has extensive experience in construction supervision and ensures that all projects meet the highest standards of quality and safety.
                        </p>
                    </div>
                </div>
                <div class="w-full md:w-1/3 p-4 card">
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <img alt="Portrait of Emily Davis, Design Consultant" class="w-full h-48 object-cover mb-4" height="200" src="https://storage.googleapis.com/a1aa/image/Q52Alzd7NPwygC8icFnMoPcDs7Nfh8iXXjOrgaaT29g.jpg" width="300" />
                        <h3 class="text-xl font-bold mb-2">
                            Emily Davis
                        </h3>
                        <p class="text-gray-700 mb-2">
                            Design Consultant
                        </p>
                        <p class="text-gray-700">
                            Emily specializes in creating functional and aesthetically pleasing spaces that meet the unique needs of each client.
                        </p>
                    </div>
                </div>
                <div class="w-full md:w-1/3 p-4 card">
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <img alt="Portrait of David Wilson, Quality Assurance Manager" class="w-full h-48 object-cover mb-4" height="200" src="https://storage.googleapis.com/a1aa/image/rTD-I_TEK7V3pHoEPTbX34DQgnFHN-8vQRnL8R-wNZ4.jpg" width="300" />
                        <h3 class="text-xl font-bold mb-2">
                            David Wilson
                        </h3>
                        <p class="text-gray-700 mb-2">
                            Quality Assurance Manager
                        </p>
                        <p class="text-gray-700">
                            David is dedicated to ensuring that all construction projects adhere to the highest standards of quality and safety.
                        </p>
                    </div>
                </div>
                <div class="w-full md:w-1/3 p-4 card">
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <img alt="Portrait of Sarah Johnson, Financial Analyst" class="w-full h-48 object-cover mb-4" height="200" src="https://storage.googleapis.com/a1aa/image/ieuxD_H6Ss3J8pskvrijIKKBwtJsE4o27g2QpmlzaSA.jpg" width="300" />
                        <h3 class="text-xl font-bold mb-2">
                            Sarah Johnson
                        </h3>
                        <p class="text-gray-700 mb-2">
                            Financial Analyst
                        </p>
                        <p class="text-gray-700">
                            Sarah provides financial analysis and budgeting expertise to ensure the financial success of our projects.
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
                Jl.Kota Mas 1 no.18 - Kota Cimahi - Jawa Barat - 40511
            </p>
            <div class="flex justify-center space-x-4 mt-4">
                <a class="text-gray-300 hover:text-white" href="https://www.facebook.com/profile.php?id=61569553317515">
                    <i class="fab fa-facebook-f">
                    </i>
                </a>
                <a class="text-gray-300 hover:text-white" href="#">
                    <i class="fab fa-twitter">
                    </i>
                </a>
                <a class="text-gray-300 hover:text-white" href="#">
                    <i class="fab fa-linkedin-in">
                    </i>
                </a>
                <a class="text-gray-300 hover:text-white" href="https://www.instagram.com/mandajaya_rekayasa_konstruksi?igsh=MW1kdTFxb2kycWNheg==">
                    <i class="fab fa-instagram">
                    </i>
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