<?php
    if(isset($_POST['upload'])){
        include "database.php";
        $tgf = "files/".basename($_FILES['apk']['name']);
        $tgi = "files/".basename($_FILES['img']['name']);
        $t = $_POST['title'];
        $d = $_POST['desc'];
        $f = $_FILES['apk']['name'];
        $i = $_FILES['img']['name'];
        $sql = "INSERT INTO `apkfile`(`title`, `desc`, `apk`, `img`) VALUES ('$t','$d','$f','$i')";
        // $sql = "INSERT INTO apkfile  VALUES('$t','$d','$f','$i')";
        mysqli_query($connection,$sql);
        if( move_uploaded_file($_FILES['apk']['tmp_name'],$tgf) && move_uploaded_file($_FILES['img']['tmp_name'],$tgi)){
            header('Location: ../../action.php?pages=home');
        }
        else{
            echo "Error Uploading!";
        }
    }
