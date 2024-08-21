<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">\
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        
    </style>
    <title>Document</title>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<form action="" method="post" enctype="multipart/form-data">
     <div class="conationer">
        <div class="input-group">
            <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload" name="file_select">
            <input type="submit">            
        </div>

        <div class="card" style="width: 18rem;">
        <img src="/upload\$file_name.jpg\" class="card-img-top" alt="...">
        <div class="card-body">
        <h5 class="card-title">Images</h5>
        <p class="card-text">

        <?php

            if(isset($_FILES["file_select"]))
            {
                    //$fileimg=$_FILES["file_select"]["image"];

                    
                    $file = $_FILES["file_select"]["tmp_name"];
                    $file_name = $_FILES["file_select"]["name"];
                    $file_size = $_FILES["file_select"]["size"];
                    $file_type = $_FILES["file_select"]["type"];
                    $file_error = $_FILES["file_select"]["error"];
                    if(move_uploaded_file($file,"upload/".$file_name))
                    {

                        echo "file uploaded successfully"."<br/>";
                        echo " file Name: " . $file."<br/>";
                        echo "file Size: " . $file_size."<br/>";
                        echo "file Type: ". $file_type."<br/>";
                        echo "file Error: ". $file_error."<br/>";
                    }
                    else
                    {
                        echo "plese file uploaded"."<br/>";
                        echo "<img src=\"./upload/p1.jpg\">";
                    }
            }

        ?>

        </p>
        </div>
</div>
     </div>   
</form>
</body>
</html>

