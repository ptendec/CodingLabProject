<header>
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-2">
                <a href="Главная.php"> <img src="images/a8ac8144d3464d1b9cbdbf9f4adfbeaa.png" class="u-logo-image u-logo-image-1" width="80%"></a>
            </div>
            <div class="col-lg-6">
                <a style="color: #000;" class="headerLinks" href="">About Us</a>
                <a style="color: #000;" class="headerLinks" href="attractions.php">Attractions</a>
                <a style="color: #000;" class="headerLinks" href="">Contact Us</a>

            </div>
            <div class="col-lg-2">
                <?php
                    if (isset($_SESSION['user_id'])) {
                        echo '<p style="font-size: 20px;">' . $_SESSION['fullname'] . '</p>
                        <a style="color: #000;" style="margin-top: 0px;"  href="desired_places.php">Desired Places</a>
                        <a href="log_out.php">Log Out</a>';
                    }
                    else{
                        echo '<a style="color: #000;" class="headerLinks" href="login.php">Sign In</a>
                <a style="color: #000;" class="headerLinks" href="signup.php">Sign Up</a>';
                    }
                ?>

            </div>
        </div>
    </div>
</header>