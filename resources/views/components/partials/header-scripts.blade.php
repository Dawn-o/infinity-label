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
        const menu = document.getElementById('mobile-menu');
        const bar1 = document.getElementById('menu-bar-1');
        const bar2 = document.getElementById('menu-bar-2');
        const bar3 = document.getElementById('menu-bar-3');

        menuButton.addEventListener('click', function() {
            if (menu.classList.contains('hidden')) {
                // Open menu
                menu.classList.remove('hidden');
                setTimeout(() => {
                    menu.style.maxHeight = menu.scrollHeight + 'px';

                    // Animate to X
                    bar1.classList.add('rotate-45', 'translate-y-2');
                    bar2.classList.add('opacity-0');
                    bar3.classList.add('-rotate-45', '-translate-y-2');
                }, 10);
            } else {
                // Close menu
                menu.style.maxHeight = '0px';

                // Animate back to hamburger
                bar1.classList.remove('rotate-45', 'translate-y-2');
                bar2.classList.remove('opacity-0');
                bar3.classList.remove('-rotate-45', '-translate-y-2');

                setTimeout(() => {
                    menu.classList.add('hidden');
                }, 300);
            }
        });
    });
</script>
