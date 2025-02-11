<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>
        Contact Us - Mandajaya Rekayasa Konstruksi
    </title>
    <script src="https://cdn.tailwindcss.com">
    </script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet" />
    <meta content="{{ csrf_token() }}" name="csrf-token" />
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet" />
    <style>
        .navbar {
            background: rgba(17, 24, 39, 0.95);
            backdrop-filter: blur(8px);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 50;
            transition: all 0.3s ease;
        }

        .navbar.scrolled {
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
            background: rgba(17, 24, 39, 0.98);
        }

        .nav-link {
            position: relative;
            padding-bottom: 2px;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 0;
            background-color: #3B82F6;
            transition: width 0.3s ease;
        }

        .nav-link:hover::after {
            width: 100%;
        }

        .company-logo {
            transition: transform 0.3s ease;
        }

        .company-logo:hover {
            transform: scale(1.05);
        }
    </style>
</head>

<body class="font-roboto">
    <nav class="navbar p-4 shadow-lg">
        <div class="container mx-auto flex justify-between items-center">
            <div class="flex items-center space-x-3">
                <img alt="Company logo" class="h-12 w-12 company-logo" src="{{ asset('storage/Logo FI.png') }}" />
                <a class="text-white text-2xl font-bold tracking-wide hover:text-blue-400 transition duration-300 group" href="/">
                    <span class="text-white group-hover:text-yellow-500 transition duration-300">Mandajaya Rekayasa Konstruksi</span>
                </a>
            </div>

            <!-- Desktop Menu -->
            <ul class="hidden md:flex space-x-8 items-center">
                <li><a class="nav-link text-gray-300 hover:text-blue-400 transition duration-300" href="/">Home</a></li>
                <li><a class="nav-link text-gray-300 hover:text-blue-400 transition duration-300" href="service">Services</a></li>
                <li><a class="nav-link text-gray-300 hover:text-blue-400 transition duration-300" href="project">Projects</a></li>
                <li><a class="nav-link text-gray-300 hover:text-blue-400 transition duration-300" href="team">Our Team</a></li>
                <li><a class="nav-link text-gray-300 hover:text-blue-400 transition duration-300" href="client">Clients</a></li>
                <li><a class="nav-link text-gray-300 hover:text-blue-400 transition duration-300" href="contact">Contact Us</a></li>
                <li>
                    <a href="https://drive.google.com/file/d/1_OuB8-CuDZPOWyo8zdetd3FRSMIm29gJ/view?usp=sharing"
                        target="_blank"
                        class="bg-blue-500 text-white px-6 py-2 rounded-full hover:bg-blue-600 transition duration-300 flex items-center space-x-2">
                        <span>Company Profile</span>
                        <i class="fas fa-external-link-alt text-sm"></i>
                    </a>
                </li>
            </ul>
            <!-- Mobile Menu Button -->
            <div class="md:hidden">
                <button class="text-gray-300 focus:outline-none text-2xl" id="menu-toggle">
                    <i class="fas fa-bars">
                    </i>
                </button>
            </div>
        </div>
        <!-- Mobile Menu -->
        <ul class="hidden md:hidden flex flex-col space-y-3 mt-4 bg-gray-800 p-4 rounded-lg shadow-lg" id="mobile-menu">
            <li><a class="text-gray-300 hover:text-blue-400 transition duration-300" href="/">Home</a></li>
            <li><a class="text-gray-300 hover:text-blue-400 transition duration-300" href="service">Services</a></li>
            <li><a class="text-gray-300 hover:text-blue-400 transition duration-300" href="project">Projects</a></li>
            <li><a class="text-gray-300 hover:text-blue-400 transition duration-300" href="team">Our Team</a></li>
            <li><a class="text-gray-300 hover:text-blue-400 transition duration-300" href="client">Clients</a></li>
            <li><a class="text-gray-300 hover:text-blue-400 transition duration-300" href="contact">Contact Us</a></li>
            <!-- Company Profile Button for Mobile -->
            <li>
                <a class="border border-blue-500 text-blue-500 px-5 py-2 rounded-lg hover:bg-blue-500 hover:text-white transition duration-300 text-center" href="https://drive.google.com/file/d/1_OuB8-CuDZPOWyo8zdetd3FRSMIm29gJ/view?usp=sharing" target="_blank">
                    Company Profile
                </a>
            </li>
        </ul>
    </nav>

    <!-- Contact Section -->
    <section class="py-16 bg-gradient-to-b from-gray-100 to-white fade-in mt-24">
        <div class="container mx-auto px-4">
            <!-- Section Header -->
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold mb-4">Get In Touch</h2>
                <div class="w-24 h-1 bg-blue-500 mx-auto mb-6"></div>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    We would love to hear from you! Please fill out the form below to get in touch with us.
                </p>
            </div>

            <!-- Contact Content -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 max-w-6xl mx-auto">
                <!-- Contact Form -->
                <div class="bg-white rounded-xl shadow-lg p-8">
                    <form id="contact-form" class="space-y-6">
                        <!-- Name & Phone Fields -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-gray-700 text-sm font-semibold mb-2" for="name">Name</label>
                                <input type="text" id="name" name="name" required
                                    class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition duration-300"
                                    placeholder="Your Name">
                            </div>
                            <div>
                                <label class="block text-gray-700 text-sm font-semibold mb-2" for="phone">Phone</label>
                                <input type="tel" id="phone" name="phone" required
                                    class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition duration-300"
                                    placeholder="Your Phone Number">
                            </div>
                        </div>

                        <!-- Email & Subject Fields -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-gray-700 text-sm font-semibold mb-2" for="email">Email</label>
                                <input type="email" id="email" name="email" required
                                    class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition duration-300"
                                    placeholder="Your Email">
                            </div>
                            <div>
                                <label class="block text-gray-700 text-sm font-semibold mb-2" for="subject">Subject</label>
                                <input type="text" id="subject" name="subject" required
                                    class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition duration-300"
                                    placeholder="Message Subject">
                            </div>
                        </div>

                        <!-- Message Field -->
                        <div>
                            <label class="block text-gray-700 text-sm font-semibold mb-2" for="message">Message</label>
                            <textarea id="message" name="message" rows="6" required
                                class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition duration-300"
                                placeholder="Your Message"></textarea>
                        </div>

                        <!-- Submit Button -->
                        <div class="flex justify-end">
                            <button onclick="sendEmail()" type="button"
                                class="bg-blue-500 text-white px-8 py-3 rounded-lg hover:bg-blue-600 transform hover:-translate-y-1 transition duration-300 flex items-center space-x-2">
                                <span>Send Message</span>
                                <i class="fas fa-paper-plane ml-2"></i>
                            </button>
                        </div>
                    </form>
                </div>

                <!-- Contact Information -->
                <div class="space-y-8">
                    <!-- Info Card -->
                    <div class="bg-white rounded-xl shadow-lg p-8">
                        <h3 class="text-2xl font-bold mb-6">Contact Information</h3>
                        <div class="space-y-6">
                            <!-- Address -->
                            <div class="flex items-start space-x-4">
                                <div class="flex-shrink-0">
                                    <div class="w-12 h-12 bg-blue-50 rounded-lg flex items-center justify-center">
                                        <i class="fas fa-map-marker-alt text-xl text-blue-500"></i>
                                    </div>
                                </div>
                                <div>
                                    <h4 class="text-lg font-semibold mb-1">Our Location</h4>
                                    <p class="text-gray-600">Jl. Kota Mas 1 No.18, Kota Cimahi, Jawa Barat, 40511</p>
                                </div>
                            </div>

                            <!-- Phone -->
                            <div class="flex items-start space-x-4">
                                <div class="flex-shrink-0">
                                    <div class="w-12 h-12 bg-blue-50 rounded-lg flex items-center justify-center">
                                        <i class="fas fa-phone text-xl text-blue-500"></i>
                                    </div>
                                </div>
                                <div>
                                    <h4 class="text-lg font-semibold mb-1">Phone Number</h4>
                                    <p class="text-gray-600">+62 22-2335599</p>
                                </div>
                            </div>

                            <!-- Email -->
                            <div class="flex items-start space-x-4">
                                <div class="flex-shrink-0">
                                    <div class="w-12 h-12 bg-blue-50 rounded-lg flex items-center justify-center">
                                        <i class="fas fa-envelope text-xl text-blue-500"></i>
                                    </div>
                                </div>
                                <div>
                                    <h4 class="text-lg font-semibold mb-1">Email</h4>
                                    <a href="mailto:info@mandajaya.com" class="text-blue-500 hover:text-blue-600 transition duration-300">
                                        info@mandajaya.com
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Map -->
                    <div class="bg-white rounded-xl shadow-lg p-8">
                        <h3 class="text-2xl font-bold mb-6">Our Location</h3>
                        <div class="h-[300px] rounded-lg overflow-hidden">
                            <iframe
                                src="https://www.google.com/maps?q=-6.866557,107.539226&amp;hl=es;z=14&amp;output=embed"
                                class="w-full h-full rounded-lg"
                                style="border:0;"
                                allowfullscreen=""
                                loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact -->
    <!-- <section class="py-12 bg-gray-100">
        <div class="container mx-auto text-center px-4">
            <h2 class="text-3xl font-bold mb-6">
                Contact Us
            </h2>
            <p class="text-gray-700 mb-6">
                We would love to hear from you! Please fill out the form below to get in touch with us.
            </p>
            <div class="flex flex-wrap justify-center">
                <div class="w-full md:w-1/2 p-4">
                    <form class="bg-white p-6 rounded-lg shadow-lg h-full" id="contact-form">
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                                Name
                            </label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" name="name" placeholder="Your Name" required="" type="text" />
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="phone">
                                Phone
                            </label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="phone" name="phone" placeholder="Your Phone Number" required="" type="tel" />
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                                Email
                            </label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" name="email" placeholder="Your Email" required="" type="email" />
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="subject">
                                Subject
                            </label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="subject" name="subject" placeholder="Subject" required="" type="text" />
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="message">
                                Message
                            </label>
                            <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="message" name="message" placeholder="Your Message" required="" rows="5"></textarea>
                        </div>
                        <div class="flex items-center justify-between">
                            <button class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" onclick="sendEmail()" type="button">
                                Send Message
                            </button>
                        </div>
                    </form>
                </div>
                <div class="w-full md:w-1/2 p-4 flex justify-center items-center">
                    <div class="bg-white p-6 rounded-lg shadow-lg w-full h-full flex flex-col">
                        <h3 class="text-2xl font-bold mb-4">
                            Our Location
                        </h3>
                        <p class="text-gray-700 mb-4">
                            Jl.Kota Mas 1 no.18 - Kota Cimahi - Jawa Barat - 40511
                        </p>
                        <iframe class="w-full flex-grow border-0 rounded-lg shadow-lg" src="https://www.google.com/maps?q=-6.866557,107.539226&amp;hl=es;z=14&amp;output=embed">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- Footer -->
    <footer class="bg-gray-900 text-gray-300">
        <!-- Main Footer -->
        <div class="container mx-auto px-4 py-12">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Company Info -->
                <div class="space-y-4">
                    <div class="flex items-center space-x-3 mb-6">
                        <img src="{{ asset('storage/Logo FI.png') }}" alt="MRK Logo" class="h-10 w-10">
                        <h3 class="text-xl font-bold text-white">Mandajaya Rekayasa Konstruksi</h3>
                    </div>
                    <p class="text-sm text-gray-400 leading-relaxed">
                        Providing top-notch construction consulting services with a commitment to excellence, innovation, and client satisfaction.
                    </p>
                </div>

                <!-- Quick Links -->
                <div>
                    <h4 class="text-lg font-semibold text-white mb-6">Quick Links</h4>
                    <ul class="space-y-3">
                        <li>
                            <a href="/" class="text-gray-400 hover:text-blue-400 transition duration-300">Home</a>
                        </li>
                        <li>
                            <a href="service" class="text-gray-400 hover:text-blue-400 transition duration-300">Services</a>
                        </li>
                        <li>
                            <a href="project" class="text-gray-400 hover:text-blue-400 transition duration-300">Projects</a>
                        </li>
                        <li>
                            <a href="team" class="text-gray-400 hover:text-blue-400 transition duration-300">Our Team</a>
                        </li>
                        <li>
                            <a href="client" class="text-gray-400 hover:text-blue-400 transition duration-300">Clients</a>
                        </li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div>
                    <h4 class="text-lg font-semibold text-white mb-6">Contact Us</h4>
                    <ul class="space-y-3">
                        <li class="flex items-start space-x-3">
                            <i class="fas fa-map-marker-alt mt-1 text-blue-400"></i>
                            <span class="text-gray-400">Jl. Kota Mas 1 No.18, Kota Cimahi, Jawa Barat, 40511</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <i class="fas fa-phone text-blue-400"></i>
                            <span class="text-gray-400">+62 22-2335599</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <i class="fas fa-envelope text-blue-400"></i>
                            <a href="mailto:info@mandajaya.com" class="text-gray-400 hover:text-blue-400 transition duration-300">
                                info@mandajaya.com
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Social Media & Newsletter -->
                <div>
                    <h4 class="text-lg font-semibold text-white mb-6">Connect With Us</h4>
                    <div class="flex space-x-4 mb-6">
                        <a href="https://www.facebook.com/profile.php?id=61569553317515"
                            class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center hover:bg-blue-600 transition duration-300">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#"
                            class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center hover:bg-blue-400 transition duration-300">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#"
                            class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center hover:bg-blue-700 transition duration-300">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="https://www.instagram.com/mandajaya_rekayasa_konstruksi?igsh=MW1kdTFxb2kycWNheg=="
                            class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center hover:bg-pink-600 transition duration-300">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>

                    <!-- Company Profile Button -->
                    <a href="https://drive.google.com/file/d/1_OuB8-CuDZPOWyo8zdetd3FRSMIm29gJ/view?usp=sharing"
                        target="_blank"
                        class="inline-flex items-center space-x-2 bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition duration-300">
                        <i class="fas fa-download"></i>
                        <span>Download Company Profile</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Bottom Footer -->
        <div class="border-t border-gray-800">
            <div class="container mx-auto px-4 py-6">
                <div class="md:flex md:items-center md:justify-between text-sm">
                    <div class="text-center md:text-left">
                        <p>&copy; 2022 Mandajaya Rekayasa Konstruksi. All rights reserved.</p>
                    </div>
                    <div class="mt-4 md:mt-0 text-center md:text-right">
                        <a href="#" class="text-gray-400 hover:text-blue-400 transition duration-300 mx-2">Privacy Policy</a>
                        <span class="text-gray-600">|</span>
                        <a href="#" class="text-gray-400 hover:text-blue-400 transition duration-300 mx-2">Terms of Service</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11">
    </script>
    <script>
        function sendEmail() {
            let name = document.getElementById("name").value;
            let email = document.getElementById("email").value;
            let phone = document.getElementById("phone").value;
            let subject = document.getElementById("subject").value;
            let message = document.getElementById("message").value;

            let mailtoLink = `https://mail.google.com/mail/?view=cm&fs=1&to=contact.us@mandajayarekayasakonstruksi.com&su=${encodeURIComponent(subject)}&body=${encodeURIComponent(
                'Name: ' + name +
                '\nEmail: ' + email +
                '\nPhone: ' + phone +
                '\n\n' + message
            )}`;

            window.open(mailtoLink, '_blank');
        }

        document.getElementById("menu-toggle").addEventListener("click", function() {
            const mobileMenu = document.getElementById("mobile-menu");
            mobileMenu.classList.toggle("hidden");
        });

        document.getElementById("contact-form").addEventListener("submit", function(event) {
            event.preventDefault();

            let formData = new FormData(this);

            fetch("/email/send_email.php", {
                    method: "POST",
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    if (data.status === "success") {
                        Swal.fire({
                            icon: "success",
                            title: "Success!",
                            text: "Your message has been sent successfully.",
                            confirmButtonColor: "#3085d6"
                        });

                        document.getElementById("contact-form").reset();
                    } else {
                        Swal.fire({
                            icon: "error",
                            title: "Oops...",
                            text: "Failed to send message. Please try again later.",
                            confirmButtonColor: "#d33"
                        });
                    }
                })
                .catch(error => {
                    console.error("Error:", error);
                    Swal.fire({
                        icon: "error",
                        title: "Oops...",
                        text: "An error occurred. Please check your internet connection.",
                        confirmButtonColor: "#d33"
                    });
                });
        });
    </script>
</body>

</html>