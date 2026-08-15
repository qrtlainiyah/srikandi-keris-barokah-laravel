/* -------------------------------------------------------------
   CV. SRIKANDI KERIS BAROKAH - INTERACTIVE WEBSITE SCRIPTS
   ------------------------------------------------------------- */

document.addEventListener('DOMContentLoaded', () => {

    // 1. STICKY NAVBAR ON SCROLL
    const navbar = document.querySelector('.navbar-container');
    
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });

    // 2. MOBILE MENU TOGGLE
    const mobileToggle = document.getElementById('mobileToggle');
    const navMenu = document.getElementById('navMenu');
    const navLinks = document.querySelectorAll('.nav-link');

    if (mobileToggle && navMenu) {
        mobileToggle.addEventListener('click', () => {
            navMenu.classList.toggle('active');
            
            // Toggle hamburger animation
            const bars = mobileToggle.querySelectorAll('.bar');
            bars[0].classList.toggle('rotate-down');
            
            // Accessibly toggle aria state
            const isActive = navMenu.classList.contains('active');
            mobileToggle.setAttribute('aria-expanded', isActive);
            
            // Animate bars
            if (isActive) {
                bars[0].style.transform = 'translateY(9px) rotate(45deg)';
                bars[1].style.opacity = '0';
                bars[2].style.transform = 'translateY(-9px) rotate(-45deg)';
            } else {
                bars[0].style.transform = 'none';
                bars[1].style.opacity = '1';
                bars[2].style.transform = 'none';
            }
        });

        // Close menu on link click (mobile)
        navLinks.forEach(link => {
            link.addEventListener('click', () => {
                navMenu.classList.remove('active');
                const bars = mobileToggle.querySelectorAll('.bar');
                bars[0].style.transform = 'none';
                bars[1].style.opacity = '1';
                bars[2].style.transform = 'none';
            });
        });
    }

    // 3. SPA ROUTING LOGIC (SWAPPING SECTIONS)
    const pages = {
        '#home': ['#home', '.quick-info-section'],
        '#tentang': ['#tentang', '.vision-mission-section'],
        '#produk': ['#produk'],
        '#layanan': ['#layanan'],
        '#testimoni': ['#testimoni'],
        '#kontak': ['#kontak']
    };

    const allSectionSelectors = ['#home', '.quick-info-section', '#tentang', '.vision-mission-section', '#produk', '#layanan', '#testimoni', '#kontak'];

    function handleRouting() {
        let hash = window.location.hash || '#home';
        if (!pages[hash]) {
            hash = '#home'; // Fallback
        }

        // Show active page sections, hide inactive ones
        allSectionSelectors.forEach(selector => {
            const elements = document.querySelectorAll(selector);
            elements.forEach(element => {
                if (pages[hash].includes(selector)) {
                    element.classList.remove('spa-hide');
                    
                    // Trigger scroll reveal animations for elements inside active section
                    const revealables = element.querySelectorAll('.pillar-card, .product-card, .service-card, .info-card, .about-content, .about-image-wrapper');
                    revealables.forEach(rev => {
                        rev.classList.add('revealed');
                    });
                    
                    // Also trigger the element itself if it is a revealable container
                    if (element.classList.contains('pillar-card') || 
                        element.classList.contains('product-card') || 
                        element.classList.contains('service-card') || 
                        element.classList.contains('info-card') || 
                        element.classList.contains('about-content') || 
                        element.classList.contains('about-image-wrapper')) {
                        element.classList.add('revealed');
                    }
                } else {
                    element.classList.add('spa-hide');
                }
            });
        });

        // Update nav links active state
        navLinks.forEach(link => {
            if (link.getAttribute('href') === hash) {
                link.classList.add('active');
            } else {
                link.classList.remove('active');
            }
        });

        // Scroll to top instantly
        window.scrollTo({ top: 0, behavior: 'instant' });
    }

    // Listen for hash changes
    window.addEventListener('hashchange', handleRouting);
    
    // Initialize routing on load
    handleRouting();

    // 4. PRODUCT FILTERING
    const filterButtons = document.querySelectorAll('.filter-btn');
    const productCards = document.querySelectorAll('.product-card');

    filterButtons.forEach(button => {
        button.addEventListener('click', () => {
            // Remove active class from all buttons
            filterButtons.forEach(btn => btn.classList.remove('active'));
            // Add active class to clicked button
            button.classList.add('active');

            const category = button.getAttribute('data-category');

            productCards.forEach(card => {
                // Add fade-out transition first
                card.style.opacity = '0';
                card.style.transform = 'scale(0.95)';
                
                setTimeout(() => {
                    if (category === 'all' || card.getAttribute('data-category') === category) {
                        card.style.display = 'flex';
                        setTimeout(() => {
                            card.style.opacity = '1';
                            card.style.transform = 'scale(1)';
                        }, 50);
                    } else {
                        card.style.display = 'none';
                    }
                }, 300);
            });
        });
    });

    // 5. TESTIMONIAL SLIDER
    const track = document.getElementById('testimonialTrack');
    const cards = document.querySelectorAll('.testimonial-card');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    const dotsContainer = document.getElementById('sliderDots');
    
    let currentIndex = 0;
    
    if (track && cards.length > 0) {
        // Create navigation dots
        cards.forEach((_, index) => {
            const dot = document.createElement('div');
            dot.classList.add('dot');
            if (index === 0) dot.classList.add('active');
            dot.addEventListener('click', () => {
                goToSlide(index);
            });
            dotsContainer.appendChild(dot);
        });

        const dots = document.querySelectorAll('.dot');

        const updateDots = () => {
            dots.forEach((dot, index) => {
                if (index === currentIndex) {
                    dot.classList.add('active');
                } else {
                    dot.classList.remove('active');
                }
            });
        };

        const goToSlide = (index) => {
            currentIndex = index;
            if (currentIndex < 0) currentIndex = cards.length - 1;
            if (currentIndex >= cards.length) currentIndex = 0;
            
            track.style.transform = `translateX(-${currentIndex * 100}%)`;
            updateDots();
        };

        // Button listeners
        prevBtn.addEventListener('click', () => {
            goToSlide(currentIndex - 1);
        });

        nextBtn.addEventListener('click', () => {
            goToSlide(currentIndex + 1);
        });

        // Auto slide every 7 seconds
        let autoSlideInterval = setInterval(() => {
            goToSlide(currentIndex + 1);
        }, 7000);

        // Reset auto slide on button click
        const resetInterval = () => {
            clearInterval(autoSlideInterval);
            autoSlideInterval = setInterval(() => {
                goToSlide(currentIndex + 1);
            }, 7000);
        };

        prevBtn.addEventListener('click', resetInterval);
        nextBtn.addEventListener('click', resetInterval);
        dots.forEach(dot => dot.addEventListener('click', resetInterval));
    }

    // 6. WHATSAPP CONTACT FORM INTEGRATION
    const whatsappForm = document.getElementById('whatsappForm');
    
    if (whatsappForm) {
        whatsappForm.addEventListener('submit', (e) => {
            e.preventDefault();
            
            const name = document.getElementById('name').value.trim();
            const topic = document.getElementById('topic').value;
            const message = document.getElementById('message').value.trim();
            
            // Format WhatsApp Message
            const companyPhone = '6287714354108'; // Direct WhatsApp number
            const intro = `Halo CV. Srikandi Keris Barokah,\nSaya ingin mengirimkan pesan dengan rincian berikut:`;
            const formattedMessage = `${intro}\n\n*Nama:* ${name}\n*Keperluan:* ${topic}\n*Pesan:* ${message}`;
            
            // Encode message for URI
            const encodedText = encodeURIComponent(formattedMessage);
            const waUrl = `https://wa.me/${companyPhone}?text=${encodedText}`;
            
            // Open WA link in a new window/tab
            window.open(waUrl, '_blank');
            
            // Reset form
            whatsappForm.reset();
        });
    }

    // 7. SCROLL REVEAL ANIMATIONS USING INTERSECTION OBSERVER
    const revealElements = document.querySelectorAll('.pillar-card, .product-card, .service-card, .info-card, .about-content, .about-image-wrapper');
    
    if ('IntersectionObserver' in window) {
        const revealCallback = (entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('revealed');
                    observer.unobserve(entry.target);
                }
            });
        };

        const revealObserver = new IntersectionObserver(revealCallback, {
            root: null,
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        });

        // Initialize transition styles before observation
        revealElements.forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(30px)';
            el.style.transition = 'opacity 0.8s ease, transform 0.8s cubic-bezier(0.16, 1, 0.3, 1)';
            
            // Define active class styling behavior
            const style = document.createElement('style');
            style.textContent = `
                .revealed {
                    opacity: 1 !important;
                    transform: translateY(0) !important;
                }
            `;
            document.head.appendChild(style);
            
            revealObserver.observe(el);
        });
    } else {
        // Fallback for older browsers
        revealElements.forEach(el => {
            el.style.opacity = '1';
            el.style.transform = 'none';
        });
    }

    // 8. IMAGE MODAL FOR PRODUCT DETAILS
    const modal = document.getElementById('imageModal');
    const modalImg = document.getElementById('modalImg');
    const modalCaption = document.getElementById('modalCaption');
    const closeBtn = document.querySelector('.modal-close');

    window.openProductDetailModal = function(imgSrc, captionText) {
        if (modal && modalImg && modalCaption) {
            modalImg.src = imgSrc;
            modalCaption.textContent = captionText;
            modal.classList.remove('spa-hide');
            document.body.style.overflow = 'hidden';
        }
    };

    if (closeBtn && modal) {
        closeBtn.addEventListener('click', () => {
            modal.classList.add('spa-hide');
            document.body.style.overflow = '';
        });
        
        modal.addEventListener('click', (e) => {
            if (e.target === modal || e.target === closeBtn) {
                modal.classList.add('spa-hide');
                document.body.style.overflow = '';
            }
        });
    }
});
