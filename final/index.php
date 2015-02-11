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
      <div class="col-md-9">
        <h3 style="color:white">Welcome to Lunch Party!</h3>
        <p><small class="white">This website will help you and your friends decide where you want to have lunch. By choosing where you want to eat by voting on a poll, everyone can give their opinion on what their preferences are. Please sign up or login to use this service!</p></small>
        <div style="width:300px"><a href="vote.php" class="btn btn-lg btn-warning btn-block">Let's Start Voting!</a></div>
      </div>
      <div class="col-md-3">
        <div class="login">
          <h3 class="white">Please login or <a href="register.php">sign up</a></h3>
            <?php if($errors['login']) print '<div class="error">' . $errors['login'] . '</div>'; ?>
            <form accept-charset="UTF-8" role="form"  name="loginForm" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <fieldset>
                    <div class="form-group <?php if($errors['loginEmail']) echo 'has-error'; ?>">
                    <?php if($errors['loginEmail']) print '<div class="error">' . $errors['loginEmail'] . '</div>'; ?>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                            <input class="form-control" placeholder="E-mail" name="email" type="text" value="<?php echo htmlspecialchars($loginEmail); ?>">
                        </div>
                    </div>
                    <div class="form-group <?php if($errors['loginPassword']) echo 'has-error'; ?>">
                    <?php if($errors['loginPassword']) print '<div class="error">' . $errors['loginPassword'] . '</div>'; ?>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input class="form-control" placeholder="Password" name="password" type="password" value="">
                        </div>
                    </div>
                    <input type="hidden" name="loginSubmit" id="loginSubmit" value="true" />
                    <input class="btn btn-lg btn-block btn-primary" type="submit" value="Login">
                </fieldset>
            </form>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include 'footer.php' ?>
</body>
</html>