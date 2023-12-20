<?php
$targetDirectory = "uploads/"; // Directory where files will be stored
$targetFile = $targetDirectory . basename($_FILES["fileToUpload"]["name"]); // Path to store the file

if(isset($_POST["submit"])) {
    if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
        echo "The file ". basename($_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>
