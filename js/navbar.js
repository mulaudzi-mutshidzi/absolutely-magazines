document.addEventListener('DOMContentLoaded', function() {
    // Mobile menu elements
    const hamburgerMenu = document.getElementById('hamburgerMenu');
    const mobileMenuOverlay = document.getElementById('mobileMenuOverlay');
    const navbar = document.querySelector('.navbar');
    let lastScrollTop = 0;

    // Mobile menu toggle functionality
    hamburgerMenu.addEventListener('click', function() {
        hamburgerMenu.classList.toggle('active');
        mobileMenuOverlay.classList.toggle('active');
        document.body.style.overflow = mobileMenuOverlay.classList.contains('active') ? 'hidden' : '';
    });

    // Mobile dropdown functionality
    const mobileDropdownHeaders = document.querySelectorAll('.mobile-dropdown-header');
    mobileDropdownHeaders.forEach(header => {
        header.addEventListener('click', function() {
            const dropdown = this.parentElement;
            dropdown.classList.toggle('active');
            const arrow = this.querySelector('.dropdown-arrow');
            arrow.textContent = dropdown.classList.contains('active') ? '▲' : '▼';
        });
    });

    // Close mobile menu when clicking links
    const mobileMenuLinks = document.querySelectorAll('.mobile-menu-items a:not(.mobile-dropdown-header)');
    mobileMenuLinks.forEach(link => {
        link.addEventListener('click', function() {
            hamburgerMenu.classList.remove('active');
            mobileMenuOverlay.classList.remove('active');
            document.body.style.overflow = '';
        });
    });

    // Close mobile menu on resize
    window.addEventListener('resize', function() {
        if (window.innerWidth > 768 && mobileMenuOverlay.classList.contains('active')) {
            hamburgerMenu.classList.remove('active');
            mobileMenuOverlay.classList.remove('active');
            document.body.style.overflow = '';
        }
    });

    // Sticky navbar functionality for desktop/tablet
    function handleScroll() {
        if (window.innerWidth > 768) { // Only for desktop/landscape tablet
            const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            
            if (scrollTop > lastScrollTop && scrollTop > 50) {
                // Scrolling down past threshold - hide top navbar
                navbar.classList.add('scrolled');
            } else if (scrollTop <= 50) {
                // At top of page - show full navbar
                navbar.classList.remove('scrolled');
            }
            
            lastScrollTop = scrollTop <= 0 ? 0 : scrollTop;
        } else {
            // On mobile - ensure full navbar is visible
            navbar.classList.remove('scrolled');
        }
    }

    // Initialize scroll handler and add event listener
    handleScroll(); // Set initial state
    window.addEventListener('scroll', handleScroll, { passive: true });
});