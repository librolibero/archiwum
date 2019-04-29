<?php
setcookie("test_cookie", "test", time() + 3600, '/'); //czy w danej przegladarce zostalo zapamietane okreslone cookies
?>
<html>
    <head>
        <link rel="shortcut icon" href="images/libr.jpg">
    <title>Ciasteczka</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
 <style>
         body {
            padding-top: 40px;
            padding-bottom: 40px;
            background-image: url(images/libr.jpg);
         }
         
         .form-signin {
            max-width: 330px;
            padding: 15px;
            margin: 0 auto;
            color: #000000;
         }
         h1{
             text-align: center;
             color:#FFFAF0;
         }
         
         
      </style>
<body>
    <h1>
<?php
if(count($_COOKIE) > 0) {
    echo "Cookies wlaczone.";
} else {
    echo "Cookies wylaczone.";
}
?>
        </h1>

</body>
</html>
