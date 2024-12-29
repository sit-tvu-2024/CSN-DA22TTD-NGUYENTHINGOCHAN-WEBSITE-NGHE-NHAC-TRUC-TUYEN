document.querySelector('form').addEventListener('submit', function (event) {
    event.preventDefault(); // Ngăn gửi form mặc định
    const username = document.querySelector('input[name="user_name"]').value.trim();
    const password = document.querySelector('input[name="user_password"]').value;

    let errorMsg = validateUsername(username) || validatePassword(password);

    if (errorMsg) {
        // Hiển thị thông báo lỗi
        Swal.fire({
            icon: 'error',
            title: 'Lỗi!',
            text: errorMsg,
            confirmButtonText: 'Thử lại'
        });
    } else {
        // Nếu không có lỗi, gửi form
        event.target.submit();
    }
});

// Hàm kiểm tra rỗng
function validateEmptyField(field, fieldName) {
    if (!field) {
        return `${fieldName} không được để trống.`;
    }
    return null;
}

// Hàm kiểm tra khoảng trắng
function validateWhitespace(field, fieldName) {
    if (field.trim().length === 0) {
        return `${fieldName} không được chứa toàn khoảng trắng.`;
    }
    return null;
}

// Hàm kiểm tra độ dài tối đa
function validateMaxLength(field, maxLength, fieldName) {
    if (field.length > maxLength) {
        return `${fieldName} không được vượt quá ${maxLength} ký tự.`;
    }
    return null;
}

// Hàm kiểm tra định dạng tên người dùng
function validateUsername(username) {
    const regex = /^[a-zA-Z0-9_]{3,50}$/; // Chỉ chấp nhận chữ cái, số, và dấu gạch dưới từ 3 đến 50 ký tự
    if (!username) {
        return "Tên người dùng không được để trống.";
    }
    if (!regex.test(username)) {
        return "Tên người dùng chỉ được chứa chữ cái, số, và dấu gạch dưới, dài từ 3-50 ký tự.";
    }
    return null;
}

// Hàm kiểm tra mật khẩu
function validatePassword(password) {
    if (!password) {
        return "Mật khẩu không được để trống.";
    }
    if (password.length < 6) {
        return "Mật khẩu phải có ít nhất 6 ký tự.";
    }
    return null;
}
