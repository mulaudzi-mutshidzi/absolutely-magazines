class FooterController {
    constructor() {
        this.footer = document.querySelector('.footer-section');
        this.copyrightText = document.getElementById('copyright-text');
        this.isVisible = false;
        this.scrollThreshold = 0;
        
        this.init();
    }
    
    init() {
        this.updateCopyrightYear();
        this.calculateScrollThreshold();
        this.setupScrollListener();
        this.setupResizeListener();
    }
    
    updateCopyrightYear() {
        const currentYear = new Date().getFullYear();
        this.copyrightText.textContent = `© Absolutely Magazine | ${currentYear}`;
    }
    
    calculateScrollThreshold() {
        const documentHeight = document.documentElement.scrollHeight;
        const windowHeight = window.innerHeight;
        const footerHeight = this.footer.offsetHeight;
        
        this.scrollThreshold = documentHeight - windowHeight - footerHeight;
    }
    
    setupScrollListener() {
        let ticking = false;
        
        window.addEventListener('scroll', () => {
            if (!ticking) {
                requestAnimationFrame(() => {
                    this.handleScroll();
                    ticking = false;
                });
                ticking = true;
            }
        });
    }
    
    setupResizeListener() {
        let resizeTimeout;
        
        window.addEventListener('resize', () => {
            clearTimeout(resizeTimeout);
            resizeTimeout = setTimeout(() => {
                this.calculateScrollThreshold();
            }, 150);
        });
    }
    
    handleScroll() {
        const scrollPosition = window.pageYOffset || document.documentElement.scrollTop;
        const shouldBeVisible = scrollPosition >= this.scrollThreshold;
        
        if (shouldBeVisible && !this.isVisible) {
            this.showFooter();
        } else if (!shouldBeVisible && this.isVisible) {
            this.hideFooter();
        }
    }
    
    showFooter() {
        this.footer.classList.add('visible');
        this.isVisible = true;
    }
    
    hideFooter() {
        this.footer.classList.remove('visible');
        this.isVisible = false;
    }
}

document.addEventListener('DOMContentLoaded', () => {
    new FooterController();
});