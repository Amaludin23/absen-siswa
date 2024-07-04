<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/css/plugins/signup.css">
  <title>Sign Up</title>
</head>
<body>
  <div id="login-container">
    <form id="login-form">
      <h2>Sign In</h2>
      <input type="text" placeholder="Username" required>
      <input type="password" placeholder="Password" required>
      <button type="submit">Sign In</button>
    </form>
    <form id="signup-form" class="hidden">
      <h2>Sign Up</h2>
      <input type="text" placeholder="Username" required>
      <input type="password" placeholder="Password" required>
      <input type="email" placeholder="Email" required>
      <button type="submit">Sign Up</button>
    </form>
    <button id="toggle-form">Sign Up</button>
  </div>
  <script src="scripts.js"></script>
</body>
</html>