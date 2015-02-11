<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Lunch Party</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="bootstrap/css/bootstrap.css" rel="stylesheet">  
  <link href="css/main.css" rel="stylesheet">

<!--     <link rel="shortcut icon" href="imgs/favicon.ico"> -->
</head>
<body>

<?php
include_once 'functions.php';
$errors = array();

// Login function
if(isset($_POST['loginSubmit']) && $_POST['loginSubmit'] == 'true'){
    $loginEmail = trim($_POST['email']);
    $loginPassword  = trim($_POST['password']);

    if (!validEmail($loginEmail))
        $errors['loginEmail'] = 'That is not a valid email address.';

    if(strlen($loginPassword) < 6 || strlen($loginPassword) > 28)
        $errors['loginPassword'] = 'Your password must be at least 6 characters. (Max 28)';

    if(!$errors){
        $query  = 'SELECT * FROM users WHERE email = "' . mysql_real_escape_string($loginEmail) . '" AND password = MD5("' . $loginPassword . '") LIMIT 1';
        $result = mysql_query($query);
        if(mysql_num_rows($result) == 1){
            $user = mysql_fetch_assoc($result);
            $query = 'UPDATE users SET session_id = "' . session_id() . '" WHERE id = ' . $user['id'] . ' LIMIT 1';
            mysql_query($query);
            header('Location: index.php');
            echo "<script>window.location = 'index.php'</script>";
            exit;
        }else{
            $errors['login'] = 'Please check your login info and try again.';
        }
    }
}
?>

<div class="col-md-12">
  <div class="row jumbotron">
    <div class="row">
      <div class="col-md-12">
        <h1 class="text-center"><a href="index.php" class="franchise-bold title">Lunch Party</a><small class="helvetica-neue"> Plan meals with your friends</small></h1>
      </div>
    </div>
    <div class="col-md-12 transparent">
      <div class="col-md-9 text-center"><h3 style="color:white">This is the Voting Area</h3><p><small class="white">Go ahead and pick your favourite place to eat by dragging and dropping the token to your preferred choice. Remember than you can vote for more than one place.</p></small>
        <div>
          <iframe src="./voting/index.html" height="900px" width="100%" class="col-md-12"></iframe>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include 'footer.php' ?>
</body>
</html>