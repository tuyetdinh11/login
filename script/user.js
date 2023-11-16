const userIcon = document.getElementById('userIcon');
const userOptions = document.getElementById('userOptions');

userIcon.addEventListener('click', function(event) {
    userOptions.classList.toggle('show');
    event.stopPropagation(); // Ngăn chặn sự kiện click từ lan ra bên ngoài userIcon
});

document.addEventListener('click', function(event) {
    if (!event.target.closest('.item')) {
        userOptions.classList.remove('show');
    }
});

// Ngăn chặn sự kiện click trên dropdown để không đóng dropdown
userOptions.addEventListener('click', function(event) {
    event.stopPropagation();
});
