<!DOCTYPE HTML>
<html>

<head>
    <title>PERHITUNGAN ZAKAT</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/checkout.css" />
    <link rel="stylesheet" href="css/dashboard.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/skel.min.js"></script>
    <script src="js/skel-panels.min.js"></script>
    <script src="js/init.js"></script>
    <noscript>
        <link rel="stylesheet" href="css/skel-noscript.css" />
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/style-desktop.css" />
        <link rel="stylesheet" href="css/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/checkout.css" />

    </noscript>
    <style>
        .nav {
            background-color: rgb(36, 57, 73) !important;
            height: 54px;
        }

        .upper {
            color: white;
            margin-top: -4px;
            text-transform: uppercase;
            font-size: 34px;
        }

        .lower {
            color: white;
            text-transform: uppercase;
            margin-top: 4px;
            margin-right: -24px;
            margin-left: -24px;
        }
    </style>
</head>

<body>

    <!-- Header -->
    <div id="header-wrapper">

        <div id="header" class="container" style="height: 125px;">

            <div id="logo">
                <h1><a href="#">Perhitngan Zakat</a></h1>
            </div>
            <nav id="nav">
                <ul>
                    <li><a href="../index.php">Home</a></li>
                    <li class="current_page_item"><a href="zakat.php">Hitung Zakat</a></li>
                    <li><a href="../login.php">LOGIN</a></li>
                </ul>
            </nav>

        </div>
    </div>


    <section class="side">
        <div class="sidebar" style="background-color: #1E2832; margin-top: 0px;">
            <div class="upper-sidebar">
                <h3 class="judul" style="margin-top: 100px;">Hitung Zakat</h3>

            </div>
            <section class="isi-nav" style="margin-top: 0px;">
                <div class="navigation">
                    <a href="zakatfit.php" style="color:white; font-weight: bold; text-decoration: none;">Zakat Fitrah</a>
                    <a href="zakatpro.php" style="color:white; font-weight: bold; text-decoration: none;">Zakat Profesi</a>
                    <a href="zakatep.php" style="color:white; font-weight: bold; text-decoration: none;">Zakat Emas dan Perak</a>
                    <a href="zakathewan.php" style="color:white; font-weight: bold; text-decoration: none;">Zakat Ternak</a>
                </div>
            </section>
        </div>
    </section>

    <section class="content">
        <div class="container">
            <form action="zakathewan.php" method="post">
                <div class="form-group">
                    <label for="jenis" style="color: white;">Pilih jenis hewan ternak :</label>
                    <div class="inpt selectContainer">
                        <select class="form-control" name="jenis">
                            <option value="">Pilih jenis hewan</option>
                            <option value="unta">Unta</option>
                            <option value="sapi">Sapi atau Kerbau</option>
                            <option value="kambing">Kambing atau domba</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="jumlah" style="color: white;">Jumlah hewan ternak :</label>
                    <div class="inpt input-group">
                        <input type="number" class="form-control" id="jumlah" name="jumlah" aria-describedby="jumlah">
                        <span class="input-group-addon" id="jumlah" style="color: white;"> Ekor</span>
                    </div>
                </div>

                <div class="hit form-group">
                    <input type="submit" class="btn_ btn btn-info" value="Hitung">
                </div>

            </form>
        </div>
        <?php
        error_reporting(0);

        $jenis = $_POST["jenis"];
        $jumlah = $_POST["jumlah"];


        if (empty($jenis)) {
            $ket = "<div class='alert alert-danger'>Mohon pilih <b>jenis hewan ternak</b> !! </div>";
        } elseif (empty($jumlah)) {
            $ket = "<div class='alert alert-danger'>Jumlah Hewan <b>tidak boleh kosong</b> !! </div>";
        } else {

            if ($jenis == "unta") {
                if (($jumlah >= 5) && ($jumlah <= 9)) {
                    $ket = "<div class='alert alert-info'>Zakat yang harus anda bayar sebanyak <b> 1 ekor KAMBING/DOMBA </b> ";
                } elseif (($jumlah >= 10) && ($jumlah <= 14)) {
                    $ket = "<div class='alert alert-info'>Zakat yang harus anda bayar sebanyak <b> 2 ekor KAMBING/DOMBA </b> ";
                } elseif (($jumlah >= 15) && ($jumlah <= 19)) {
                    $ket = "<div class='alert alert-info'>Zakat yang harus anda bayar sebanyak <b> 3 ekor KAMBING/DOMBA </b> ";
                } elseif (($jumlah >= 20) && ($jumlah <= 24)) {
                    $ket = "<div class='alert alert-info'>Zakat yang harus anda bayar sebanyak <b> 4 ekor KAMBING/DOMBA </b> ";
                } elseif (($jumlah >= 25) && ($jumlah <= 35)) {
                    $ket = "<div class='alert alert-info'>Zakat yang harus anda bayar sebanyak <b> 1 ekor UNTA BETINA 1 tahun </b> ";
                } elseif (($jumlah >= 36) && ($jumlah <= 45)) {
                    $ket = "<div class='alert alert-info'>Zakat yang harus anda bayar sebanyak <b> 1 ekor UNTA BETINA 2 tahun </b> ";
                } elseif (($jumlah >= 46) && ($jumlah <= 60)) {
                    $ket = "<div class='alert alert-info'>Zakat yang harus anda bayar sebanyak <b> 1 ekor UNTA BETINA 3 tahun </b> ";
                } elseif (($jumlah >= 61) && ($jumlah <= 75)) {
                    $ket = "<div class='alert alert-info'>Zakat yang harus anda bayar sebanyak <b> 1 ekor UNTA BETINA 4 tahun </b> ";
                } elseif (($jumlah >= 76) && ($jumlah <= 90)) {
                    $ket = "<div class='alert alert-info'>Zakat yang harus anda bayar sebanyak <b> 2 ekor UNTA BETINA 2 tahun </b> ";
                } elseif (($jumlah >= 91) && ($jumlah <= 120)) {
                    $ket = "<div class='alert alert-info'>Zakat yang harus anda bayar sebanyak <b> 2 ekor UNTA BETINA 3 tahun </b> ";
                } elseif ($jumlah >= 121) {
                    $ket = "<div class='alert alert-info'>Jika <b> LEBIH DARI 120 </b>, maka setiap <b>tambahan 50 Unta</b> seekor UNTA 3 tahun dan <b>tambahan 40 unta</b>  seekor UNTA 2 tahun </b>";
                } else {
                    $ket = "<div class='alert alert-info'><b> Anda Belum Wajib Bayar Zakat </b></div>
              <br>*Anda wajib bayar zakat jika memiliki 5 atau lebih UNTA";
                }
            } elseif ($jenis == "sapi") {
                if (($jumlah >= 30) && ($jumlah <= 39)) {
                    $ket = "<div class='alert alert-info'>Zakat yang harus anda bayar sebanyak <b> 1 ekor ANAK SAPI </b></div> ";
                } elseif (($jumlah >= 40) && ($jumlah <= 59)) {
                    $ket = "<div class='alert alert-info'>Zakat yang harus anda bayar sebanyak <b> 1 ekor SAPI 1 tahun</b> </div

                  > ";
                } elseif (($jumlah >= 60) && ($jumlah <= 69)) {
                    $ket = "<div class='alert alert-info'>Zakat yang harus anda bayar sebanyak <b> 1 ekor SAPI 1 tahun </b></div>";
                } elseif (($jumlah >= 70) && ($jumlah <= 79)) {
                    $ket = "<div class='alert alert-info'>Zakat yang harus anda bayar sebanyak <b> 2 ekor ANAK SAPI</b> </div>";
                } elseif (($jumlah >= 80) && ($jumlah <= 89)) {
                    $ket = "<div class='alert alert-info'>Zakat yang harus anda bayar sebanyak <b> 1 ekor ANAK SAPI</b> dan <b> 1 ekor SAPI 2 tahun </b></div> ";
                } elseif (($jumlah >= 90) && ($jumlah <= 99)) {
                    $ket = "<div class='alert alert-info'>Zakat yang harus anda bayar sebanyak <b> 2 ekor SAPI 2 tahun </b></div> ";
                } elseif (($jumlah >= 100) && ($jumlah <= 109)) {
                    $ket = "<div class='alert alert-info'>Zakat yang harus anda bayar sebanyak <b> 3 ekor ANAK SAPI</b></div> ";
                } elseif (($jumlah >= 110) && ($jumlah <= 119)) {
                    $ket = "<div class='alert alert-info'>Zakat yang harus anda bayar sebanyak <b> 2 ekor ANAK SAPI</b> dan <b> 1 ekor SAPI 2 tahun </b></div> ";
                } elseif ($jumlah >= 120) {
                    $ket = "<div class='alert alert-info'>Jika <b>LEBIH DARI 120</b>, maka setiap <b> pertambahan 30 ekor </b> seekor ANAK SAPI dan <b>pertambahan 40 ekor </b> seekor SAPI usia 2 tahun</div> ";
                } else {
                    $ket = "<div class='alert alert-info'><b> Anda Belum Wajib Bayar Zakat </b></div>
                <br>*Anda wajib bayar zakat jika memiliki 30 atau lebih SAPI";
                }
            } elseif ($jenis == "kambing") {
                if (($jumlah >= 40) && ($jumlah <= 120)) {
                    $ket = "<div class='alert alert-info'>Zakat yang harus anda bayar sebanyak <b> 1 ekor KAMBING/DOMBA </b></div> ";
                } elseif (($jumlah >= 121) && ($jumlah <= 200)) {
                    $ket = "<div class='alert alert-info'>Zakat yang harus anda bayar sebanyak <b> 2 ekor KAMBING/DOMBA</b> </div

                  > ";
                } elseif (($jumlah >= 201) && ($jumlah <= 300)) {
                    $ket = "<div class='alert alert-info'>Zakat yang harus anda bayar sebanyak <b> 3 ekor KAMBING/DOMBA</b> </div

                  > ";
                } elseif ($jumlah >= 301) {
                    $zakat = $jumlah / 100;
                    $ket = "<div class='alert alert-info'>Zakat yang harus anda bayar sebanyak <b>" . floor($zakat) . " ekor KAMBING/DOMBA</b> </div>";
                } else {
                    $ket = "<div class='alert alert-info'><b> Anda Belum Wajib Bayar Zakat </b></div>
                  <br>*Anda wajib bayar zakat jika memiliki 40 atau lebih KAMBING/DOMBA";
                }
            }
        }
        ?>

        <div class="container">
            <div> <?php echo $ket; ?> </div>
        </div>
    </section>


</body>

</html>