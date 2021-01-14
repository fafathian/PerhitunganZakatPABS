<!DOCTYPE HTML>
<html>

<head>
    <title>PERHITUNGAN ZAKAT</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="../css/checkout.css" />
    <link rel="stylesheet" href="../css/dashboard.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/skel.min.js"></script>
    <script src="js/skel-panels.min.js"></script>
    <script src="js/init.js"></script>
    <noscript>
        <link rel="stylesheet" href="../css/skel-noscript.css" />
        <link rel="stylesheet" href="../css/style.css" />
        <link rel="stylesheet" href="../css/style-desktop.css" />
        <link rel="stylesheet" href="../css/css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/checkout.css" />

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
    <?php
    $koneksi = @mysqli_connect("localhost", "id15874198_fafathian", "g\)%/Y\#hxwj[}s9", "id15874198_zakat");
    ?>

    <!-- Header -->
    <div id="header-wrapper">

        <div id="header" class="container" style="height: 125px;">

            <div id="logo">
                <h1><a href="#">Perhitngan Zakat</a></h1>
            </div>
            <nav id="nav">
                <ul>
                    <li class="current_page_item"><a href="zakat.php">Hitung Zakat</a></li>
                    <li><a href="../logout.php">LOGOUT</a></li>
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
                    <a href="zakatfitrah.php" style="color:white; font-weight: bold; text-decoration: none;">Zakat Fitrah</a>
                    <a href="zakatprofesi.php" style="color:white; font-weight: bold; text-decoration: none;">Zakat Profesi</a>
                    <a href="emasdanperak.php" style="color:white; font-weight: bold; text-decoration: none;">Zakat Emas dan Perak</a>
                    <a href="zakatternak.php" style="color:white; font-weight: bold; text-decoration: none;">Zakat Ternak</a>
                </div>
            </section>
        </div>
    </section>

    <section class="content">
        <div class="container">
            <form action="emasdanperak.php" method="post">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="perhiasan" style="color: white;">Jenis Perhiasan :</label>
                            <div class="inpt selectContainer">
                                <select class="form-control" name="perhiasan">
                                    <option value="">Pilih jenis perhiasan</option>
                                    <option value="emas">Emas</option>
                                    <option value="perak">Perak</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="simpan" style="color: white;">Perhiasan yang dimiliki :</label>
                            <div class="inpt input-group">
                                <input type="number" class="inpt form-control" id="simpan" name="simpan">
                                <span class="input-group-addon" style="color: white;">Gram</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="simpan" style="color: white;">Perhiasan yang pakai :</label>
                            <div class="inpt input-group">
                                <input type="number" class="inpt form-control" id="pakai" name="pakai">
                                <span class="input-group-addon" style="color: white;">Gram</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="harga" style="color: white;">Harga perhiasan :</label>
                            <div class="inpt input-group">
                                <span class="input-group-addon" id="harga" style="color: white;">Rp. </span>
                                <select type="number" class="form-control" id="harga" name="harga" aria-describedby="harga">
                                    <?php
                                    $sql = mysqli_query($koneksi, "SELECT * FROM emasdanperak");
                                    while ($data = mysqli_fetch_array($sql)) {
                                    ?>
                                        <option value="<?= $data['nilaiemas'] ?>">
                                            <?= $data['nilaiemas'] ?></option>
                                        <option value="<?= $data['nilaiperak'] ?>">
                                            <?= $data['nilaiperak'] ?></option>

                                    <?php } ?>
                                </select>
                                <span class="input-group-addon" id="harga" style="color: white;">/gram </span>
                            </div>
                            <br>
                            <p style="color: white;">*yang atas harga emas, dan yang bawah harga perak</p>
                        </div>
                    </div>
                </div>
                <div class="hit form-group">
                    <input type="submit" class="btn_ btn btn-info" value="Hitung">
                </div>

            </form>
        </div>
        <?php
        error_reporting(0);
        $perhiasan = $_POST["perhiasan"];
        $simpan = $_POST["simpan"];
        $pakai = $_POST["pakai"];
        $harga = $_POST["harga"];

        $jumlah = $simpan - $pakai;

        if (empty($perhiasan)) {
            $ket = "<div class='alert alert-danger'>Mohon pilih <b>jenis perhiasan</b> !! </div>";
        } elseif (empty($simpan) || empty($harga)) {
            $ket = "<div class='alert alert-danger'>Jumlah perhiasan yg dimiliki dan harga perhiasan <b>tidak boleh kosong</b> !! </div>";
        } else {

            if ($perhiasan == "emas") {
                if ($jumlah >= 85) {
                    $zakat = ($jumlah * $harga) * 2.5 / 100;
                    $ket = "<div class='alert alert-info'>Zakat yang harus anda bayar senilai <b>Rp. " . $zakat . ",- </b></div>
                <br> <h6 style='color: white;'>*Anda bayar zakat jika sudah mencapai nisab 85 Gram Emas</h6>";
                } else {
                    $ket = "<div class='alert alert-info'><b> Anda Belum Wajib Bayar Zakat </b></div>
                <br> <h6 style='color: white;'>*Anda bayar zakat jika sudah mencapai nisab 85 Gram Emas</h6>";
                }
            } elseif ($perhiasan == "perak") {
                if ($jumlah >= 595) {
                    $zakat = ($jumlah * $harga) * 2.5 / 100;
                    $ket = "<div class='alert alert-info' >Zakat yang harus anda bayar senilai <b>Rp. " . $zakat . ",- </b></div>
                <br> <h6 style='color: white;'>Zakat dibayarkan jika mencapai haul 1 tahun</h6>";
                } else {
                    $ket = "<div class='alert alert-info'><b> Anda Belum Wajib Bayar Zakat </b></div>
                <br> <h6 style='color: white;'>Anda bayar zakat jika sudah mencapai nisab 595 Gram Perak</h6>";
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