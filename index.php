<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
  <title>Webtechnologie voor KI/INF 2023</title>
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
  <link rel="stylesheet" href="css/style.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="js/jquery-3.6.1.min.js"></script>
</head>

<body>
<div class="navbar" id="myTopnav">
    <div id="link">
      <a data-target="homepage.php">Home</a>
      <a data-target="about.php">About</a>
      <a data-target="leaderboard.php">Leaderboard</a>
      <a data-target="course-search.php">Course Search</a>
    </div>

    <div class="dropdown">
        <button class="dropbtn">Account
        <i class="fa fa-caret-down"></i>
        </button>
        <div id="dropdown-content" class="dropdown-content">
          <div id="link">
            <a data-target="login.php">Login</a>
            <a data-target="register.php">Register</a>
            <a data-target="account.php">My Account</a>
          </div>
        </div>
    </div>
    <div id="dropdown-content" class="dropdown-menu">
        <button class="dropbtn">
            <a class="icon">
                <i class="fa fa-bars"></i>
            </a>
        </button>
        <div class="dropdown-content second-drp">
            <div id="link">
              <a data-target="homepage.php">Home</a>
              <a data-target="about.php">About</a>
              <a data-target="leaderboard.php">Leaderboard</a>
              <a data-target="course-search.php">Course Search</a>
            </div>
        </div>
    </div>
</div>

<div id="page-content">
  <?php include ('homepage.php');?>
</div>

<div class="footer">
  <p>Contact | Privacy Policy</p>
</div>
</body>

</html>
