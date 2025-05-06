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
