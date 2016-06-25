<?php
// Only process the form if $_POST isn't empty
if ( ! empty( $_POST ) ) {
  
  // Connect to MySQL
  $mysqli = new mysqli( 'localhost', 'root', '', 'graal' );
  
  // Check our connection
  if ( $mysqli->connect_error ) {
    die( 'Connect Error: ' . $mysqli->connect_errno . ': ' . $mysqli->connect_error );
  }
  
  // Insert our data
  $sql = "INSERT INTO era ( name, email, password, confirmpassword ) VALUES ( '{$mysqli->real_escape_string($_POST['name'])}', '{$mysqli->real_escape_string($_POST['email'])}', '{$mysqli->real_escape_string($_POST['password'])}', '{$mysqli->real_escape_string($_POST['confirmpassword'])}' )";
  $insert = $mysqli->query($sql);
  
  // Print response from MySQL
  if ( $insert ) {
    echo "Connecting...: {$mysqli->insert_id}";
  } else {
    die("Error: {$mysqli->errno} : {$mysqli->error}");
  }
  
  // Close our connection
  $mysqli->close();
}
?>
<body bgcolor="purple">
<br><br><br><br><br><br><br><center> <div style="width:300px; height:380px; background-color:grey; color:#80aaff; ">
<form method="post" action="">
  <br><p>Username</p><input name="name" type="text"><br>
  <p>Email Adress</p><input name="email" type="email"><br>
  <p>Password</p><input name="password" type="text"><br>
  <p>Confrim Passord</p><input name="confirmpassword" type="text"><br>
  <br><input type="submit" value="Submit Form"><br>
</form>
</div></center> <br><br>
<img src="http://eraupload.graalonline.com/era_upload_nocopyright.png" align="left"> <img src="http://eraupload.graalonline.com/era_upload_nohats.png" hspace="325" align="center"> <img src="http://eraupload.graalonline.com/era_upload_nobodies.png" align="right">