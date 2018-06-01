<html>
<head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1" name="viewport">

    <meta name="Description" content="Facesmash - Sign up now!">
    <meta name="Keywords" content="Facesmash,social,network,networking,chat,upload,pictures,media,picture,video,videos">

    <title>Login | Facesmash</title>
    <link rel="icon" href="https://www.facesmash.co.uk/logo.png" type="image/png">

    <meta charset='UTF-8'>
    <meta name="viewport" content="user-scalable=no,initial-scale=1,maximum-scale=1">
    <meta property="og:url" content="https://www.facesmash.co.uk">
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="Login | Facesmash">
    <meta property="og:description" content="Facesmash | Sign up now!">
    <meta property="og:image" content="https://www.facesmash.co.uk/fbbimage.png">
    <meta name="theme-color" content="#ffffff">
    <meta content="Casper Round" name="author">

    <link href="{{ URL::to("assets/css/bootstrap.min.css") }}" rel="stylesheet">
    <link href="{{ URL::to("assets/css/owl.carousel.css") }}" rel="stylesheet">
    <link href="{{ URL::to("assets/css/owl.theme.css") }}" rel="stylesheet">
    <link href="{{ URL::to("assets/css/magnific-popup.css") }}" rel="stylesheet">
    <link href="{{ URL::to("assets/css/style.css") }}" rel="stylesheet">
    <link href="{{ URL::to("assets/css/responsive.css") }}" rel="stylesheet">


    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
</head>
<body>

<style>
    input {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        outline: 0;
        border: 1px solid rgba(255, 255, 255, 0.4);
        background-color: rgba(255, 255, 255, 0.2);
        width: 250px;
        border-radius: 3px;
        padding: 10px 15px;
        margin: 0 auto 10px auto;
        display: block;
        text-align: center;
        font-size: 18px;
        color: white;
        -webkit-transition-duration: 0.25s;
        transition-duration: 0.25s;
        font-weight: 300;
    }
</style>

<center>
    <img style="height:25%;" src="{{ URL::to("assets/img/logo_back.png") }}"/>

<form action="" method="POST">
    <label>Email</label>
    <input type="text" name="email" class="username" required>

    <label>Password</label>
    <input type="password" name="password" required>

    <input type="submit" name="login" value="Login" class="button">

    <a href="register.php"><p class="button_side">Or Register</p></a>
</form>

    <a href="discover.php">
        <input type="submit" name="login" value="Discover?" class="button">
    </a>
</center>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="{{ URL::to("assets/js/bootstrap.min.js") }}"></script>
</body>

</html>