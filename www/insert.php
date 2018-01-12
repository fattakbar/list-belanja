<?php
 
include "db.php";

if(isset($_POST['insert']))
 {
    $kategori=$_POST['kategori'];
    $list=$_POST['list'];
    $harga=$_POST['harga'];
    $q=mysqli_query($con,"INSERT INTO `tbl_list` (`kategori`,`list`,`harga`) VALUES                                                        ('$kategori','$list','$harga')");
 
    if($q)
        echo "success";
    else
        echo "error";
 }
 
?>
