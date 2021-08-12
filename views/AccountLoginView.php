<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>
        Document
    </title>
</meta>
</meta>
<link href="assets/frontend/LoginForm.css" rel="stylesheet"/>
<script type="text/javascript">
    $('.message a').click(function(){
        $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
    });
</script>
</head>
<body>
    <div class="login-page">
        <div class="form">
            <h3>Đăng nhập tài khoản</h3>
            <?php if(isset($_GET["notify"])&&$_GET["notify"]=="success"): ?>
              <p style="color:red;">Đăng ký thành công</p>
          <?php else: ?>
              <p>Nếu bạn có tài khoản xin vui lòng đăng nhập</p>
          <?php endif; ?>
          <form class="login-form" action="index.php?controller=account&action=loginPost" method="post">
            <input name="Email" placeholder="email" type="text"/>
            <input name="MatKhau" placeholder="Mật khẩu" type="password"/>
            <button>
                Đăng nhập
            </button>
            <p class="message">
                Bạn chưa đăng ký?
                <a href="index.php?controller=account&action=register">
                    Tạo tài khoản
                </a>
            </p>
        </form>
    </div>
</div>
</body>
</html>