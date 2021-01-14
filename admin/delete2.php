<?php
include("koneksi.php");

$Id = $_GET['id'];

$result = mysqli_query($koenksi, "DELETE FROM profesi WHERE id = $Id");

header("Location:databeras.php");
