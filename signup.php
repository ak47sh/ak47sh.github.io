<!DOCTYPE html>
<html>
<head>
    <!-- bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<link rel="stylesheet" href="style.css">
</head>
<body class="webtransitionin">
    <!-- header -->
<div>
    <nav class="navbar d-flex py-4 " style="background-color: #1a1a1a;">
        <div>
            <a class="justify-content-start"href="index.html"><img src="icons/home.png" class="ms-5" style="height: 40px; width: 40px;"></a>
        </div>
    </nav>
</div>

    <!-- title -->
    <div class="d-flex justify-content-center">
      <p class="h2 text-center mt-5" style="color: white;"> signup </p>
  </div>


    <!-- signup form -->
    <div class="d-flex" style="color: white;">
      <form action="includes/signup.inc.php" method="post" class="position-relative mx-auto my-5">
        <div class="mb-3 ">
          <input type="text" class="form-control" name="user" id="user" placeholder="Username">
        </div>
        <div class="mb-3 ">
          <input type="email" class="form-control" name="email" id="email" placeholder="Email Address">
        </div>
        <div class="mb-3">
          <input type="password" class="form-control" name="pwd" id="pwd" placeholder="Password">
        </div>
        <button style="background-color: #1a1a1a; color: white; min-width: 50vw;" name="submit" type="submit" class="btn">Create Account</button>
      </form>
    </div>
      <!-- go to login -->
  <div class="text-center" style="color: white;"> <a href="login.php" class="linkstyle" >already have an account?</a> </div>

</body>
</html>