<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Yobe - Trusted OEM Partner for International Retail & Supermarket Brands">
    <title>Yobe - Your OEM Manufacturing Partner</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'primary': '#2E4F4F',
                        'secondary': '#0E8388',
                        'accent': '#CBE4DE',
                        'light': '#F9F9F9',
                        'dark': '#2C3333',
                    },
                    fontFamily: {
                        'sans': ['Inter', 'sans-serif'],
                    },
                    boxShadow: {
                        'soft': '0 4px 20px rgba(0, 0, 0, 0.05)',
                        'hover': '0 10px 25px rgba(0, 0, 0, 0.1)',
                    }
                }
            }
        }
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Add Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Add AOS for scroll animations -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <style>
        /* Smooth scrolling */
        html {
            scroll-behavior: smooth;
            scroll-padding-top: 80px; /* Account for fixed header */
        }
        /* Blob shape */
        .blob {
            border-radius: 42% 58% 70% 30% / 45% 45% 55% 55%;
            animation: morph 8s ease-in-out infinite;
        }
        @keyframes morph {
            0% { border-radius: 42% 58% 70% 30% / 45% 45% 55% 55%; }
            25% { border-radius: 55% 45% 30% 70% / 55% 30% 70% 45%; }
            50% { border-radius: 30% 70% 55% 45% / 30% 65% 35% 70%; }
            75% { border-radius: 65% 35% 35% 65% / 40% 60% 40% 60%; }
            100% { border-radius: 42% 58% 70% 30% / 45% 45% 55% 55%; }
        }
        .circular-image {
            clip-path: circle(50% at 50% 50%);
        }
        
        /* Enhance section transitions */
        section {
            position: relative;
            z-index: 1;
            overflow: hidden;
        }
        
        /* Loading animation */
        .loader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #F9F9F9;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
            transition: opacity 0.5s, visibility 0.5s;
        }
        
        .loader-hidden {
            opacity: 0;
            visibility: hidden;
        }
        
        .loader-logo {
            animation: pulse 1.5s infinite;
        }
        
        @keyframes pulse {
            0% { transform: scale(0.9); opacity: 0.5; }
            50% { transform: scale(1); opacity: 1; }
            100% { transform: scale(0.9); opacity: 0.5; }
        }
    </style>
</head>

<body class="bg-light text-dark font-sans antialiased">
    <!-- Loading Screen -->
    <div class="loader" id="loader">
        <div class="loader-logo">
            <div class="blob w-24 h-24 bg-gradient-to-br from-secondary to-primary flex items-center justify-center">
                <span class="text-white text-2xl font-bold">Y</span>
            </div>
        </div>
    </div>
    
    <!-- Header Component -->
    <x-header />

    <!-- Hero Component -->
    <x-hero />

    <!-- About Component -->
    <x-about />
    
    <!-- Purpose Component -->
    <x-purpose />

    <!-- Vision & Mission Component -->
    <x-vision-mission />

    <!-- Products Component -->
    <x-products />

    <!-- Certifications Component -->
    <x-certifications />
    
    <!-- Contact Component -->
    <x-contact />

    <!-- Footer Component -->
    <x-footer />

    <!-- Initialize AOS animations -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        // Loading screen
        window.addEventListener('load', function() {
            const loader = document.getElementById('loader');
            loader.classList.add('loader-hidden');
        });
    
        // Initialize AOS
        AOS.init({
            duration: 800,
            easing: 'ease-out-cubic',
            once: true,
            offset: 100
        });
        
        // Active navigation highlighting
        document.addEventListener('DOMContentLoaded', function() {
            const sections = document.querySelectorAll('section');
            const navLinks = document.querySelectorAll('nav a:not(:last-child)'); // Exclude Contact button
            
            window.addEventListener('scroll', function() {
                let current = '';
                sections.forEach(section => {
                    const sectionTop = section.offsetTop;
                    const sectionHeight = section.clientHeight;
                    if (scrollY >= (sectionTop - 100)) {
                        current = section.getAttribute('id');
                    }
                });
                
                navLinks.forEach(link => {
                    link.classList.remove('active-nav-link');
                    if (link.getAttribute('href').substring(1) === current) {
                        link.classList.add('active-nav-link');
                    }
                });
            });
        });
    </script>
</body>

</html>
