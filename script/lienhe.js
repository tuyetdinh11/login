function validateForm() {
    var nameInput = document.getElementById('name');
    var emailInput = document.getElementById('email');
    var phoneInput = document.getElementById('phone');
    var messageInput = document.getElementById('message');

    var name = nameInput.value;
    var email = emailInput.value;
    var phone = phoneInput.value;
    var message = messageInput.value;

    if (!name || !email || !phone || !message) {
        alert('Vui lòng điền đầy đủ thông tin.');
        return false;
    }

    if (!validateEmail(email)) {
        alert('Email không hợp lệ. Vui lòng nhập địa chỉ email có định dạng "@gmail.com".');
        return false;
    }

    if (!validatePhone(phone)) {
        alert('Số điện thoại không hợp lệ. Vui lòng nhập số điện thoại có đúng định dạng.');
        return false;
    }

    // Thông báo đã gửi
    alert('Đã gửi thành công!');

    // Làm trống các ô điền
    nameInput.value = '';
    emailInput.value = '';
    phoneInput.value = '';
    messageInput.value = '';

    return true;
}

function validateEmail(email) {
    var emailRegex = /\S+@\S+\.\S+/;
    return emailRegex.test(email) && email.includes('@gmail.com');
}

function validatePhone(phone) {
    // Kiểm tra số điện thoại có chứa ký tự không phải số
    if (!/^\d+$/.test(phone)) {
        return false;
    }

    // Kiểm tra số điện thoại có ít nhất 10 số và bắt đầu bằng số 0
    return phone.length >= 10 && phone.startsWith('0');
}