<?php
include("koneksi.php");

$Id = $_GET['id_ep'];

$result = mysqli_query($koenksi, "DELETE FROM emasdanperak WHERE id_ep = $Id");

header("Location:dataemas.php");
