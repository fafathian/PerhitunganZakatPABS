<!DOCTYPE HTML>
<html>

<head>
    <title>PERHITUNGAN ZAKAT</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800" rel="stylesheet" type="text/css" />
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="css/checkout.css" />
    <link rel="stylesheet" href="css/login.css" />
    <!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/skel.min.js"></script>
    <script src="js/skel-panels.min.js"></script>
    <script src="js/init.js"></script>
    <script src="js/login.js"></script>
    <noscript>
        <link rel="stylesheet" href="css/skel-noscript.css" />
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/style-desktop.css" />
        <link rel="stylesheet" href="css/checkout.css" />

    </noscript>
    <style>
        form {
            position: relative;
            width: 360px;
            height: 350px;
            margin: 50px auto;
            text-align: center;
            background: #ecf0f1;
            margin-left: auto;
            margin-right: auto;
            padding: 20px;
            -webkit-border-radius: 20px 0 0 0;
            -moz-border-radius: 20px 0 0 0;
            border-radius: 20px 0 0 0;
            -webkit-box-shadow: 0px 1px 0px #ad392d, inset 0px 1px 0px white;
            -moz-box-shadow: 0px 1px 0px #ad392d, inset 0px 1px 0px white;
            box-shadow: 0px 1px 0px #ad392d, inset 0px 1px 0px white;
            box-shadow: 20px 20px 20px;
        }
    </style>
</head>

<body>

    <div id="header-wrapper">

        <div id="header" class="container" style="height: 3;">

            <div id="logo">
                <h1><a href="index.php">Perhitngan Zakat</a></h1>

            </div>

            <nav id="nav">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="zakat/zakat2.php">Hitung Zakat</a></li>
                    <li class="current_page_item"><a href="login.php">Login</a></li>
                </ul>
            </nav>
        </div>

    </div>

    <?php
    if (isset($_GET['pesan'])) {
        if ($_GET['pesan'] == "gagal") {
            echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
        }
    }
    ?>

    <form style="margin-left: auto; margin-right: auto; margin-top: 100px; margin-bottom: 200px; " action="cek_login.php" method="post">
        <h2> LOGIN </h2>
        <input class="name" type="text" placeholder="Enter Username" name="username" required="required" />
        <input class="pw" type="password" placeholder="Enter Password" name="password" required="required" />
        <a href="register.php">Register Now!</a>
        <input class="button" type="submit" value="LOGIN" />
    </form>

    <footer style="height: auto; color: rgba(255, 255, 255, 0.75);">
        <div class="inner">
            <ul class="copyright">
                <li>&copy; 2020 ZULFA FATHIAN YAHYA.</li>
            </ul>
        </div>
    </footer>


</body>

</html>