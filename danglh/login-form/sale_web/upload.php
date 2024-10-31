<?php
$img=$_FILES["fileToUpload"];
$target_dir = "photos/";
$target_file = $target_dir . basename($img["name"]);
echo $target_file;

  if (move_uploaded_file($img["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $img["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
