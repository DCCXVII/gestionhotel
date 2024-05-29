<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>body {
    background-color: #f4f4f4; /* Grey background */
    font-family: UniversLTPro-55Roman,arial,sans-serif;
    color: #333;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

/* Login card container */
.login-container {
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
    width: 70rem;
    height: 40rem;
    margin: 0 auto;
}

.login-content {
    flex: 1.5; /* takes up the remaining space after the image column */
    padding: 2rem;
}

.login-header {
    font-size: 3.5rem;
    font-weight: bold;
    margin-bottom: 10px;
    margin-top: 0;
    color: #4b75ff; /* Matching the button color */
}

.input-container {
    position: relative;
    margin-top: 40px;
}

.input-container label {
    position: absolute;
    left: 10px;
    top: 50%;
    transform: translateY(-50%);
    transition: top 0.3s, font-size 0.1s, color 0.3s;
    color: #999;
    background-color: #fff;
    padding: 0 0.2rem;
    pointer-events: none;
}

.input-container input:focus + label,
.input-container input:not(:placeholder-shown) + label {
    top: 0;
    font-size: 0.9rem;
    color: #4b75ff;
}

.input-container input {
    width: 100%;  /* Making it responsive to its container width */
    padding: 10px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px; 
    font-size: 1.2rem;
}

.input-container input:focus {
    border-color: #4b75ff;
    outline: none;
    border-width: 3px;
}

.input-container.email::after {
    content: "@";
    position: absolute;
    right: 10px;   /* Adjusted positioning */
    top: 50%;
    transform: translateY(-50%);
    color: #999;
    font-size: 1.3rem;
}

.input-container.password::after {
    position: absolute;
    right: 10px;
    top: 50%;
    transform: translateY(-50%);
    color: #999;
    font-size: 1.3rem;
    cursor: pointer;
    font-weight: 600;
}

.input-container .password-icon {
    position: absolute;
    right: 10px;
    top: 50%;
    transform: translateY(-50%);
    color: #999;
    font-size: 1.3rem;
    cursor: pointer;
    font-family: "Font Awesome 5 Free";
}

/* Responsive button */
button {
    width: 100%; /* Matches the width of the input fields */
    padding: 10px;
    margin-top: 1.5rem;
    background-color: #4b75ff; /* Same as input:focus border color */
    border: none;
    border-radius: 4px;
    font-size: 1.2rem;
    color: #fff;
    cursor: pointer;
    transition: background-color 0.3s;
}

.login-button:hover {
    background-color: #2e4dd0; /* Darker shade of the button color */
}

.login-button {
    width: 49%;
    margin-right: 0.5rem;
}

.create-account-button {
    background-color: #fff;
    border: 2px solid #4b75ff;
    color: #4b75ff;
    margin-left: 0.5rem;
}

.create-account-button:hover {
    background-color: #4b75ff;
    color: #fff;
}

.buttons-container {
    display: flex;
    justify-content: space-between;
}

.login-button, .create-account-button {
    flex: 1;
}
  

.login-container {
    display: flex; 
    /* existing styles */
}

.login-image {
    flex: 1.5;
    background: url('/login.jpg') no-repeat center center;
    background-size: cover;
}

.text-danger{
    color: red;
    font-size: 0.9rem;
    margin-top: 0.5rem;
    opacity: 0;
}

</style>
    </head>
<body>
<div class="login-container">
    <div class="login-content">
      <h1 class="login-header">Login</h1>
      <p>Votre espace de gestion preferee !</p>
      <form method="POST" action="{{route('login.custom')}}">
      @csrf
      <div class="input-container email">
      <input type="email" placeholder="Email" id="email" class="form-control" name="email" required autofocus>
        <label for="email">Email address</label>
      </div>

      <div class="input-container password">
    <input type="password" id="password" placeholder="password" name="password">
    @if ($errors->has('emailPassword'))
        <label for="password">Password</label>
        <i class="password-icon fa fa-eye"></i>
        <span class="text-danger ">{{ $errors->first('emailPassword') }}</span>
    @endif
</div>

      <div class="buttons-container">
        <button class="login-button">Login</button>
        <button class="create-account-button">Create Account</button>
      </div>

      </form>
    </div>
    <div class="login-image">
      <img src="">
    </div>
  </div>
</body>


</html>



