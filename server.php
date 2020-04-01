<?php
include_once('database.php');
//Initialization
$title = "";
$address = "";
$city = "";
$postcode = "";
$area = "";
$price = "";
$photo = "";
$type = "";
$descrp = "";
$errors = array();
$db = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);

// REGISTER USER
if (isset($_POST['reg_house'])) {
    // receive all input values from the form
    session_start();
    $title = mysqli_real_escape_string($db, $_POST['title']);
    $address = mysqli_real_escape_string($db, $_POST['address']);
    $city = mysqli_real_escape_string($db, $_POST['city']);
    $postcode = mysqli_real_escape_string($db, $_POST['postcode']);
    $area = mysqli_real_escape_string($db, $_POST['area']);
    $price = mysqli_real_escape_string($db, $_POST['price']);
    $photo = mysqli_real_escape_string($db, $_POST['photo']);
    $type = mysqli_real_escape_string($db, $_POST['radio']);
    $descrp = mysqli_real_escape_string($db, $_POST['descrp']);

    if (empty($title)) {
        array_push($errors, "Title is required");
    }
    if (empty($address)) {
        array_push($errors, "Address is required");
    }
    if (empty($city)) {
        array_push($errors, "City is required");
    }
    if (empty($postcode)) {
        array_push($errors, "PostCode is required");
    }
    if (empty($area)) {
        array_push($errors, "Area is required");
    }
    if (empty($price)) {
        array_push($errors, "Price is required");
    }
    if (empty($type)) {
        array_push($errors, "Type is required");
    }


    // REGISTER
    if (count($errors) == 0) {
        $query = "INSERT INTO housing (title, address, city, pc, area, photo, price, type, description) 
  			  VALUES('$title', '$address', '$city', '$postcode', '$area', '$photo', '$price', '$type', '$descrp')";
        mysqli_query($db, $query);
        header('location: galery.php');
    }
}

function generate_resized_image()
{
    $house_id = 38;
    $newwidth = 300;
    $newheight = 300;
    $dir = 'housing_';
    // Collect the post variables.
    $postvars = array(
        "image"    => trim($_FILES["image"]["name"]),
        "image_tmp"    => $_FILES["image"]["tmp_name"],
        "image_size"    => (int) $_FILES["image"]["size"],
        "image_max_width"    => (int) $_POST["image_max_width"],
        "image_max_height"   => (int) $_POST["image_max_height"]
    );
    $valid_exts = array("jpg", "jpeg", "gif", "png");
    $ext = end(explode(".", strtolower(trim($_FILES["image"]["name"]))));
    // Check not larger than 175kb.
    if ($postvars["image_size"] <= 1048576) {
        // Check is valid extension.
        if (in_array($ext, $valid_exts)) {
            if ($ext == "jpg" || $ext == "jpeg") {
                $image = imagecreatefromjpeg($postvars["image_tmp"]);
            } else if ($ext == "gif") {
                $image = imagecreatefromgif($postvars["image_tmp"]);
            } else if ($ext == "png") {
                $image = imagecreatefrompng($postvars["image_tmp"]);
            }
            list($width, $height) = getimagesize($postvars["image_tmp"]);
            $tmp = imagecreatetruecolor($newwidth, $newheight);
            imagecopyresampled($tmp, $image, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
            $filename = $dir . $house_id . $postvars["image"];
            imagejpeg($tmp, $filename, 100);
            return $filename;
            imagedestroy($image);
            imagedestroy($tmp);
        } else {
            return "File size too large. Max allowed file size is 175kb.";
        }
    } else {
        return "Invalid file type. You must upload an image file. (jpg, jpeg, gif, png).";
    }
}
