<script>
    // Scroll behavior for header
    document.addEventListener('DOMContentLoaded', function() {
        const header = document.getElementById('main-header');

        window.addEventListener('scroll', function() {
            if (window.scrollY > 100) {
                header.classList.add('header-scrolled');
                header.querySelector('div').classList.add('shadow-md');
            } else {
                header.classList.remove('header-scrolled');
                header.querySelector('div').classList.remove('shadow-md');
            }
        });

        const menuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        const menuBar1 = document.getElementById('menu-bar-1');
        const menuBar2 = document.getElementById('menu-bar-2');
        const menuBar3 = document.getElementById('menu-bar-3');
        let isMenuOpen = false;

        // Function to close the menu
        function closeMenu() {
            if (!isMenuOpen) return;

            // Animate the hamburger icon back
            menuBar1.style.transform = '';
            menuBar1.style.top = '0';
            menuBar2.style.opacity = '1';
            menuBar3.style.transform = '';
            menuBar3.style.bottom = '0';

            // Hide the menu with animation
            mobileMenu.style.maxHeight = '0px';
            mobileMenu.classList.add('hidden');

            // Remove scroll and click event listeners
            window.removeEventListener('scroll', onScroll);
            document.removeEventListener('click', onOutsideClick);
            document.removeEventListener('touchstart', onOutsideClick);

            isMenuOpen = false;
        }

        // Function to open the menu
        function openMenu() {
            // Animate hamburger to X
            menuBar1.style.transform = 'rotate(45deg)';
            menuBar1.style.top = '50%';
            menuBar1.style.marginTop = '-1px';
            menuBar2.style.opacity = '0';
            menuBar3.style.transform = 'rotate(-45deg)';
            menuBar3.style.bottom = '50%';
            menuBar3.style.marginBottom = '-1px';

            // Show the menu with animation
            mobileMenu.classList.remove('hidden');
            mobileMenu.style.maxHeight = mobileMenu.scrollHeight + 'px';

            // Add scroll and outside click listeners
            window.addEventListener('scroll', onScroll, {
                passive: true
            });
            setTimeout(() => {
                document.addEventListener('click', onOutsideClick);
                document.addEventListener('touchstart', onOutsideClick);
            }, 100);

            isMenuOpen = true;
        }

        // Function to handle outside clicks
        function onOutsideClick(event) {
            if (isMenuOpen && !mobileMenu.contains(event.target) && event.target !== menuButton && !menuButton
                .contains(event.target)) {
                closeMenu();
            }
        }

        // Function to close menu on scroll
        function onScroll() {
            if (isMenuOpen) {
                closeMenu();
            }
        }

        // Toggle menu state on button click
        menuButton.addEventListener('click', function(e) {
            e.stopPropagation();
            if (isMenuOpen) {
                closeMenu();
            } else {
                openMenu();
            }
        });

        // Close menu when clicking menu links
        const menuLinks = mobileMenu.querySelectorAll('a');
        menuLinks.forEach(link => {
            link.addEventListener('click', closeMenu);
        });
    });
</script>
