<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>TestTask2</title>
</head>

<body>

    <div class="container">

        <?php

        if (!file_exists("C:\wamp64\www\work\TestTask2\images\image-cropped.png")) { // creating cropped image if it doesnt exist 
            $image = new Imagick("C:\wamp64\www\work\TestTask2\images\image.png"); // creates new Image by using Imagick
            $image->cropThumbnailImage(200, 100); // cropping
            $image->writeImage("C:\wamp64\www\work\TestTask2\images\image-cropped.png"); // writs cropped image to the local path
        }
        echo '<img src="images/image-cropped.png">'; // outputs the cropped image

        ?>

    </div>

</body>

</html>