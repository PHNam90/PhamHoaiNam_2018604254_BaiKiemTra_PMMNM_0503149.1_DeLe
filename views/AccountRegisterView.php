<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="assets/frontend/RegisterForm.css" rel="stylesheet"/>
</head>
<body>
  <div class="login-page">
    <div class="form">
      <h1>Đăng ký tài khoản</h1>
      <?php if(isset($_GET["notify"])&&$_GET["notify"]=="exists"): ?>
        <p style="color:red;">Email đã tồn tại!</p>
      <?php else: ?>
        <p> Nếu bạn chưa có tài khoản, hãy đăng ký để có thể sử dụng chức năng khác.</p>
      <?php endif; ?>
      <form class="register-form" action="index.php?controller=account&action=registerPost" method="post">
        <input placeholder="Họ Tên" type="text" name="Ten" required/>
        <input placeholder="Email" type="text" name="Email" required/>
        <input placeholder="SDT" type="text" name="SDT"  required/>
        <input placeholder="Địa Chỉ" type="text" name="DiaChi" required/>
        <input placeholder="password" type="password" name="MatKhau" required/>
        <button>
          Tạo tài khoản
        </button>
        <p class="message">
          Bạn đã có tài khoản?
          <a href="index.php?controller=account&action=login">
            Đăng nhập
          </a>
        </p>
      </form>
      
    </div>
  </div>
</body>
</html>