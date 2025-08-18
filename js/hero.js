class HeroSlider {
    constructor() {
        this.currentSlide = 0;
        this.slideItems = document.querySelectorAll('.slide-item');
        this.totalSlides = this.slideItems.length;
        this.indicators = document.querySelectorAll('.indicator');
        this.isTransitioning = false;
        this.autoSlideInterval = null;
        this.touchStartX = 0;
        this.touchEndX = 0;
        
        this.init();
    }
    
    init() {
        this.setupEventListeners();
        this.initializeFirstSlide();
        this.startAutoSlide();
    }
    
    initializeFirstSlide() {
        this.slideItems.forEach((slide, index) => {
            if (index === 0) {
                slide.dataset.position = 'center';
            } else if (index === this.totalSlides - 1) {
                slide.dataset.position = 'left';
            } else if (index === 1) {
                slide.dataset.position = 'right';
            } else {
                slide.dataset.position = 'hidden';
                slide.style.display = 'none';
            }
        });
        
        setTimeout(() => {
            const centerSlide = document.querySelector('.slide-item[data-position="center"]');
            if (centerSlide) {
                const slideInfo = centerSlide.querySelector('.slide-info');
                slideInfo.style.animation = 'slideUpFromBottom 1s ease-out forwards';
            }
        }, 100);
    }
    
    setupEventListeners() {
        this.indicators.forEach((indicator, index) => {
            indicator.addEventListener('click', () => {
                if (!this.isTransitioning) {
                    this.goToSlide(index);
                }
            });
        });
        
        const gallery = document.querySelector('.slides-gallery');
        gallery.addEventListener('touchstart', (e) => {
            if (!this.isTransitioning) {
                this.touchStartX = e.touches[0].clientX;
            }
        }, { passive: true });
        
        gallery.addEventListener('touchend', (e) => {
            if (!this.isTransitioning) {
                this.touchEndX = e.changedTouches[0].clientX;
                this.handleSwipe();
            }
        }, { passive: true });
        
        document.addEventListener('keydown', (e) => {
            if (!this.isTransitioning) {
                if (e.key === 'ArrowLeft') {
                    this.previousSlide();
                } else if (e.key === 'ArrowRight') {
                    this.nextSlide();
                }
            }
        });
    }
    
    handleSwipe() {
        const threshold = 50;
        const diff = this.touchStartX - this.touchEndX;
        
        if (Math.abs(diff) > threshold) {
            if (diff > 0) {
                this.nextSlide();
            } else {
                this.previousSlide();
            }
        }
    }
    
    goToSlide(index) {
        if (index === this.currentSlide || this.isTransitioning) return;
        
        this.isTransitioning = true;
        
        const currentSlideInfo = this.slideItems[this.currentSlide].querySelector('.slide-info');
        if (currentSlideInfo) {
            currentSlideInfo.style.animation = 'none';
            currentSlideInfo.style.opacity = '0';
            currentSlideInfo.style.transform = 'translateY(40px)';
        }
        
        this.indicators[this.currentSlide]?.classList.remove('active');
        this.indicators[index]?.classList.add('active');
        
        this.currentSlide = index;
        
        this.animateSlideTransition();
        
        this.resetAutoSlide();
    }
    
    animateSlideTransition() {
        // Calculate left and right positions based on current slide
        const leftIndex = (this.currentSlide - 1 + this.totalSlides) % this.totalSlides;
        const rightIndex = (this.currentSlide + 1) % this.totalSlides;
        
        this.slideItems.forEach((slide, slideIndex) => {
            if (slideIndex === this.currentSlide) {
                slide.dataset.position = 'center';
                slide.style.display = 'block';
            } else if (slideIndex === leftIndex) {
                slide.dataset.position = 'left';
                slide.style.display = 'block';
            } else if (slideIndex === rightIndex) {
                slide.dataset.position = 'right';
                slide.style.display = 'block';
            } else {
                slide.dataset.position = 'hidden';
                slide.style.display = 'none';
            }
        });
        
        const newCenterSlide = this.slideItems[this.currentSlide];
        const slideInfo = newCenterSlide.querySelector('.slide-info');
        slideInfo.style.animation = 'slideUpFromBottom 1s ease-out forwards';
        
        setTimeout(() => {
            this.isTransitioning = false;
        }, 1200); // Match CSS transition duration
    }
    
    nextSlide() {
        const nextIndex = (this.currentSlide + 1) % this.totalSlides;
        this.goToSlide(nextIndex);
    }
    
    previousSlide() {
        const prevIndex = (this.currentSlide - 1 + this.totalSlides) % this.totalSlides;
        this.goToSlide(prevIndex);
    }
    
    startAutoSlide() {
        this.autoSlideInterval = setInterval(() => {
            if (!this.isTransitioning) {
                this.nextSlide();
            }
        }, 7000);
    }
    
    resetAutoSlide() {
        clearInterval(this.autoSlideInterval);
        this.startAutoSlide();
    }
}

document.addEventListener('DOMContentLoaded', () => {
    new HeroSlider();
});