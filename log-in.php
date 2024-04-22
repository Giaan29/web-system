<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log-in/Sign-Up</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,400;0,500;0,600;0,800;1,900&display=swap" rel="stylesheet">
</head>
<body class="log">

   <header>
      <a href="index.php" class="logo">Edu-Journal</a>

      <ul class="nav-bar">
          <li><a href="about.php">ABOUT</a></li>
          <li><a href="log-in.php">LOG-IN</a></li>
          <li><a href="contact.php">CONTACT</a></li>
      </ul>
  </header>

    <div class="wrapper">
        <div class="card-switch">
            <label class="switch">
               <input type="checkbox" class="toggle">
               <span class="slider"></span>
               <span class="card-side"></span>
               <div class="flip-card__inner">
                  <div class="flip-card__front">
                     <div class="title">Log in</div>
                     <form class="flip-card__form" method="post" action="sign_up.php">
                        <input class="flip-card__input" name="email" placeholder="Email" type="email">
                        <input class="flip-card__input" name="password" placeholder="Password" type="password">
                        <button class="flip-card__btn" name="signIn">Submit!</button>
                     </form>
                     <!-- Change the button to an anchor tag for admin login -->
                     <a class="flip-card__btn" href="admin.php">Admin</a>
                  </div>
                  <div class="flip-card__back">
                     <div class="title">Sign up</div>
                     <form class="flip-card__form" method="post" action="sign_up.php">
                        <input class="flip-card__input" name="fname" placeholder="Name" type="name">
                        <input class="flip-card__input" name="email" placeholder="Email" type="email">
                        <input class="flip-card__input" name="password" placeholder="Password" type="password">
                        <button class="flip-card__btn" name="signUp">Confirm!</button>
                     </form>
                  </div>
               </div>
            </label>
        </div>   
   </div>
    
</body>
</html>
