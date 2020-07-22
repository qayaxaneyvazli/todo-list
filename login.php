<?php require 'system/init.php'; ?>
<?php require 'User.php'; ?>
<?php if (post('sendlogin')) {
    $name = post('login') ?? null;
    $password = post('password') ?? null;
    $check = User::read($name, $password);

    if ($check) {

        $_SESSION['user'] = $check['user_name'];
        header('Location:index.php');

         
    } else {
        header('Location:login.php');
    }
}
?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="public/css/login.css">
<!------ Include the above in your HEAD tag ---------->

<div class="wrapper fadeInDown">
    <div id="formContent">
        <!-- Tabs Titles -->

        <!-- Icon -->
        <div class="fadeIn first">

        </div>

        <!-- Login Form -->
        <form action="" method="post">
            <input type="text" id="login" class="fadeIn second" name="login" placeholder="Ad">
            <input type="text" id="password" class="fadeIn third" name="password" placeholder="Parol">

            <input type="hidden" name="sendlogin" class="fadeIn fourth" value="1">
            <button type="submit" class="btn btn-success">Daxil ol</button>
        </form>

        <!-- Remind Passowrd -->
        <div id="formFooter">
            <a class="underlineHover" href="#">Forgot Password?</a>
        </div>

    </div>
</div>