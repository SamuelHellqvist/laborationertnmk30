<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="vouge.css">
</head>
<body>
    <h1>Specifik fråga till tnmk30</h1>

    
    <p>Vilka favoritfärger har de som är vänsterhänta? </p>

    <table>
        <tr>
            <th>favorit färg</th>
        </tr>
        
        <?php 
        $connection = mysqli_connect("mysql.itn.liu.se","nikro27","","nikro27"); 

        if (!$connection){
            die('MySQL connection error');
        }

        $contents = mysqli_query($connection, "SELECT color FROM tnmk30 WHERE hand='Vänsterhänt' ORDER BY color");

        for($x = 0; $x < $contents -> num_rows; $x++){
            $row = mysqli_fetch_array($contents);
            echo "<tr><td>", $row["color"], "</td></tr>";
        }

        mysqli_close($connection);

    ?>
    </table>
</body>
</html>