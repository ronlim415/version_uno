<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>
<?php include 'filesLogic.php';?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="./CSS/style.css">
    <title>Files Upload and Download</title>
  </head>
  <body>
    <div class="container">
    <a href="logout.php">Logout</a>
          <br>
	          Hello, <?php echo $user_data['user_name']; ?>
          <br>
      <div class="row">
        <form action="index.php" method="post" enctype="multipart/form-data" >
          <h3>Upload File</h3>
          <input type="file" name="myfile"> <br>
          <button type="submit" name="save">upload</button>
        </form>
      </div>
    </div>
  </body>
</html>