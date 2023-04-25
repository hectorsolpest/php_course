<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="14_file_upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="upload">
    <input type="submit" value="Submit" name="submit">
</form>
</body>
</html>

<?php
if(isset($_POST['submit']))
{
    echo "sended";
    $allowed_ext = array('png', 'jpg', 'jpeg', 'gif');
  if(isset($_FILES['upload']))
  {
      $file_name = $_FILES['upload']['name'];
      $file_size = $_FILES['upload']['size'];
      $file_tmp = $_FILES['upload']['tmp_name'];
      $target_dir = "upload/$file_name";

      //get file ext
      $file_ext = explode('.', $file_name);
      $file_ext = strtolower(end($file_ext));
      echo $file_ext;

      //validate file ext
      if (in_array($file_ext, $allowed_ext))
      {
          if ($file_size>=100000)
          {
              move_uploaded_file($file_tmp, $target_dir);
              echo "<p style='color: green'>File uploaded</p>";
          }
          else
          {
              echo "<p style='color: red'>File is too large</p>";
          }
      }
      else
      {
          echo "<p style='color: red'>Invalid file type</p>";
      }
  }
  else
  {
      echo "<p style='color: red'>Please choose a file</p>";
  }
}
?>