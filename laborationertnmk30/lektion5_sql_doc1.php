<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="vouge.css">
</head>


<!-- kopplar till databasen. "databasnamn", "användarnamn", "lösenord", "tabellen" -->

<body>
    <h1>Generell fråga till tnmk30</h1>
    <?php 
    $connection = mysqli_connect("mysql.itn.liu.se","nikro27","","nikro27"); 

    if (!$connection){
        die('MySQL connection error');
    }

    $contents = mysqli_query($connection, "SELECT * FROM tnmk30");

    print("<table>\n<tr>");

    while($fieldinfo = mysqli_fetch_field($contents)){
        print("<th>". $fieldinfo->name . "</th>");
    }

    print("</tr>");

    while($row = mysqli_fetch_row($contents)){
        print("<tr>");
        for($i = 0; $i < mysqli_num_fields($contents); $i++) {
            print("<td>$row[$i]</td>");
        }
        print("</tr>");
    }

    mysqli_close($connection);
    ?>
    </table>
    <a href="lektion5_sql_doc2.php">En specifik fråga till databasen</a>
</body>
</html>