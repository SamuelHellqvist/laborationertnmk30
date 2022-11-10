<?php

    $author = $_POST['author'];   // Namnet på formulärfälten bestäms

    $heading = $_POST['heading']; // med attribut i HTML-kodenför formuläret   
    $entry = $_POST['entry'];

    $timestamp = date("Y-m-d H:i:s");

    $pass = $_POST['pass'];

    /* 

    print("<h1>$heading</h1>\n");                                                
    print("<p><em>$author</em></p>\n");                                          
    print("<p>$entry</p>\n");

    */                                                    
    if ($pass != "pass"){
        print("<p>Felaktigt lösenord </p>");
        print("<a href='post.php'>Försök igen</a>");
 
    }

    else{
        
        $blogfile = fopen("blog.txt", "ab");
        fwrite($blogfile, "<div class='post'> <h1>$author</h1>\n<h2>$heading</h2>\n<p>$entry</p>\n<p>$timestamp</p></div>\n");
        fclose($blogfile);
        header("Location: forum.php");
    }

?> 