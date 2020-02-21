<?php
$message="";
require '../functionsUsers.php';
include '../partials/header.php';

// include '../partials/menu.php';

if($_SERVER['REQUEST_METHOD'] === 'POST')
{
    connect($_POST['Login'], $message, $bdd);
}

?>

<div class="d-flex justify-content-center h-100">
    <div id="login-card" class="card">
        <div id="login-card-header" class="card-header">
            <h3>Sign In</h3>
            <div class="d-flex justify-content-end social_icon">
                <span><i class="fab fa-facebook-square"></i></span>
                <span><i class="fab fa-google-plus-square"></i></span>
                <span><i class="fab fa-twitter-square"></i></span>
            </div>
        </div>

      

        <div class="card-body">

            <form action="" method="POST">
                <div class="input-group form-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                    </div>
                    <input type="text" name="username" class="form-control" placeholder="username" required>
                    
                </div>
                <div class="input-group form-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-key"></i></span>
                    </div>
                    <input type="password" name="passwd" class="form-control" placeholder="password" required>
                </div>
                <div class="row align-items-center remember">
                    <input type="checkbox">Remember Me
                </div>
                <div class="form-group">
                <?php
                if(isset($message))
                {
                    echo '<label class="text-danger text-center">'.$message.'</label>';
                }
            ?>
                    <input type="submit" name="Login" value="Login" class="btn float-right login_btn">
                </div>
            </form>
        </div>
        <div class="card-footer">
            <div class="d-flex justify-content-center links">
                Don't have an account?<a href="register.php?page=register">Sign Up</a>
            </div>
            <div class="d-flex justify-content-center">
                <a href="#">Forgot your password?</a>
            </div>
        </div>
    </div>
</div>

<?php

var_dump($_SESSION);

include '../partials/footer.php';