<?php
include("koneksi.php");
?>

<?php
if (isset($_POST["update"])) {
    $Id = mysqli_real_escape_string($koneksi, $_POST["id_ep"]);
    $Nama = mysqli_real_escape_string($koneksi, $_POST["nilaiemas"]);
    $Deskripsi = mysqli_real_escape_string($koneksi, $_POST["nilaiperak"]);

    if (empty($Nama) || empty($Deskripsi) ) {

        if (empty($Nama)) {
            echo "<font color='red'>Nilai Emas masih belum diisi</font><br/>";
        }
        if (empty($Deskripsi)) {
            echo "<font color='red'>Nilai Perak masih belum diisi</font><br/>";
        }
        
    } else {
        //updating the table
        $result = mysqli_query(
            $koneksi,
            "UPDATE emasdanperak SET nilaiemas='$Nama', nilaiperak='$Deskripsi' WHERE id_ep=$Id"
        );
        header("Location: dataemas.php");
    }
}
?>
<?php
//getting id from url
$Id = $_GET['id_ep'];

//selecting data associated with this particular id
$result = mysqli_query($koneksi, "SELECT * FROM emasdanperak WHERE id_ep = '$Id'");
while ($res = mysqli_fetch_array($result)) {
    $Nama = $res['nilaiemas'];
    $Deskripsi = $res['nilaiperak'];
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="../style/admin.css">
    <title>Admin Page</title>
</head>

<body>
    <header>
        <nav class="nav flex-column ">
            <div>

                <h1 class="upper nav-link active" href="#"> <i class="fa fa-user" aria-hidden="true"></i> Admin</h1>
            </div>
            <a class="lower nav-link" href="pilihdata.php"><i class="fa fa-users" aria-hidden="true"></i> DATA</a>
            <a class="lower nav-link" href="../logout.php"><i class="fa fa-key" aria-hidden="true"></i> LOGOUT</a>
        </nav>
    </header>
    <section class="crud">
        <div class="container">
            <h2 class="mb-4 mt-4">Edit Emas dan Perak</h2>
            <form action="editep.php" method="post">
                <div class="form-group d-flex justify-content-center" style="flex-direction: column;">
                    <input type="text" class="form-control mt-2" name="nilaiemas" placeholder="Nilai Emas" value="<?php echo $Nama; ?>">
                    <input class="form-control mt-2" placeholder="Nilai Perak" name="nilaiperak" required style="height: 130px;" value=<?php echo $Deskripsi; ?>></textarea>
                    <input type="hidden" name="id_ep" value=<?php echo $_GET['id_ep']; ?>>
                    <button type="submit" class="btn btn-primary mt-2" name="update">UPDATE</button>
                </div>
            </form>
        </div>
    </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>