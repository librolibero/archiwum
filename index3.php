<!DOCTYPE HTML>
<html lang='pl'>
<head>
    <link rel="shortcut icon" href="images/libr.jpg">
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1'>
    <title>Archiwum</title>
    <link rel='stylesheet' href='css/mojestyle_1.css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
         body{ font: 14px sans-serif; text-align: center; text-align: center}
        .wrapper{ width: 350px; padding: 10px;  }
          body {padding-top: 40px;
            padding-bottom: 40px;
            background-image: url(images/libr.jpg);}
     #transbox {
    width: 800px;
    margin: 0 auto;
    background-color: #fff;
    filter:alpha(opacity=50);
    opacity: 0.5;
    -moz-opacity:0.5;
}
#transbox div {
    padding: 20px;
    color: #000;
    filter:alpha(opacity=100);
    opacity: 1;
    -moz-opacity:1;
}     
h1 {
    text-align: left;
    color: #FFFFFF;
}


    </style>
          
   

</head>

<body>

    <div class="container">

        <!-- header -->
        <header>
            <img src="images/library.png" alt="" />
        </header>

        <!-- sidebar -->
        <aside>
            <nav>

                <div class="mobimin" onclick="$('.menu').toggle();">
                    &equiv;
                </div>
                <ul class="menu">
                    <li><a href="index.php">Home</a></li>
                 <li><a href="login.php">Zaloguj się</a></li>
                 <li><a href="register.php">Zarejestruj się</a></li>
                 <li><a href="uploadd.php">Dodaj zdjęcie</a></li>
                 <li><a href="reset-password.php">Zresetuj hasło</a></li>
                    
                </ul>
            </nav>
        </aside>
        <!-- main -->
        <section id="main">
            <h1>Home</h1>
            <div id="transbox">
            <p>Archiwum przechowujące informacje o książkach. Zapisujemy autora, tytuł oraz gatunek.</p>
        </section></div>

        <!-- footer -->
        <footer>
            <p>Humanistyka UKW © 2019</p>
        </footer>
     
</body>

</html>