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

if($isUserLoggedIn){
    header('Location: index.php');
    echo "<script>window.location = 'index.php'</script>";
    exit;
}

// Reset errors and success messages
$errors = array();

// Register attempt
if(isset($_POST['registerSubmit']) && $_POST['registerSubmit'] == 'true'){
    $registerName = trim($_POST['username']);
    $registerEmail = trim($_POST['email']);
    $registerPassword = trim($_POST['password']);
    $registerConfirmPassword    = trim($_POST['confirmPassword']);

    if(strlen($registerName) < 6 || strlen($registerName) > 28)
        $errors['registerName'] = 'Your user name must be between 6-28 characters.';

    if (!validEmail($registerEmail))
        $errors['registerEmail'] = 'Not a valid email address.';

    if(strlen($registerPassword) < 6 || strlen($registerPassword) > 28)
        $errors['registerPassword'] = 'Your password must be between 6-28 characters.';

    if($registerPassword != $registerConfirmPassword)
        $errors['registerConfirmPassword'] = 'Your passwords did not match.';

    // Check to see if we have a user registered with this name address already
    $query = 'SELECT * FROM users WHERE username = "' . mysql_real_escape_string($registerName) . '" LIMIT 1';
    $result = mysql_query($query);
    if(mysql_num_rows($result) == 1)
        $errors['registerName'] = 'A user with this name already exists.';

    // Check to see if we have a user registered with this email address already
    $query = 'SELECT * FROM users WHERE email = "' . mysql_real_escape_string($registerEmail) . '" LIMIT 1';
    $result = mysql_query($query);
    if(mysql_num_rows($result) == 1)
        $errors['registerEmail'] = 'This email address is already in use.';

    if(!$errors){
        $query = 'INSERT INTO users SET username = "' . mysql_real_escape_string($registerName) . '",
                                        email    = "' . mysql_real_escape_string($registerEmail) . '",
                                        password = MD5("' . mysql_real_escape_string($registerPassword) . '"),
                                        date_registered = "' . date('Y-m-d H:i:s') . '"';

        if(!mysql_query($query)){
            $errors['register'] = 'Problem processing your request. Please try again.';
        }else{
            $query  = 'SELECT * FROM users WHERE email = "' . mysql_real_escape_string($registerEmail) . '" AND password = MD5("' . $registerPassword . '") LIMIT 1';
            $result = mysql_query($query);
            if(mysql_num_rows($result) == 1){
                $user = mysql_fetch_assoc($result);
                $query = 'UPDATE users SET session_id = "' . session_id() . '" WHERE id = ' . $user['id'] . ' LIMIT 1';
                mysql_query($query);
            }

            header('Location: index.php');
            echo "<script>window.location = 'index.php'</script>";
            exit;
        }
    }

}

?>
<div class="row jumbotron">
  <div class="row">
    <div class="col-md-12">
      <h1 class="text-center"><a href="index.php" class="franchise-bold title">Lunch Party</a><small class="helvetica-neue"> Plan meals with your friends</small></h1>
    </div>
  </div>
  <div class="col-md-12 transparent">
    <div class="col-md-4">
      <div class="content login"><h3 class="white">Create Your Account</h3>
        <?php if($errors['register']) print '<div class="white">' . $errors['register'] . '</div>'; ?>
        <form accept-charset="UTF-8" role="form" name="registerForm" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
          <fieldset>
            <div class="form-group <?php if($errors['registerName']) echo 'has-error'; ?>">
            <?php if($errors['registerName']) print '<div class="white">' . $errors['registerName'] . '</div>'; ?>
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input class="form-control" placeholder="Username" name="username" type="text" value="<?php echo htmlspecialchars($registerName); ?>">
              </div>
            </div>
            <div class="form-group <?php if($errors['registerEmail']) echo 'has-error'; ?>">
            <?php if($errors['registerEmail']) print '<div class="white">' . $errors['registerEmail'] . '</div>'; ?>
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                <input class="form-control" placeholder="E-mail" name="email" type="text" value="<?php echo htmlspecialchars($registerEmail); ?>">
              </div>
            </div>
            <div class="form-group <?php if($errors['registerPassword']) echo 'has-error'; ?>">
            <?php if($errors['registerPassword']) print '<div class="white">' . $errors['registerPassword'] . '</div>'; ?>
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                <input class="form-control" placeholder="Password" name="password" type="password" value="">
              </div>
            </div>
            <div class="form-group <?php if($errors['registerConfirmPassword']) echo 'has-error'; ?>">
            <?php if($errors['registerConfirmPassword']) print '<div class="white">' . $errors['registerConfirmPassword'] . '</div>'; ?>
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                <input class="form-control" placeholder="Confirm Password" name="confirmPassword" type="password" value="">
              </div>
            </div>
            <input type="hidden" name="registerSubmit" id="registerSubmit" value="true" />
            <input class="btn btn-lg btn-block btn-danger" type="submit" value="Register">
          </fieldset>
        </form>
        </div>
    </div>
  </div>
</div>

<?php include 'footer.php' ?>
</body>
</html>