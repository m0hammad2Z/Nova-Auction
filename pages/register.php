<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>
    <link rel="stylesheet" href="/Nova-Auction/css/styles.css">
    <link rel="stylesheet" href="/Nova-Auction/css/register.css">
    <script src="/Nova-Auction/js/cookies.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
     <nav class="main-nav">
        <div class="navbar">
            <div class="logo">
                <a href="/Nova-Auction/">
                    <h1>N<span style="color: var(--color);">O</span>VA</h1>
                </a>
            </div>
            <div class="nav-links">
                <a href="/Nova-Auction/">Home</a>
                <a href="/Nova-Auction/pages/products.html">Products</a>
                <a href="/Nova-Auction/pages/about.html">About</a>
            </div>
            <div class="nav-icons">
                <a id="user-icon" href="/Nova-Auction/pages/products.html">
                    <i class="fas fa-search"></i>
                </a>
                <a id="search-icon" href="/Nova-Auction/pages/register.html">
                    <i class="fas fa-user-alt"></i>
                </a>
                <button name="sell-button" id="sell-button" class="button" style="display: block">Sell</button>
            </div>
        </div>
    </nav>


    <div class="main">
        <div class="left">
            <h1>Log in</h1>
            <form action="/Nova-Auction/pages/login.php" method="post">
                <label for="Email">Email</label><input type="email" name="email" placeholder="example@example.exa" required>
                <label for="password">Password</label><input type="password" name="pass" required>
                <div><input type="checkbox" name="remember_me"> <label for="Email">Remember me</label></div>
                
                <button class="button" type="submit">Log in</button>
            </form>
            <a href="" >Lost your password?</a>
        </div>

        <div class="right">
            <h1>Register</h1>
            <form  method="post">
                <label for="Email">Full Name</label><input type="text" name="fn" placeholder="First Name" required>
                <input type="text" name="ln" placeholder="Last Name" required>
                <label for="Email">Email</label><input name="email" type="email" placeholder="example@example.exa" required>
                <label for="password">Password</label><input name="pass" type="password"  required>
                <label for="tel">Phone number</label><input name="tele" type="tel" placeholder="0712345678" required>
                <button class="button" name="register_button" type="submit">Sign up</button>
            </form>
            <?php
                if(isset($_POST['register_button'])) {
                    require "../lib.php";
                    extract($_POST);
                    if(count(Database("select email from user_info where email = '$email'",1)) == 0
                    ||
                    count(Database("select phonenumber from user_info where phonenumber = '$tele'",1))==0)
                    {
                        Database("INSERT INTO user_info VALUES(default,'$fn','$ln','$email','$pass','$tele')",0);
                    }else{
                        echo '<span class="register_error">you are not welcome</span>';
                    }
            }
            ?>
            
        </div>
    </div>


    <footer class="footer">
        <p>Copyright &copy; 2022 Nova Auction | Design By Humble Ghost Team</p>
    </footer>
</body>
</html>