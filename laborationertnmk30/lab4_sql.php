<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<?php

    //Koppla upp mot databasen 
    $connection = mysqli_connect("mysql.itn.liu.se","blog_edit", "bloggotyp", "blog");

   // Check connection
    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Du är uppkopplad till databasen!";
    ?>

    <h1>Blogg</h1>
    <div id = container>
    <nav>
        <a class="forum" href="post.php">Dela me dig av dina tankar</a>
        <a href="index.php">Hem</a>
    </nav>
    <ul>
        <li>
            <a class="forum" href="lab4_sql.php?order=desc">Sortera efter nyaste</a>
        </li>
        <li>
            <a class="forum" href="lab4_sql.php?order=asc">Sortera efter äldst</a>
        </li>
        <li>
            <a class="forum" href="lab4_sql.php?order=desc&limit=10">Sortera efter nyaste och maximera antalet inlägg till 10 per sida</a>
        </li>
    </ul>
    </div>

    <form action="lab4_sql.php" method="post">
        <input type="text" name="searchkey" id="bar" placeholder="hitta författare">
        <input type="submit" name="searchbtn" id="btn" value="sök">
    </form>

    <hr/>
    <?php
    $searchkey = $_POST['searchkey'];
    if($searchkey != null){
        print("visar resultat för författaren: ");
        print($searchkey);
    }

    $order = $_GET['order'];
    $limit = $_GET['limit'];

    if($limit == null){
        $limit = 100;
    }
    if($order == null){
        $order = 'desc';
    }

    //	Ställ	frågan																																																
	$result = mysqli_query($connection,	"SELECT	* FROM samhe463 WHERE entry_author LIKE '%$searchkey%' OR entry_heading LIKE '%$searchkey%' ORDER BY entry_date $order LIMIT $limit");

	//	Skriv	ut	alla	poster	i	svaret																																
	while ($row = mysqli_fetch_array($result))	{																						
		$heading = $row['entry_heading'];																															
		print("<h2>$heading</h2>\n");																													
		$author = $row['entry_author'];																																	
		$date =	$row['entry_date'];																																					
		print("<p>$author, $date</p>\n");																														
		$text =	$row['entry_text'];																																					
		print("<p>$text</p>\n");																																								
		print("<hr/>");																																																	
	}	//	end	while

    ?>

</body>
</html>