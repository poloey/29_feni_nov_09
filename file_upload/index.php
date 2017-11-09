<?php
if (isset($_FILES['file'])) {
  $file = $_FILES['file'];
  $name = $file['name'];
  $tmp_name = $file['tmp_name'];
  if (! file_exists('hello')) {
    mkdir('hello');
  }
  $destination = 'hello/' . $name;
  move_uploaded_file($tmp_name, $destination);
}

  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>file uploading</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.2/css/bootstrap.css"/>
</head>
<body>
  
  <div class="container mt-5">
    <form action="" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label for="file">Upload file</label>
        <input type="file" name="file" id="file" class="form-control">
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-info">upload your file</button>
      </div>
    </form>

  </div>
</body>
</html>