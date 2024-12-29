<?php
session_start();
include('db.connect.php');
$msg = false;
if($_SERVER['REQUEST_METHOD']== 'POST'){
    $user_name = $_POST['user_name'];
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];
    $user_re_password = $_POST['user_re_password'];

    if(!empty($user_name) && !empty($user_email) && !empty($user_password) && !is_numeric($user_name)){
        if($user_password === $user_re_password){
            $query = "insert into my_user (user, email, password) VALUES ('$user_name', '$user_email', '$user_password')";
            mysqli_query($con, $query);
            header("Location: index.php");
        }else{
            $msg = "Mật khẩu không đúng";
        }
    }
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="signup.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Dangky</title>
</head>
<body>
    <header>
        <div class="left_bx1">
            <div class="content">
                <form method="post">
                    <h2 align="center">Đăng kí</h2>
                    <div class="card">
                        <label for="name">Tên người dùng</label>
                        <input type="text" name="user_name" placeholder="Nhập tên của bạn..." required>
                    </div>
                    <div class="card">
                        <label for="email">Email</label>
                        <input type="email" name="user_email" placeholder="Nhập email của bạn..." required>
                    </div>
                    <div class="card">
                        <label for="password">Mật khẩu</label>
                        <input type="password" name="user_password" placeholder="Nhập mật khẩu của bạn..." required>
                    </div>
                    <div class="card">
                        <label for="re-password">Nhập lại mật khẩu</label>
                        <input type="password" name="user_re_password" placeholder="Nhập lại mật khẩu ..." required>
                    </div>
                    <input type="submit" value="Đăng kí" class="submit">
                    <div class="check">
                        <input type="checkbox" name="id"><span>Ghi nhớ tài khoản</span>
                    </div>
                    <p>Bạn có tài khoản? <a href="index.php">Đăng nhập</a></p>
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
    <script src="signup.js"></script> 
</body>
</html>
