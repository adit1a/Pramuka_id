/* public/js/form.js */
document.addEventListener('DOMContentLoaded', function() {
    const togglePassword = document.querySelector('#togglePassword');
    const password = document.querySelector('#password');
    const eyeIcon = document.querySelector('#eyeIcon');

    // Pastikan elemennya ada dulu sebelum dipasang fungsi
    if (togglePassword) {
        togglePassword.addEventListener('click', function (e) {
            // Tukar tipe input: kalau password jadi text, kalau text jadi password
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            
            // Tukar ikon mata: fa-eye <=> fa-eye-slash
            eyeIcon.classList.toggle('fa-eye-slash');
        });
    }
});