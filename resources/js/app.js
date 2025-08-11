import './bootstrap';

// Initialize when DOM is loaded
document.addEventListener('DOMContentLoaded', function() {
    initNavbar();
    initMobileMenu();
    initLightbox();
    initScrollAnimations();
});

// Navbar functionality
function initNavbar() {
    const navbar = document.querySelector('nav');
    if (!navbar) return;

    window.addEventListener('scroll', function() {
        if (window.scrollY > 50) {
            navbar.classList.add('navbar-scrolled');
        } else {
            navbar.classList.remove('navbar-scrolled');
        }
    });
}

// Mobile menu functionality
function initMobileMenu() {
    console.log('Initializing mobile menu...');
    
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    const mobileMenuClose = document.getElementById('mobile-menu-close');
    const hamburgerIcon = document.querySelector('.hamburger-icon');
    
    console.log('Mobile menu elements:', { mobileMenuBtn, mobileMenu, mobileMenuClose, hamburgerIcon });
    
    if (!mobileMenuBtn || !mobileMenu || !hamburgerIcon) {
        console.log('Mobile menu elements not found');
        return;
    }

    console.log('Mobile menu elements found, adding event listeners...');

    // Toggle mobile menu
    mobileMenuBtn.addEventListener('click', function(e) {
        console.log('Mobile menu button clicked!');
        e.preventDefault();
        e.stopPropagation();
        openMobileMenu();
    });

    // Close button
    if (mobileMenuClose) {
        mobileMenuClose.addEventListener('click', function(e) {
            console.log('Mobile menu close button clicked!');
            e.preventDefault();
            e.stopPropagation();
            closeMobileMenu();
        });
    }

    function openMobileMenu() {
        console.log('Opening mobile menu...');
        mobileMenu.classList.add('open');
        hamburgerIcon.classList.add('open');
        document.body.style.overflow = 'hidden';
    }

    function closeMobileMenu() {
        console.log('Closing mobile menu...');
        mobileMenu.classList.remove('open');
        hamburgerIcon.classList.remove('open');
        document.body.style.overflow = '';
    }

    // Close menu when clicking on links
    const mobileLinks = mobileMenu.querySelectorAll('a');
    mobileLinks.forEach(link => {
        link.addEventListener('click', function() {
            console.log('Mobile link clicked, closing menu...');
            closeMobileMenu();
        });
    });

    // Close menu when clicking outside
    document.addEventListener('click', function(e) {
        if (!mobileMenuBtn.contains(e.target) && !mobileMenu.contains(e.target)) {
            closeMobileMenu();
        }
    });
}

// Lightbox functionality
function initLightbox() {
    const lightbox = document.getElementById('lightbox');
    const lightboxImg = document.getElementById('lightbox-img');
    const lightboxClose = document.querySelector('.lightbox-close');
    
    if (!lightbox || !lightboxImg || !lightboxClose) return;

    // Gallery item click handlers
    document.querySelectorAll('.gallery-item img').forEach(img => {
        img.addEventListener('click', function() {
            const imgSrc = this.src;
            lightboxImg.src = imgSrc;
            lightbox.classList.add('active');
            document.body.style.overflow = 'hidden';
        });
    });

    // Close lightbox
    function closeLightbox() {
        lightbox.classList.remove('active');
        document.body.style.overflow = '';
    }

    lightboxClose.addEventListener('click', closeLightbox);
    lightbox.addEventListener('click', function(e) {
        if (e.target === lightbox) {
            closeLightbox();
        }
    });
}

// Simple scroll animations
function initScrollAnimations() {
    const animatedElements = document.querySelectorAll('.fade-in-up, .smooth-reveal, .gallery-item');
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry, index) => {
            if (entry.isIntersecting) {
                // Add staggered delay for multiple elements
                setTimeout(() => {
                    entry.target.classList.add('visible');
                }, index * 100);
            }
        });
    }, {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    });

    animatedElements.forEach(el => {
        observer.observe(el);
    });

    // Add interactive animations to buttons and cards
    addInteractiveAnimations();
}

// Add interactive animations
function addInteractiveAnimations() {
    // Button animations
    const buttons = document.querySelectorAll('a[href^="#"], button');
    buttons.forEach(btn => {
        btn.classList.add('btn-animate');
    });

    // Card animations
    const cards = document.querySelectorAll('.bg-white, .rounded-2xl, .shadow-lg');
    cards.forEach(card => {
        card.classList.add('card-animate');
    });

    // Interactive elements
    const interactiveElements = document.querySelectorAll('.gallery-item, .hover\\:scale-105');
    interactiveElements.forEach(el => {
        el.classList.add('interactive-element');
    });
}
