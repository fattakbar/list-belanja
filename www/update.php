<?php
 
include "db.php";
 
if(isset($_POST['update'])){
    $id=$_POST['id'];
    $kategori=$_POST['kategori'];
    $list=$_POST['list'];
    $harga=$_POST['harga'];
    $q=mysqli_query($con,"UPDATE `tbl_list` SET               `kategori`='$kategori',`list`='$list',`harga`='$harga' where `id`='$id'");
 
    if($q)
        echo "success";
    else
        echo "error";
}

?>
