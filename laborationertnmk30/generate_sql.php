<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

//Koppla upp mot databasen 
//namn på databas, användarnamn, lösenord, tabellens namn
$connection = mysqli_connect("mysql.itn.liu.se","blog_edit", "bloggotyp", "blog");

// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Du är uppkopplad till databasen!";



$pass = $_POST['pass'];

if ($pass != "pass"){
    print("<p>Felaktigt lösenord </p>");
    print("<a href='post.php'>Försök igen</a>");

}

else{
    $author =  mysqli_real_escape_string($_POST['author']);   // Namnet på formulärfälten bestäms

    $heading =  mysqli_real_escape_string($_POST['heading']); // med attribut i HTML-kodenför formuläret   
    $entry =  mysqli_real_escape_string($_POST['entry']);																																																		
    $query = "INSERT INTO samhe463 VALUES(NULL, '$author', '$heading', '$text')";
    // Nu har vi en fråga i	$query som vi kan skicka till MySQL!															
    mysqli_query($connection, $query);
    header("Location: lab4_sql.php");
}

?>
</body>
</html>