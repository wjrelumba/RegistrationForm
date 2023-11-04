document.addEventListener('DOMContentLoaded', function() {
    const showLoginButton = document.getElementById('showLogin');
    const loginContainer = document.getElementById('loginContainer');

    showLoginButton.addEventListener('click', function() {
        loginContainer.classList.toggle('hidden');
    });
});
