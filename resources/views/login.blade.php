<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Your login validation logic goes here
    // For simplicity, let's assume the login is successful
    $login_successful = true;

    if ($login_successful) {
        header('Location: home_page');
        exit;
    } else {
        echo "Login failed. Please try again.";
    }
}
?>

<!DOCTYPE html>
<html lang="english">
  <head>
    <title>exported project</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8" />
    <meta property="twitter:card" content="summary_large_image" />

    <style data-tag="reset-style-sheet">
    </style>
    <style data-tag="default-style-sheet">
    </style>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://unpkg.com/@teleporthq/teleport-custom-scripts/dist/style.css"
    />
  </head>
  <body>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
    <div>
      <link href="{{ asset('css/login.css') }}" rel="stylesheet" />

      <div class="login-container">
        <div class="login-login">
          <img
            src="external/background5072-ktu-500h.png"
            alt="Background5072"
            class="login-background"
          />
          <div class="login-register">
            <div class="login-email-address">
              <span class="login-text"><span>Email Address *</span></span>
              <img
                src="external/emailaddress5073-j6f8-200h.png"
                alt="EmailAddress5073"
                class="login-email-address1"
              />
            </div>
            <span class="login-text02">
              <span>
                <span>REGISTER</span>
                <br />
                <span></span>
              </span>
            </span>
            <span class="login-text07">
              <span>
                A link to set a new password will be sent to your email address.
              </span>
            </span>
            <div class="login-newsletter">
              <img
                src="external/rectangle215072-0a3o-200h.png"
                alt="Rectangle215072"
                class="login-rectangle21"
              />
              <span class="login-text09">
                <span>SUBSCRIBE TO THE NEWSLETTER</span>
              </span>
              <span class="login-text11">✓</span>
            </div>
            <div class="login-registercta">
              <span class="login-text12"><span>REGISTER</span></span>
            </div>
          </div>
          <img
            src="external/line195074-230d.svg"
            alt="Line195074"
            class="login-line19"
          />
          <div class="login-login1">
            <img
              src="external/rectangleloginarea5072-yl5-500h.png"
              alt="RectangleLoginArea5072"
              class="login-rectangle-login-area"
            />
            <div class="login-logincta">
              <span class="login-text14"><span>LOG IN</span></span>
            </div>
            <span class="login-text16"><span>Lost your password?</span></span>
            <div class="login-remember-me">
              <img
                src="external/rectangle195065-xbea-200h.png"
                alt="Rectangle195065"
                class="login-rectangle19"
              />
              <span class="login-text18"><span>Remember me</span></span>
            </div>
            <div class="login-password">
              <span class="login-text20"><span>Password *</span></span>
              <img
                src="external/password5066-ubm9-200h.png"
                alt="password5066"
                class="login-password1"
              />
              <input type="password" name="password" required>
            </div>
            <div class="login-usernameoremailaddress">
              <span class="login-text22">
                <span>Username or email address *</span>
              </span>
              <img
                src="external/password1334-pn5w-200h.png"
                alt="password1334"
                class="login-password2"
              />
              <input type="text" name="username" required>
            </div>
            <span class="login-text24"><span>LOGIN</span></span>
            <form method="post" action="">
                <!-- Form login disini -->
                <button type="submit">Login</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>