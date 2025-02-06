<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Contact Us - Mandajaya Rekayasa Konstruksi</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
</head>

<body class="font-roboto">

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
                    <i class="fas fa-bars">
                    </i>
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

    <section class="py-12 bg-gray-100">
        <div class="container mx-auto text-center px-4">
            <h2 class="text-3xl font-bold mb-6">
                Contact Us
            </h2>
            <p class="text-gray-700 mb-6">
                We would love to hear from you! Please fill out the form below to get in touch with us.
            </p>
            <div class="flex flex-wrap justify-center">
                <div class="w-full md:w-1/2 p-4">
                    <form id="contact-form" class="bg-white p-6 rounded-lg shadow-lg">
                    <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="name">Name</label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                                   id="name" type="text" name="name" placeholder="Your Name" required />
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Email</label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                                   id="email" type="email" name="email" placeholder="Your Email" required />
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="message">Message</label>
                            <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                                      id="message" name="message" rows="5" placeholder="Your Message" required></textarea>
                        </div>
                        <div class="flex items-center justify-between">
                            <button class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                            type="submit">Send Message
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-gray-800 py-6">
        <div class="container mx-auto text-center text-gray-300 px-4">
            <p>© 2023 Mandajaya Rekayasa Konstruksi. All rights reserved.</p>
            <p class="mt-2">Jl.Kota Mas 1 no.18 - Kota Cimahi - Jawa Barat - 40511</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
           document.getElementById('contact-form').addEventListener('submit', function(event) {
            event.preventDefault();

            let formData = new FormData(this);

            fetch("{{ route('contact.store') }}", {
                method: "POST",
                body: formData,
                headers: {
                    "X-CSRF-TOKEN": document.querySelector('meta[name=\"csrf-token\"]').getAttribute("content")
                }
            })
            .then(response => response.json())
            .then(data => {
                swal.fire ({
                    title : "Success!",
                    text : "Your message has been sent successfully.",
                    icon : "success",
                    confirmButtonText : "Ok"
                })
                document.getElementById('contact-form').reset();
            })
            .catch(error => {
                swal.fire({
                    title : "Error!",
                    text : "There was a problem sending message. Please try again later.",
                    icon : "error",
                    confirmButtonText : "OK"
                });
                console.error("Error:",error);
            });
        });
    </script>
    
</body>
</html>