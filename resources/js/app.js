import './bootstrap';

// Initialize when DOM is loaded
document.addEventListener('DOMContentLoaded', function() {
    initNavbar();
    initMobileMenu();
    initLightbox();
    initScrollAnimations();
    
    // Extra safety check for mobile menu after a short delay
    setTimeout(() => {
        if (!window.mobileMenuInitialized) {
            console.log('Retrying mobile menu initialization...');
            initMobileMenu();
        }
    }, 1000);
});

// Backup initialization when window loads (for safety)
window.addEventListener('load', function() {
    if (!window.mobileMenuInitialized) {
        console.log('Backup mobile menu initialization on window load...');
        initMobileMenu();
    }
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
    
    console.log('Mobile menu elements:', { 
        btn: !!mobileMenuBtn, 
        menu: !!mobileMenu, 
        close: !!mobileMenuClose, 
        hamburger: !!hamburgerIcon 
    });
    
    if (!mobileMenuBtn || !mobileMenu) {
        console.error('Required mobile menu elements not found');
        return;
    }

    // Mark as initialized
    window.mobileMenuInitialized = true;
    console.log('Mobile menu elements found, adding event listeners...');

    // Global functions for mobile menu (accessible from inline scripts)
    window.openMobileMenu = function() {
        console.log('Opening mobile menu...');
        mobileMenu.classList.add('active');
        if (hamburgerIcon) hamburgerIcon.classList.add('open');
        document.body.style.overflow = 'hidden';
        
        // Add backdrop click functionality
        setTimeout(() => {
            mobileMenu.addEventListener('click', handleBackdropClick);
        }, 100);
    };

    window.closeMobileMenu = function() {
        console.log('Closing mobile menu...');
        mobileMenu.classList.remove('active');
        if (hamburgerIcon) hamburgerIcon.classList.remove('open');
        document.body.style.overflow = '';
        
        // Remove backdrop click listener
        mobileMenu.removeEventListener('click', handleBackdropClick);
    };

    function handleBackdropClick(e) {
        // Close menu if clicking on the backdrop (not on content)
        const isContentArea = e.target.closest('.p-4, .bg-white');
        if (!isContentArea && e.target === mobileMenu) {
            window.closeMobileMenu();
        }
    }

    // Remove existing event listeners to prevent duplicates
    const newBtn = mobileMenuBtn.cloneNode(true);
    mobileMenuBtn.parentNode.replaceChild(newBtn, mobileMenuBtn);
    
    if (mobileMenuClose) {
        const newCloseBtn = mobileMenuClose.cloneNode(true);
        mobileMenuClose.parentNode.replaceChild(newCloseBtn, mobileMenuClose);
        
        // Add close button event listener
        newCloseBtn.addEventListener('click', function(e) {
            console.log('Mobile menu close button clicked!');
            e.preventDefault();
            e.stopPropagation();
            window.closeMobileMenu();
        });
    }

    // Add menu button event listener
    newBtn.addEventListener('click', function(e) {
        console.log('Mobile menu button clicked!');
        e.preventDefault();
        e.stopPropagation();
        window.openMobileMenu();
    });

    // Close menu when clicking on navigation links
    const mobileLinks = mobileMenu.querySelectorAll('a[href^="#"]');
    mobileLinks.forEach(link => {
        link.addEventListener('click', function() {
            console.log('Mobile link clicked, closing menu...');
            setTimeout(() => {
                window.closeMobileMenu();
            }, 100);
        });
    });

    // Close menu with Escape key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && mobileMenu.classList.contains('active')) {
            window.closeMobileMenu();
        }
    });

    console.log('Mobile menu initialization complete!');
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
