// signIn.js

document.addEventListener('DOMContentLoaded', function() {
    const createAccountLink = document.querySelector('.create-account-link a');
    const loginAccountLink = document.querySelector('.login-account-link a');
    const container = document.querySelector('.container'); 

    if (createAccountLink && container) {
        createAccountLink.addEventListener('click', function(e) {
            e.preventDefault(); 

            container.classList.add('fade-out');

            setTimeout(function() {
                window.location.href = createAccountLink.href; 
            }, 500); 
        });
    }

    if (loginAccountLink && container) {
        loginAccountLink.addEventListener('click', function(e) {
            e.preventDefault(); 

            container.classList.add('fade-out');

            setTimeout(function() {
                window.location.href =loginAccountLink.href; 
            }, 500); 
        });
    }
});

