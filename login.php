<?php
try {
    $user = 'insurgent';
    $pass = 'insurgent1!';
    $db = 'crypto_armory';
    $dbConnection = new mysqli('localhost', $user, $pass, $db, 4307) || die("Database connection not available!!!");
}catch(Exception $ex){
// to do
    echo $ex->getMessage();
}

echo "
<!DOCTYPE html>
<html lang='en' class='min-vh-100 min-vw-100'>
<head>
    <title>Crypto Armory</title>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' href='bootstrap/css/bootstrap.css'>
    <script src='j-query/jquery-3.6.0.min.js'></script>
    <script src='bootstrap/js/bootstrap.js'></script>
    <script src='bootstrap/js/bootstrap.esm.js'></script>
    <script src='bootstrap/js/bootstrap.bundle.js'></script>
</head>
<body class='min-vh-100 min-vw-100 bg-dark'>
    <div class='bg-dark caption-top text-light col-12 h-25'>
        <div class='col-9 d-inline-block'>       
            <a class='link-light page-link' href='index.html'>
                <img class='cropped d-inline-block p-1 m-3' src='images/shield.png' alt='CryptoShield' width='50'>
                <h1 class='m-0 p-2 pb-5 d-inline-block'>Crypto Armory</h1>
            </a>
        </div>
    </div>
    <div class='gy-5 row bg-dark'>
        <div class='d-inline-block w-10'></div>
        <div class='w-80 d-inline-block'>
          <div class='container'>
                        <div class='row text-center'>
                        <div>
                        
                            <h2 class='mt-3 text-light'>Login</h2>
                            <input type='text' id='username' name='username' class='w-25 mt-2' placeholder='Username'>
                            <br>
                            <input type='password' id='password' name='password' class='w-25 mt-4' autocomplete='false' placeholder='Password'>
                            <br>
                          <a class='btn btn-light text-dark mt-4' href='login.php'>Login</a>
                          <p class='text-light m-auto mt-3 w-25'>To register please contact administrator @kittycat@deviousreasons.com</p>                                      
                      </div>
                </div>
           </div>
                                
        </div>
    </div>
</body>
";