// Kiểm tra tên người dùng
function validateUsername(username) {
    const usernameRegex = /^[a-zA-Z\s]+$/; // Chỉ cho phép chữ cái và khoảng trắng
    if (!usernameRegex.test(username)) {
        return "Tên người dùng không được chứa số hoặc ký tự đặc biệt.";
    }
    return null;
}

// Kiểm tra email
function validateEmail(email) {
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; // Định dạng email cơ bản
    if (!emailRegex.test(email)) {
        return "Email không hợp lệ.";
    }
    return null;
}

// Kiểm tra mật khẩu
function validatePassword(password) {
    const passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).{8,}$/;
    if (!passwordRegex.test(password)) {
        return "Mật khẩu phải có ít nhất 8 ký tự, bao gồm chữ hoa, chữ thường, số và ký tự đặc biệt.";
    }
    return null;
}

// Kiểm tra mật khẩu nhập lại
function validateRePassword(password, rePassword) {
    if (password !== rePassword) {
        return "Mật khẩu nhập lại không khớp.";
    }
    return null;
}

// Hàm kiểm tra tổng hợp
function validateForm() {
    const username = document.querySelector('input[name="user_name"]').value.trim();
    const email = document.querySelector('input[name="user_email"]').value.trim();
    const password = document.querySelector('input[name="user_password"]').value;
    const rePassword = document.querySelector('input[name="user_re_password"]').value;

    let errorMsg = validateUsername(username) ||
                   validateEmail(email) ||
                   validatePassword(password) ||
                   validateRePassword(password, rePassword);

    if (errorMsg) {
        Swal.fire({
            icon: 'error',
            title: 'Lỗi!',
            text: errorMsg,
            confirmButtonText: 'Thử lại'
        });
        return false; // Ngăn gửi form
    }
    return true; // Cho phép gửi form
}

// Gắn sự kiện vào form
document.querySelector('form').addEventListener('submit', function(event) {
    if (!validateForm()) {
        event.preventDefault(); // Dừng sự kiện gửi form
    }
});



