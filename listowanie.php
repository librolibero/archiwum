<!DOCTYPE html>
<html lang="pl">
	<head>
            <link rel="shortcut icon" href="images/libr.jpg">
		<meta charset="utf-8">
                <meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1'>
                <title>Listowanie</title>
                <link rel='stylesheet' href='css/mojestyle.css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; text-align: center}
        .wrapper{ width: 350px; padding: 10px;  }
        body {
            padding-top: 40px;
            padding-bottom: 40px;
            background-image: url(images/libr.jpg); 
         }
         .table{
             margin: 0 
         }
    
         h2{
            text-align: center;
            color: #FFFFFF;
         }
         tr {
             padding: center;
             text-align: center; 
				border: #000 0px;
				padding: 20px;
                                text-align: center;
            color: #FFFFFF;
           
            
			}
                        td {
             padding: center;
             text-align: center; 
				border: #000 0px;
				padding: 20px;
                                text-align: center;
            color: #FFFFFF;
            
			}
                        th{
                            padding: center;
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
                    <li><a href="index3.php">Home</a></li>
                 <li><a href="login.php">Zaloguj się</a></li>
                 <li><a href="register.php">Zarejestruj się</a></li>
                 <li><a href="uploadd.php">Dodaj zdjęcie</a></li>
                 <li><a href="reset-password.php">Zresetuj hasło</a></li>
                    
                </ul>
            </nav>
        </aside>
        <!-- main -->
        <section id="main">
            <h2>Wpisane dane</h2>
             </section>
<?php
$servername = "localhost";
$username = "wda";
$password = "wd18";
$dbname = "wda_1";

// Zdefiniowanie polaczenia
$conn = new mysqli($servername, $username, $password, $dbname);
// Utwrzeie polaczenia
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//Zapytanie SQL do bazy
$sql = "SELECT tytul, autor, gatunek FROM zbiory"; 
$result = $conn->query($sql);

if ($result->num_rows > 0) { //jezeli jest rezultat wiekszy od zera to wyswietli
    
    echo "<table>";
				echo "<tr>";
				echo "<th>tytul</th>";
				echo "<th>autor</th>";
                                echo "<th>gatunek</th>";
				echo "</tr>";
     
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
					

					echo "<td>" . $row["tytul"] . "</td>";
					echo "<td>" . $row["autor"] . "</td>";
                                        echo "<td>" . $row["gatunek"] . "</td>";

					
					echo "</tr>";
				}
				
				echo "</table>";					 
} else {
    echo "Brak danych";
}
//zamkniecie polaczenia
$conn->close();
?>
            
<br>
<a href="welcome.php" class="btn btn-warning">Powrót</a>
 <!-- footer -->
        <footer>
            <p>Humanistyka UKW © 2019</p>
        </footer>
</body>
</html>

