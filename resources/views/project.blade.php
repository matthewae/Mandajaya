<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Our Projects - Mandajaya Rekayasa Konstruksi</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet" />
    <link href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" rel="stylesheet" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
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

        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            display: none;
            justify-content: center;
            align-items: center;
            z-index: 50;
        }

        .overlay.open {
            display: flex;
        }

        .overlay-content {
            background: white;
            padding: 24px;
            border-radius: 8px;
            max-width: 800px;
            width: 90%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow-y: auto;
            max-height: 90%;
        }

        .overlay-content p {
            text-align: justify;
        }
    </style>
</head>

<body class="font-roboto">
    <!-- Navbar -->
    <nav class="bg-gray-900 p-4 shadow-lg">
        <div class="container mx-auto flex justify-between items-center">
            <div class="flex items-center space-x-3">
                <img alt="Company logo" class="h-10 w-10" height="40" src="{{ asset('storage/Logo FI.png') }}" width="40" />
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
                    <a class="border border-blue-500 text-blue-500 px-5 py-2 rounded-lg hover:bg-blue-500 hover:text-white transition duration-300 flex items-center" href="https://drive.google.com/file/d/1_OuB8-CuDZPOWyo8zdetd3FRSMIm29gJ/view?usp=sharing" target="_blank">
                        Company Profile
                    </a>
                </li>
            </ul>
            <!-- Mobile Menu Button -->
            <div class="md:hidden">
                <button class="text-gray-300 focus:outline-none text-2xl" id="menu-toggle">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </div>
        <!-- Mobile Menu -->
        <ul class="hidden md:hidden flex flex-col space-y-3 mt-4 bg-gray-800 p-4 rounded-lg shadow-lg" id="mobile-menu">
            <li><a class="text-gray-300 hover:text-blue-400 transition duration-300" href="/">Home</a></li>
            <li><a class="text-gray-300 hover:text-blue-400 transition duration-300" href="contact">Contact Us</a></li>
            <li><a class="text-gray-300 hover:text-blue-400 transition duration-300" href="service">Services</a></li>
            <li><a class="text-gray-300 hover:text-blue-400 transition duration-300" href="project">Projects</a></li>
            <li><a class="text-gray-300 hover:text-blue-400 transition duration-300" href="team">Our Team</a></li>
            <li><a class="text-gray-300 hover:text-blue-400 transition duration-300" href="client">Clients</a></li>
            <!-- Company Profile Button for Mobile -->
            <li>
                <a class="border border-blue-500 text-blue-500 px-5 py-2 rounded-lg hover:bg-blue-500 hover:text-white transition duration-300 text-center" href="https://drive.google.com/file/d/1_OuB8-CuDZPOWyo8zdetd3FRSMIm29gJ/view?usp=sharing" target="_blank">
                    Company Profile
                </a>
            </li>
        </ul>
    </nav>

    <!-- Projects Section -->
    <section class="py-12 bg-gray-100 fade-in">
        <div class="container mx-auto text-center px-4">
            <h2 class="text-3xl font-bold mb-6">Our Projects</h2>
            <div class="flex flex-wrap justify-center">
                <!-- Commercial Building -->
                <div class="w-full md:w-1/3 p-4 card" onclick="showOverlay('Commercial Building', 'A state-of-the-art commercial building designed and managed by our expert team.', 'https://storage.googleapis.com/a1aa/image/seYcKjF8wP_Wk6O1puBWMiqbQI2rmvp166DUnlAtO8g.jpg', 'This commercial building features modern architecture and is equipped with the latest technology to support various business needs. The building includes multiple floors of office space, retail areas, and a spacious lobby. It is designed to be energy-efficient and environmentally friendly, with solar panels and a rainwater harvesting system.')">
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <img alt="A modern commercial building" class="w-full h-48 object-cover mb-4" src="https://storage.googleapis.com/a1aa/image/seYcKjF8wP_Wk6O1puBWMiqbQI2rmvp166DUnlAtO8g.jpg" />
                        <h3 class="text-xl font-bold mb-2">Commercial Building</h3>
                        <p class="text-gray-700 mb-4">A state-of-the-art commercial building designed and managed by our expert team.</p>
                    </div>
                </div>
                <!-- Residential Complex -->
                <div class="w-full md:w-1/3 p-4 card" onclick="showOverlay('Residential Complex', 'A luxury residential complex featuring modern amenities and sustainable design.', 'https://storage.googleapis.com/a1aa/image/fV8LLHNOLa443yshurbQ0Zy-uUJeUW_YsVfNbFbJ5zY.jpg', 'This residential complex offers a blend of luxury and sustainability, with eco-friendly materials and energy-efficient systems. The complex includes multiple apartment buildings, a community center, swimming pools, and landscaped gardens. Residents enjoy modern amenities such as a gym, playgrounds, and 24/7 security.')">
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <img alt="A luxury residential complex" class="w-full h-48 object-cover mb-4" src="https://storage.googleapis.com/a1aa/image/fV8LLHNOLa443yshurbQ0Zy-uUJeUW_YsVfNbFbJ5zY.jpg" />
                        <h3 class="text-xl font-bold mb-2">Residential Complex</h3>
                        <p class="text-gray-700 mb-4">A luxury residential complex featuring modern amenities and sustainable design.</p>
                    </div>
                </div>
                <!-- Industrial Facility -->
                <div class="w-full md:w-1/3 p-4 card" onclick="showOverlay('Industrial Facility', 'A high-tech industrial facility built to meet the needs of modern manufacturing.', 'https://storage.googleapis.com/a1aa/image/BRMUZitZ8CbAo1ZZYxgEj4kBzBMkBLsMyNtW5sEl5Z8.jpg', 'This facility is designed to support advanced manufacturing processes with state-of-the-art machinery and infrastructure. It includes large production halls, storage areas, and administrative offices. The facility is equipped with advanced safety systems and is designed to minimize environmental impact.')">
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <img alt="An industrial facility with machinery" class="w-full h-48 object-cover mb-4" src="https://storage.googleapis.com/a1aa/image/BRMUZitZ8CbAo1ZZYxgEj4kBzBMkBLsMyNtW5sEl5Z8.jpg" />
                        <h3 class="text-xl font-bold mb-2">Industrial Facility</h3>
                        <p class="text-gray-700 mb-4">A high-tech industrial facility built to meet the needs of modern manufacturing.</p>
                    </div>
                </div>
                <!-- Office Building -->
                <div class="w-full md:w-1/3 p-4 card" onclick="showOverlay('Office Building', 'A modern office building equipped with the latest technology and amenities.', 'https://storage.googleapis.com/a1aa/image/i-_V8lIUBcHc_esQyLRv1GnYgjIcgX5MSU4xfONih3w.jpg', 'This office building provides a productive work environment with cutting-edge technology and comfortable workspaces. It includes open-plan offices, meeting rooms, a cafeteria, and recreational areas. The building is designed to foster collaboration and innovation, with high-speed internet and smart building systems.')">
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <img alt="A modern office building" class="w-full h-48 object-cover mb-4" height="400" src="https://storage.googleapis.com/a1aa/image/i-_V8lIUBcHc_esQyLRv1GnYgjIcgX5MSU4xfONih3w.jpg" width="600" />
                        <h3 class="text-xl font-bold mb-2">Office Building</h3>
                        <p class="text-gray-700 mb-4">A modern office building equipped with the latest technology and amenities.</p>
                    </div>
                </div>
                <!-- Shopping Mall -->
                <div class="w-full md:w-1/3 p-4 card" onclick="showOverlay('Shopping Mall', 'A large shopping mall featuring a variety of stores and entertainment options.', 'https://storage.googleapis.com/a1aa/image/fGX5baB8NlBwH-4e-QmwVwbf5AdXUi-gerg4uhYM5R0.jpg', 'This shopping mall offers a diverse range of retail stores, dining options, and entertainment facilities for all ages. It includes a cinema, food court, and play areas for children. The mall is designed to provide a comfortable and enjoyable shopping experience, with ample parking and modern amenities.')">
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <img alt="A large shopping mall" class="w-full h-48 object-cover mb-4" height="400" src="https://storage.googleapis.com/a1aa/image/fGX5baB8NlBwH-4e-QmwVwbf5AdXUi-gerg4uhYM5R0.jpg" width="600" />
                        <h3 class="text-xl font-bold mb-2">Shopping Mall</h3>
                        <p class="text-gray-700 mb-4">A large shopping mall featuring a variety of stores and entertainment options.</p>
                    </div>
                </div>
                <!-- Hospital -->
                <div class="w-full md:w-1/3 p-4 card" onclick="showOverlay('Hospital', 'A modern hospital equipped with state-of-the-art medical facilities.', 'https://storage.googleapis.com/a1aa/image/__YoXUDSrp4MeARDysUEoln0CtH8FPGZyCd-JMbG7BM.jpg', 'This hospital is designed to provide top-notch medical care with advanced equipment and highly trained staff. It includes emergency rooms, operating theaters, patient wards, and specialized clinics. The hospital is equipped with the latest medical technology and follows strict safety and hygiene protocols.')">
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <img alt="A modern hospital building" class="w-full h-48 object-cover mb-4" height="400" src="https://storage.googleapis.com/a1aa/image/__YoXUDSrp4MeARDysUEoln0CtH8FPGZyCd-JMbG7BM.jpg" width="600" />
                        <h3 class="text-xl font-bold mb-2">Hospital</h3>
                        <p class="text-gray-700 mb-4">A modern hospital equipped with state-of-the-art medical facilities.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Overlay -->
    <div class="overlay" id="overlay">
        <div class="overlay-content">
            <button class="text-red-500 hover:text-red-700 float-right" onclick="closeOverlay()">
                <i class="fas fa-times"></i>
            </button>
            <img alt="Overlay image" class="w-full h-48 object-cover rounded-lg mb-4" height="192" id="overlay-img" src="https://storage.googleapis.com/a1aa/image/prt_JyBmYB3zq83EKZFxxoH5q86eIxm5hlypQ8WrBR0.jpg" width="300" />
            <h3 class="text-2xl font-bold mb-4" id="overlay-title">Title</h3>
            <p class="text-gray-700 mb-4" id="overlay-desc">Description</p>
            <p class="text-gray-700" id="overlay-detail">Detailed description</p>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-800 py-6">
        <div class="container mx-auto text-center text-gray-300 px-4">
            <p>© 2022 Mandajaya Rekayasa Konstruksi. All rights reserved.</p>
            <p class="mt-2">Jl.Kota Mas 1 no.18 - Kota Cimahi - Jawa Barat - 40511</p>
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
        function showOverlay(title, description, imgSrc, detail) {
            document.getElementById('overlay-title').innerText = title;
            document.getElementById('overlay-desc').innerText = description;
            document.getElementById('overlay-img').src = imgSrc;
            document.getElementById('overlay-detail').innerText = detail;
            const overlay = document.getElementById('overlay');
            overlay.classList.add('open');
        }

        function closeOverlay() {
            document.getElementById('overlay').classList.remove('open');
        }
    </script>
</body>

</html>









<!-- <script>
        function initMap(mapId, lat, lng) {
            var map = L.map(mapId).setView([lat, lng], 15);
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; OpenStreetMap contributors'
            }).addTo(map);
            L.marker([lat, lng]).addTo(map);
        }

        document.addEventListener("DOMContentLoaded", function() {
            initMap("map1", -6.9175, 107.6191);
            initMap("map2", -6.9214, 107.6079);
            initMap("map3", -6.9308, 107.6186);
        });
    </script> -->


<!-- <section class="py-12 bg-gray-100 fade-in">
        <div class="container mx-auto text-center px-4">
            <h2 class="text-3xl font-bold mb-6">Our Projects</h2>
            <div class="flex flex-wrap justify-center">
                <!-- Commercial Building -->
<!-- <div class="w-full md:w-1/3 p-4 card"> -->
<!-- <div class="bg-white p-6 rounded-lg shadow-lg">
                        <img alt="A modern commercial building" class="w-full h-48 object-cover mb-4"
                            src="https://storage.googleapis.com/a1aa/image/seYcKjF8wP_Wk6O1puBWMiqbQI2rmvp166DUnlAtO8g.jpg" />
                        <h3 class="text-xl font-bold mb-2">Commercial Building</h3>
                        <p class="text-gray-700 mb-4">
                            A state-of-the-art commercial building designed and managed by our expert team.
                        </p> -->
<!-- <div id="map1" class="map-container"></div> -->
<!-- </div>
                </div> --> -->

<!-- Residential Complex -->
<!-- <div class="w-full md:w-1/3 p-4 card">
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <img alt="A luxury residential complex" class="w-full h-48 object-cover mb-4"
                            src="https://storage.googleapis.com/a1aa/image/fV8LLHNOLa443yshurbQ0Zy-uUJeUW_YsVfNbFbJ5zY.jpg" />
                        <h3 class="text-xl font-bold mb-2">Residential Complex</h3>
                        <p class="text-gray-700 mb-4">
                            A luxury residential complex featuring modern amenities and sustainable design.
                        </p>
                        <!-- <div id="map2" class="map-container"></div> -->
<!-- </div>
                </div> --> -->

<!-- Industrial Facility -->
<!-- <div class="w-full md:w-1/3 p-4 card">
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <img alt="An industrial facility with machinery" class="w-full h-48 object-cover mb-4"
                            src="https://storage.googleapis.com/a1aa/image/BRMUZitZ8CbAo1ZZYxgEj4kBzBMkBLsMyNtW5sEl5Z8.jpg" />
                        <h3 class="text-xl font-bold mb-2">Industrial Facility</h3>
                        <p class="text-gray-700 mb-4">
                            A high-tech industrial facility built to meet the needs of modern manufacturing.
                        </p>
                        <!-- <div id="map3" class="map-container"></div> -->
<!-- </div>
                </div>
            </div>
        </div>
    </section> --> -->