<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login - ระบบแจ้งซ่อม</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/login.css?v1">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/toastr/toastr.min.css">
</head>

<body>

    <div class="blur"></div>
    <div class="formContent blur"> <img src="<?php echo base_url() ?>assets/dist/img/avtar.png" class="avatarImg">
        <h2>ระบบแจ้งซ่อม</h2>
        <form action="<?php echo base_url() ?>Login/check_login" method="post">
            <label>ชื่อผู้ใช้</label>
            <input type="text" name="username"  tabIndex="1" required>
            <label>รหัสผ่าน</label>
            <input type="password" name="password" tabIndex="2" required>
            <input type="submit" name="login" id="login" tabIndex="3" value="เข้าสู่ระบบ">
            
        </form>
        <br>
        <br>
       <div class="signup"> RMC-Online Version 2.0.0 / 2022-05-06
       <br>
       เบราว์เซอร์ที่แนะนำ
       <br>
-Chrome เวอร์ชัน 45 ขึ้นไป
<br>
-Microsoft Edge Version 11 ขึ้นไป
<br>
-Safari เวอร์ชัน 9 ขึ้นไป
<br>
-Firefox เวอร์ชัน 38 ขึ้นไป
</div>
    </div>
   
</body>

<!--===============================================================================================-->	
	<script src="<?php echo base_url()?>/assets/login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="<?php echo base_url()?>assets/plugins/toastr/toastr.min.js"></script>
<?php
    if (isset($error)) {
        echo $error;
    }

    ?>
</html>
<script src="<?php echo base_url()?>/assets/login/js/main.js"></script>
<script type="text/javascript">
$(document).on('keypress', 'input,select', function (e) {
    if (e.which == 13) {
        e.preventDefault();
        var $next = $('[tabIndex=' + (+this.tabIndex + 1) + ']');
        console.log($next.length);
        if (!$next.length) {
       $next = $('[tabIndex=1]');        }
        $next.focus() .click();
    }
});
</script>
  