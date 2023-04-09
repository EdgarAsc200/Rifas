<?php
$target_dir = "uploads/";
$uploadOk = 1;
$rifa= "Rifa1";
$target_file1 = $target_dir . basename($_FILES["fileToUpload1"]["name"]);
$imageFileType1 = strtolower(pathinfo($target_file1,PATHINFO_EXTENSION));
$img1 = $_FILES["fileToUpload1"]["name"];
// Check if image file is a actual image or fake image
echo $img1;
if (!empty($img1)) {

    agregarImg($target_file1,$imageFileType1,$uploadOk, "fileToUpload1", "_1", $rifa);
    $nameimg = "https://rifaseltapatio.com/dashboard/php/" . $target_dir . $rifa . "_1";
}


function agregarImg($target_file,$imageFileType,$uploadOk, $nameInput, $name, $rifa) {
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES[$nameInput]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }
    $dir = "uploads/" . $rifa . $name;
// Check if file already exists
    if (file_exists($dir)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

// Check file size
    if ($_FILES[$nameInput]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

// Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

// Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES[$nameInput]["tmp_name"], $dir)) {
            echo "The file ". htmlspecialchars( basename( $_FILES[$nameInput][$name])). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}
?>