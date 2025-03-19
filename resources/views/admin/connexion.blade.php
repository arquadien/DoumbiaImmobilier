
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
    />
    <title>Formulaire de connexion</title>
</head>
<body>
    <div class="signupSection">
    <div class="info">
        <h2>Agence Mont Hevreste</h2>
        <img src="assets/michael.png" style="height: 160px; border-radius: 50%; margin: 30px 0px" alt="">
        <p>The Future Is Here</p>
    </div>
    <form action="{{asset(route('authentification'))}}" method="POST" class="signupForm" name="signupform">
        @csrf
        <h2 style="margin: 20px 0px;">Sign in</h2>
        <ul class="noBullet">
        <li>
            <label for="email"></label>
            <input type="email" class="inputFields" id="email" name="email" placeholder="Email" value="" required/>
        </li>
        <li>
            <label for="password"></label>
            <input type="password" class="inputFields" id="password" name="password" placeholder="Password" value="" oninput="return passwordValidation(this.value)" required/>
        </li>
        <li id="center-btn">
            <input type="submit" id="join-btn" name="connexion" alt="Connexion" value="Connexion">
        </li>
        </ul>
        <a href="#" style="color: white;">Mot de passe oublié</a>
    </form>
   
    </div>
</body>
</html>