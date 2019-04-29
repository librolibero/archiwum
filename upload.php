<!DOCTYPE html>
<html lang="pl">
    <head>
        <link rel="shortcut icon" href="images/libr.jpg">
        <meta charset="UTF-8" />
        <title>Upload zajęcia do bazy danych</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
        <link rel='stylesheet' href='css/mojestyle.css'>
        <style type="text/css">
            body{ font: 14px sans-serif; text-align: center;}
        .wrapper{ width: 350px; padding: 10px; }
        body {
            padding-top: 40px;
            padding-bottom: 40px;
            background-image: url(images/libr.jpg);
             filter: alpha(opacity=90);
         }
         #transbox {
    width: 300px;
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
         
        
         h5{
             text-align: center;
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
                 <li><a href="#">Home</a></li>
                 <li><a href="login.php">Zaloguj się</a></li>
                 <li><a href="register.php">Zarejestruj się</a></li>
                 <li><a href="upload.php">Dodaj zdjęcie</a></li>
                 <li><a href="reset-password.php">Zresetuj hasło</a></li>
                </ul>
            </nav>
        </aside>
        <!-- main -->
         <section id="main">
        
             <h5><a href="uploadd.php" class="btn btn-danger">Powrót</a>.</h5>
             <div id="transbox">
    <?php
// Include the database configuration file
include 'dbConfig.php';
$statusMsg = '';

// File upload path
$targetDir = "uploads/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            $insert = $db->query("INSERT into images (file_name, uploaded_on) VALUES ('".$fileName."', NOW())");
            if($insert){
                $statusMsg = "Plik ".$fileName. " został dodany poprawnie.";
            }
            else{
                $statusMsg = "Próba dodania pliku nie powiodła się, spróbuj później.";
            } 
        }else{
            $statusMsg = "Pojawił się błąd przy dodawaniu zdjęcia.";
        }
    }else{
        $statusMsg = 'Obsługiwany format plików to: JPG, JPEG, PNG, GIF, & PDF .';
    }
}else{
    $statusMsg = 'Proszę wybrać plik do dodania.';
}

// Display status message
echo $statusMsg;
             
             
?>
          
        </div>
        </section>
         <!-- footer -->
        <footer>
            <p>Humanistyka UKW © 2019</p>
        </footer>
      
        
    </body>
</html>