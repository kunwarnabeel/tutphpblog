<?php
    include_once('../config.php');
    include_once('../conn.php');

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $title=$_POST['title'];
            $metaTitle=$_POST['metaTitle'];
            $slug=$_POST['slug'];

            $sql = "INSERT INTO category (title, metaTitle, slug , status)
        VALUES ('$title', '$metaTitle', '$slug' , 0)";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
            $dynamicPath = $_SERVER['DOCUMENT_ROOT'].$currentFolder;
            $file = $dynamicPath.'python.php';
            $newfile = $dynamicPath.$slug.'.php';

            if (!copy($file, $newfile)) {
                echo "failed to copy";
            }
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

    }


?>

<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Add Category</title>
  <style>
      span{font-size: 35px;}
      input{
        width:30%; height:40px;;
    }
    button{
            width:20%; height:40px;
            background:#000;
            color:#fff;
    }

    h1{width:100%; background:#000; color:#fff;}
  </style>

</head>

<body>
<center>

<h1> Add Category </h1>
<form method="post" action="addcategory.php">

<span>Title:</span> <br/>
<input type="text" name="title" id="title" autocomplete="off" /> <br/><br/>

<span>Meta Title:</span>  <br/>
<input type="text" name="metaTitle" id="metaTitle" autocomplete="off" /> <br/><br/>

<span>Slug:</span><br/>
<input type="text" name="slug" id="slug" autocomplete="off" /> <br/> <br/>

<button type="submit">Submit</button>

</form>
</center>
  <script src=""></script>
</body>
</html>