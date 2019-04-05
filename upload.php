<?php
$target_dir = "uploads/";
$uploadOk = 1;


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['sbmt3'])){
    $target_file = $target_dir . basename($_FILES["f"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $check = getimagesize($_FILES["f"]["tmp_name"]);
    if($check == false) {
        echo '<div class="alert alert-danger al_d" align="center"><strong>Error!</strong> File is not an image.</div>';
        $uploadOk = 0;
    }else if (file_exists($target_file)) {
        echo '<div class="alert alert-danger al_d" align="center"><strong>Error!</strong> File already exists.</div>';
        $uploadOk = 0;
    }else if ($_FILES["f"]["size"] > 500000) {
        echo '<div class="alert alert-danger al_d" align="center"><strong>Error!</strong> File is over than 500kb.</div>';
        $uploadOk = 0;
    }else if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif"){
        echo '<div class="alert alert-danger al_d" align="center"><strong>Error!</strong> Only JPG, JPEG, PNG & GIF files are allowed.</div>';
        $uploadOk = 0;
    }else if ($uploadOk == 0) {
        echo '<div class="alert alert-danger al_d" align="center"><strong>Error!</strong> Your file was not uploaded.</div>';
    }else {
        if (move_uploaded_file($_FILES["f"]["tmp_name"], $target_file)) {
            echo '<div class="alert alert-success al_s" align="center">The file '. basename( $_FILES["f"]["name"]). ' has been uploaded.</div>';
        } else {
            echo '<div class="alert alert-danger al_d" align="center"><strong>Error!</strong> There was an error uploading your file.</div>';
        }
    }
}

?>