<?php include("path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/users.php");
guestsOnly();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="assets/css/lstyle.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Candal|Lora" rel="stylesheet">

  <!-- Custom Styling -->
  <link rel="stylesheet" href="assets/css/style.css">

  <title>Register</title>
</head>

<body>


  <?php include(ROOT_PATH . "/app/includes/header.php"); ?>

  <div class="wrapper">
    <form class="login" action="register.php" method="POST">
      <p class="title">Sign up</p>
      <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>
      <input type="text" name="username" value="<?php echo $username; ?>" class="text-input" placeholder="Username" autofocus />
      <i class="fa fa-user"></i>

      <input type="email" name="email" value="<?php echo $email; ?>" class="text-input" placeholder="Email" autofocus />
      <i class="fa fa-user"></i>

      <input type="password" name="password" value="<?php echo $password; ?>" class="text-input" placeholder="Password" autofocus />
      <i class="fa fa-key"></i>

      <input type="password" name="passwordConf" value="<?php echo $passwordConf; ?>" class="text-input" placeholder="confirm Password" autofocus />
      <i class="fa fa-key"></i>
      <button type="submit" name="register-btn" class="btn btn-big">Register</button>

    </form>
  </div>


  <!-- JQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-- Custom Script -->
  <script src="assets/js/scripts.js"></script>
  <script src="assets/js/lscripts.js"></script>


</body>

</html>