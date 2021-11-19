<?php
if(isset($_POST['submit']))
{
    $file = $_FILES['file'];

    $fileName = $file['name'];
    $fileTmpName = $file['tmp_name'];
    $fileSize = $file['size'];
    $fileError = $file['error'];
    $fileType = $file['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg', 'jpeg', 'png');

    if(in_array($fileActualExt, $allowed))
    {
        if($fileError === 0)
        {
            if($fileSize < 50000)
            {
                $fileNameNew = uniqid('', true).".".$fileActualExt;
                $fileDestination = '../profileUploads/'.$fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);
                header("Location: ../index.php?profileupdated");
            }
            else
            {
                echo "File Too Large";
            }
        }
        else
        {
            echo "Error Uploading File: ".$file['error'];
        }
    }
    else
    {
        echo "File Type Not Supported";
    }
}