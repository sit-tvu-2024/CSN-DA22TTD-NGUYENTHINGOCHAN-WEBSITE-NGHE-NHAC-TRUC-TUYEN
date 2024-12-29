<?php
session_start();
include('db.connect.php');
$msg = false;
if(isset($_POST['user_name'])){
    $user_name = $_POST['user_name'];
    $user_password = $_POST['user_password'];

    $query = "select * from my_user where user = '".$user_name."' AND password = '".$user_password."' limit 1";
    $result = mysqli_query($con, $query);
    if (mysqli_num_rows($result) == 1) {
        header('Location: welcome.php');
    } else {
        $msg = "Mật khẩu không đúng";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Dangnhap</title>
</head>
<body>
    <header>
        <div class="left_bx1">
            <div class="content">
                <form method="post">
                    <h2 align="center">Đăng nhập</h2>
                    <div class="card">
                        <label for="name">Tên đăng nhập</label>
                        <input type="text" name="user_name" placeholder="Nhập tên đăng nhập của bạn..." required>
                    </div>
                    <div class="card">
                        <label for="password">Mật khẩu</label>
                        <input type="password" name="user_password" placeholder="Nhập mật khẩu của bạn..." required>
                    </div>
                    <input type="submit" value="Đăng nhập" class="submit">
                    <div class="check">
                        <input type="checkbox" name="id"><span>Ghi nhớ tài khoản</span>
                    </div>
                    <p>Bạn chưa có tài khoản? <a href="signup.php">Đăng kí</a></p>
                </form>
            </div>
            <?php
    // Hiển thị thông báo lỗi nếu có
    if ($msg) {
        echo "<script>
            Swal.fire({
                icon: 'error',
                title: 'Lỗi!',
                text: '$msg',
                confirmButtonText: 'Thử lại'
            });
        </script>";
    }
    ?>
        </div>
        
    </header>
    <script src="dangnhap.js"></script>
</body>
</html>
