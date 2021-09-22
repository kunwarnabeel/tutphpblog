<?php
    include_once('../config.php');
    include_once('../conn.php');

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $content = mysqli_real_escape_string($conn , $_POST['content']);


        $sql = "INSERT INTO post (content)
        VALUES ('$content')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
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
      input,select{
        width:30%; height:30px;
    }
    button{
            width:20%; height:40px;
            background:#000;
            color:#fff;
    }
    textarea{
        width:90%; height:350px;
    }

    h1{width:100%; background:#000; color:#fff;}
  </style>

</head>

<body>
<center>

<h1> Add Post </h1>
<form method="post" action="addpost.php">

<span>Select Category:</span> <br/>
<select id="" name="">
    <option value="1">Next.js</option>
</select>
<br/><br/>

<span>Page Name:</span>  <br/>
<input type="text" name="pageName" id="pageName" autocomplete="off" /> <br/><br/>

<span>Title:</span>  <br/>
<input type="text" name="title" id="Title" autocomplete="off" /> <br/><br/>

<span>Meta Title:</span>  <br/>
<input type="text" name="metaTitle" id="metaTitle" autocomplete="off" /> <br/><br/>

<span>Slug:</span><br/>
<input type="text" name="slug" id="slug" autocomplete="off" /> <br/> <br/>

<span>Conetnt:</span><br/>
<textarea name="content" id="content"> </textarea> <br/> <br/>

<button type="submit">Submit</button>

</form>
</center>
  <script src="ckeditor/ckeditor.js"></script>
  <script>
      CKEDITOR.replace("content" , {
        extraPlugins : 'codesnippet',
      });
  </script>
</body>
</html>