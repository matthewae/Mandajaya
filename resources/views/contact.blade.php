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
    <meta content="{{ csrf_token() }}" name="csrf-token">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet" />
    </meta>
</head>

<body class="font-roboto">
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
                <li>
                    <a class="text-gray-300 hover:text-blue-400 transition duration-300" href="/">
                        Home
                    </a>
                </li>
                <li>
                    <a class="text-gray-300 hover:text-blue-400 transition duration-300" href="contact">
                        Contact Us
                    </a>
                </li>
                <li>
                    <a class="text-gray-300 hover:text-blue-400 transition duration-300" href="service">
                        Services
                    </a>
                </li>
                <li>
                    <a class="text-gray-300 hover:text-blue-400 transition duration-300" href="project">
                        Projects
                    </a>
                </li>
                <li>
                    <a class="text-gray-300 hover:text-blue-400 transition duration-300" href="team">
                        Our Team
                    </a>
                </li>
                <li>
                    <a class="text-gray-300 hover:text-blue-400 transition duration-300" href="client">
                        Clients
                    </a>
                </li>
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
                    <i class="fas fa-bars">
                    </i>
                </button>
            </div>
        </div>
        <!-- Mobile Menu -->
        <ul class="hidden md:hidden flex flex-col space-y-3 mt-4 bg-gray-800 p-4 rounded-lg shadow-lg" id="mobile-menu">
            <li>
                <a class="text-gray-300 hover:text-blue-400 transition duration-300" href="/">
                    Home
                </a>
            </li>
            <li>
                <a class="text-gray-300 hover:text-blue-400 transition duration-300" href="contact">
                    Contact Us
                </a>
            </li>
            <li>
                <a class="text-gray-300 hover:text-blue-400 transition duration-300" href="service">
                    Services
                </a>
            </li>
            <li>
                <a class="text-gray-300 hover:text-blue-400 transition duration-300" href="project">
                    Projects
                </a>
            </li>
            <li>
                <a class="text-gray-300 hover:text-blue-400 transition duration-300" href="team">
                    Our Team
                </a>
            </li>
            <li>
                <a class="text-gray-300 hover:text-blue-400 transition duration-300" href="client">
                    Clients
                </a>
            </li>
            <!-- Company Profile Button for Mobile -->
            <li>
                <a class="border border-blue-500 text-blue-500 px-5 py-2 rounded-lg hover:bg-blue-500 hover:text-white transition duration-300 text-center" href="https://drive.google.com/file/d/1_OuB8-CuDZPOWyo8zdetd3FRSMIm29gJ/view?usp=sharing" target="_blank">
                    Company Profile
                </a>
            </li>
        </ul>
    </nav>
    <section class="py-12 bg-gray-100">
        <div class="container mx-auto text-center px-4">
            <h2 class="text-3xl font-bold mb-6">Contact Us</h2>
            <p class="text-gray-700 mb-6">We would love to hear from you! Please fill out the form below to get in touch with us.</p>
            <div class="flex flex-wrap justify-center">
                <div class="w-full md:w-1/2 p-4">
                    <form class="bg-white p-6 rounded-lg shadow-lg" id="contact-form">
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="name">Name</label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" name="name" placeholder="Your Name" required type="text" />
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="phone">Phone</label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="phone" name="phone" placeholder="Your Phone Number" required type="tel" />
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Email</label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" name="email" placeholder="Your Email" required type="email" />
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="subject">Subject</label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="subject" name="subject" placeholder="Subject" required type="text" />
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="message">Message</label>
                            <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="message" name="message" placeholder="Your Message" required rows="5"></textarea>
                        </div>
                        <div class="flex items-center justify-between">
                            <button class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button" onclick="sendEmail()">Send Message</button>
                        </div>
                    </form>
                </div>
                <div class="w-full md:w-1/2 p-4 flex justify-center items-center">
                    <iframe class="w-full h-96 border-0 rounded-lg shadow-lg" src="https://www.google.com/maps?q=-6.866557,107.539226&hl=es;z=14&output=embed"></iframe>
                </div>
            </div>
        </div>
    </section>
    <footer class="bg-gray-800 py-6">
        <div class="container mx-auto text-center text-gray-300 px-4">
            <p>
                © 2022 Mandajaya Rekayasa Konstruksi. All rights reserved.
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11">
    </script>
    <script>
        function sendEmail() {
            let name = document.getElementById("name").value;
            let email = document.getElementById("email").value;
            let phone = document.getElementById("phone").value; // Get phone number
            let subject = document.getElementById("subject").value;
            let message = document.getElementById("message").value;

            let mailtoLink = `https://mail.google.com/mail/?view=cm&fs=1&to=contact.us@mandajayarekayasakonstruksi.com&su=${encodeURIComponent(subject)}&body=${encodeURIComponent(
        'Name: ' + name +
        '\nEmail: ' + email +
        '\nPhone: ' + phone + // Add phone number here
        '\n\n' + message
    )}`;

            window.open(mailtoLink, '_blank');
        }


        document.getElementById("contact-form").addEventListener("submit", function(event) {
            event.preventDefault(); // Mencegah reload halaman

            let formData = new FormData(this);

            fetch("/email/send_email.php", {
                    method: "POST",
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    if (data.status === "success") {
                        // Tampilkan SweetAlert untuk sukses
                        Swal.fire({
                            icon: "success",
                            title: "Success!",
                            text: "Your message has been sent successfully.",
                            confirmButtonColor: "#3085d6"
                        });

                        // Kosongkan input field setelah sukses
                        document.getElementById("contact-form").reset();
                    } else {
                        // Tampilkan SweetAlert untuk error
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
                    // Tampilkan SweetAlert untuk error koneksi
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