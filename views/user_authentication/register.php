<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../../assets/styles/global.css" />
    <link
      rel="stylesheet"
      href="../../assets/styles/user_authentication/user_authentication.css"
    />
    <title>CareerSphere | Register</title>
  </head>
  <body>
    <section class="auth_section">
      <h1 class="auth_nav"><a href="/CareerSphere/views/jobs/jobs.html">CareerSphere</a></h1>
      <div class="auth_container">
        <div class="auth_header">
          <h2>Register</h2>
          <p>
            or <a href="./login.php" class="auth_link">login to an account</a>
          </p>
        </div>
        <form id="register-form" action="/CareerSphere/controller/Register.php" method="POST">
          <input
            type="text"
            id="username"
            name="username"
            placeholder="Username"
            class="auth_input"
          />
          <p id="username-error" class="error_msg"></p>
          <br />
          <input
            type="email"
            id="email"
            name="email"
            placeholder="Email"
            class="auth_input"
          />
          <p id="email-error" class="error_msg"></p>
          <br />
          <div class="auth_input_container">
            <input
              type="password"
              id="password"
              name="password"
              placeholder="Password"
              class="auth_input"
            />
            <img
              src="../../assets/img/eye_show.png"
              alt="toggle icon"
              class="toggle_icon"
              id="toggle_icon"
              onclick="togglePasswordVisibility()"
            />
          </div>
          <p id="password-error" class="error_msg"></p>
          <br />
          <div class="auth_input_container">
            <input
              type="password"
              id="confirm_password"
              name="confirm_password"
              placeholder="Confirm Password"
              class="auth_input"
            />
            <img
              src="../../assets/img/eye_show.png"
              alt="toggle icon"
              class="toggle_icon"
              id="confirm_toggle_icon"
              onclick="togglePasswordVisibility()"
            />
          </div>
          <p id="confirm-password-error" class="error_msg"></p>
          <br />
          <button type="submit" class="auth_submit">Register</button>
        </form>
        <p>
          <a href="./forgotten_password.html" class="auth_link"
            >Forgotten your password?
          </a>
        </p>
      </div>
    </section>

    <script src="../../assets/scripts/user_authentication/register.js"></script>
    <script src="../../assets/scripts/user_authentication/toggle_password.js"></script>
  </body>
</html>
