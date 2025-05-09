<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Infinity Label - Trusted OEM Partner for International Retail & Supermarket Brands">
    <title>Infinity Label - Your OEM Manufacturing Partner</title>
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
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        /* Smooth scrolling */
        html {
            scroll-behavior: smooth;
            scroll-padding-top: 80px;
            /* Account for fixed header */
        }

        /* Blob shape */
        .blob {
            border-radius: 42% 58% 70% 30% / 45% 45% 55% 55%;
            animation: morph 8s ease-in-out infinite;
        }

        @keyframes morph {
            0% {
                border-radius: 42% 58% 70% 30% / 45% 45% 55% 55%;
            }

            25% {
                border-radius: 55% 45% 30% 70% / 55% 30% 70% 45%;
            }

            50% {
                border-radius: 30% 70% 55% 45% / 30% 65% 35% 70%;
            }

            75% {
                border-radius: 65% 35% 35% 65% / 40% 60% 40% 60%;
            }

            100% {
                border-radius: 42% 58% 70% 30% / 45% 45% 55% 55%;
            }
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
            0% {
                transform: scale(0.9);
                opacity: 0.5;
            }

            50% {
                transform: scale(1);
                opacity: 1;
            }

            100% {
                transform: scale(0.9);
                opacity: 0.5;
            }
        }
    </style>
</head>

<body class="bg-light text-dark font-sans antialiased" x-data="mainApp">
    <div class="loader" id="loader" :class="{ 'loader-hidden': !isLoading }">
        <div class="loader-logo">
            <div class="blob w-24 h-24 bg-gradient-to-br from-secondary to-primary flex items-center justify-center">
                <span class="text-white text-2xl font-bold">
                    <svg class="w-14 h-14 text-white" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path fill="currentColor"
                            d="M20.288 9.463a4.856 4.856 0 0 0-4.336-2.3 4.586 4.586 0 0 0-3.343 1.767c.071.116.148.226.212.347l.879 1.652.134-.254a2.71 2.71 0 0 1 2.206-1.519 2.845 2.845 0 1 1 0 5.686 2.708 2.708 0 0 1-2.205-1.518L13.131 12l-1.193-2.26a4.709 4.709 0 0 0-3.89-2.581 4.845 4.845 0 1 0 0 9.682 4.586 4.586 0 0 0 3.343-1.767c-.071-.116-.148-.226-.212-.347l-.879-1.656-.134.254a2.71 2.71 0 0 1-2.206 1.519 2.855 2.855 0 0 1-2.559-1.369 2.825 2.825 0 0 1 0-2.946 2.862 2.862 0 0 1 2.442-1.374h.121a2.708 2.708 0 0 1 2.205 1.518l.7 1.327 1.193 2.26a4.709 4.709 0 0 0 3.89 2.581h.209a4.846 4.846 0 0 0 4.127-7.378z" />
                    </svg>
                </span>
            </div>
        </div>
    </div>

    <x-header />
    <x-hero />
    <x-about />
    <x-purpose />
    <x-vision-mission />
    <x-products />
    <x-packaging-options />
    <x-certifications />
    <x-contact />
    <x-footer />

    <x-floating-whatsapp phoneNumber="6282380898261" tooltip="Contact us via WhatsApp" />

    <!-- Initialize AOS animations -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('mainApp', () => ({
                isLoading: true,
                currentSection: '',

                init() {
                    // Handle loader
                    window.addEventListener('load', () => {
                        this.isLoading = false;
                    });

                    // Initialize AOS
                    if (typeof AOS !== 'undefined') {
                        AOS.init({
                            duration: 800,
                            easing: 'ease-out-cubic',
                            once: true,
                            offset: 100
                        });
                    }

                    // Handle scroll for navigation highlighting
                    this.handleScroll();
                    window.addEventListener('scroll', () => this.handleScroll());
                },

                handleScroll() {
                    const sections = document.querySelectorAll('section');
                    const navLinks = document.querySelectorAll('nav a:not(:last-child)');

                    // Find current section
                    sections.forEach(section => {
                        const sectionTop = section.offsetTop;
                        if (window.scrollY >= (sectionTop - 100)) {
                            this.currentSection = section.getAttribute('id');
                        }
                    });

                    // Update active navigation link
                    navLinks.forEach(link => {
                        link.classList.remove('active-nav-link');
                        if (link.getAttribute('href')?.substring(1) === this.currentSection) {
                            link.classList.add('active-nav-link');
                        }
                    });
                }
            }));
        });
    </script>
</body>

</html>
