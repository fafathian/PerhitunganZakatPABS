<?php

//melakukan koneksi ke database dengan variabel $host, $user dan $password
$koneksi=@mysqli_connect("localhost","id15874198_fafathian","g\)%/Y\#hxwj[}s9","id15874198_zakat");
if(!$koneksi){
    echo "Gagal melakukan koneksi <br/>:".mysqli_connect_error();
    exit();
    
}
?>