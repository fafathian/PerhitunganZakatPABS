<!DOCTYPE HTML>
<html>

<head>
    <title>PERHITUNGAN ZAKAT</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800" rel="stylesheet"
        type="text/css" />
    <!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/skel.min.js"></script>
    <script src="js/skel-panels.min.js"></script>
    <script src="js/init.js"></script>
    <noscript>
        <link rel="stylesheet" href="css/skel-noscript.css" />
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/style-desktop.css" />
    </noscript>
    
</head>

<body class="homepage">

    <!-- Header -->
    <div id="header-wrapper">

        <div id="header" class="container">

            <div id="logo">
                <h1><a href="index.php">Perhitngan Zakat</a></h1>
            </div>
            <nav id="nav">
                <ul>
                    <li class="current_page_item"><a href="index.php">Home</a></li>
                    <li><a href="zakat/zakat2.php">Hitung Zakat</a></li>
                    <li><a href="login.php">Login</a></li>
                </ul>
            </nav>

        </div>
        <?php 
        if(isset($_GET['pesan'])){
            if($_GET['pesan']=="gagal"){
                echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
            }
        }
        ?>

        <div id="banner">
            <div class="container">
                <div class="row">
                    <section class="12u">
                        <header>
                            <h2>Zakat Kalkulator</h2>
                            <span class="byline">Mari Menghitung Zakat yang harus dikeluarkan.</span>
                        </header>
                        <a href="zakat/zakat2.php" class="button button-alt">Try now</a>
                    </section>
                </div>
            </div>
        </div>

    </div>

    <footer id="footer">
        <div class="inner">
            <ul class="copyright">
                <li>&copy; 2020 ZULFA FATHIAN YAHYA.</li>
            </ul>
        </div>
    </footer>


</body>

</html>