document.addEventListener('DOMContentLoaded', () => {
    const signupForm = document.querySelector('.signup-form');
    
    if (signupForm) {
        signupForm.addEventListener('submit', (e) => {
            e.preventDefault();
            
            // Clear the form fields
            signupForm.reset();
            
            // For demo purposes only - in a real implementation, you would handle form submission here
            console.log('Form submitted (demo only - not actually sent)');
        });
    }
    
    console.log('Signup section loaded');
});