<!DOCTYPE html>
<html>
<body>

<!-- <?php echo phpinfo()?> -->

<?php
echo ini_get('upload_max_filesize');?>

<form action="api/music/upload.php" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="file" id="file">
  <input type="submit" value="Upload music" name="submit">
</form>

</body>
</html>