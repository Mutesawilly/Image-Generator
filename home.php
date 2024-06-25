<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Image Generator and Stock with Artificial Intelligence!</title>
  <link rel="stylesheet" href="home-style.css">
</head>

<body>
  <section class="welcome-pages">
    <section class="overlay-for-signup-login">
      <section id="overlay">
        <h1 class="quote-followup">Enjoy well-edited and <span class="highlights">amazing images</span> for free with
          <span class="highlights-design">ImgStock</span>
        </h1>


        <form action="All_In_One.php" method="POST" id="signup">
          <input type="text" name="username" id="username" placeholder="Enter Your Username" required>
          <input type="email" name="email" id="email" placeholder="Enter Your Email Address" required>
          <select id="usersRole" name="usersRole" required>
            <option value="" selected>Select Option</option>
            <option value="Junior Mobile & Web Designer">Junior Mobile & Web Designer</option>
            <option value="Senior Mobile & Web Designer">Senior Mobile & Web Designer</option>
            <option value="Junior Developer">Junior Developer</option>
            <option value="Senior Developer">Senior Developer</option>
            <option value="Student">Student</option>
            <option value="Teacher">Teacher</option>
          </select>
          <input type="password" name="password" id="password" placeholder="Use a strong password" required>
          <button type="submit" id="submit-signup" name="submit-signup">Create account</button>
        </form>



        <form action="All_In_One.php" method="POST" id="login">
          <input type="email" name="login-email" id="login-email" placeholder="Enter Your Email Address" required>
          <input type="password" name="login-password" id="login-password" placeholder="Use a strong password" required>
          <button type="submit" id="submit-login" name="submit-login">Login</button>
        </form>



        <section class="button-for-login-container">
          <p id="register">Have an account?</p>
          <a id="register-link" href="#">Login</a>
        </section>
        
      </section>
    </section>
  </section>

  <script src="home-script.js"></script>
</body>

</html>
