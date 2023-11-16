function loginUser() {
    const username = document.querySelector("#loginForm input[name='username']").value;
    const password = document.querySelector("#loginForm input[name='password']").value;

    if (!username || !password) {
        // Kiểm tra xem các trường đã được điền đầy đủ hay không
        document.getElementById("login-result").innerHTML = "Vui lòng điền đầy đủ thông tin.";
        return;
    }

    // Lấy thông tin người dùng từ localStorage
    const storedUser = JSON.parse(localStorage.getItem(username));

    if (storedUser && storedUser.password === password) {
        // Kiểm tra xem người dùng có tồn tại và mật khẩu khớp không
        document.getElementById("login-result").innerHTML = "Đăng nhập thành công!";
        // Điều hướng đến trang chính sau khi đăng nhập thành công
        window.location.href = "index.html"; // Thay đổi URL tới trang chính của bạn
    } else {
        // Thông báo lỗi đăng nhập nếu thông tin không chính xác
        document.getElementById("login-result").innerHTML = "Tên người dùng hoặc mật khẩu không đúng.";
    }
}

document.getElementById("loginForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Ngăn chặn việc submit form mặc định
    loginUser(); // Gọi hàm loginUser để kiểm tra đăng nhập
});
