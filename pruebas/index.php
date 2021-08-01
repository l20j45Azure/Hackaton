<?php
session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
  <title>PHP File Upload</title>
</head>
<body>


  <?php
    if (isset($_SESSION['message']) && $_SESSION['message'])
    {
      printf('<b>%s</b>', $_SESSION['message']);
      unset($_SESSION['message']);
    }

if($_COOKIE['archivosubido']!=TRUE){
  ?>

  <form method="POST" action="upload.php" enctype="multipart/form-data">
    <div>
      <span>Upload a File:</span>
      <input type="file" name="uploadedFile" />
    </div>

    <input type="submit" name="uploadBtn" value="Upload" />
  </form>
  <?php
  }
  else{}
  ?>
</body>
</html>