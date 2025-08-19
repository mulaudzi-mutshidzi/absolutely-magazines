document.addEventListener('DOMContentLoaded', () => {
    const signupForm = document.querySelector('.signup-form');
    
    if (signupForm) {
        signupForm.addEventListener('submit', (e) => {
            e.preventDefault();
            
            // Clear the form fields
            signupForm.reset();
            
            // For display purposes only
            console.log('Form submitted (display purpose only)');
        });
    }
    
    console.log('Signup section loaded');
});