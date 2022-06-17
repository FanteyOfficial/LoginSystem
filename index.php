<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sistema Login</title>
        <link rel="stylesheet" type="text/css" href="./css/index.css" />
    </head>

    <body>
        <form action="php/register.php" method="POST">
            <h2>Registrati</h2>
            
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Inerire la tua email" required />
            
            <label for="username">Username</label>
            <input type="text" name="username" id="username" placeholder="Inerire la tua username" required />
            
            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Inerire la password" required />
        
            <input type="submit" value="Invia" />
            <p>Hai già un account?<br/><a href="login.html">Accedi</a></p>
        </form>
    </body>
</html>