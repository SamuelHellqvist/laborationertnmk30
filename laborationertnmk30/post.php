<?php include "meny.txt";?>
<body>
<div id="can">
        <button id="themebtn">
            sunset
        </button>
        <div id="clock">
            <p id="hrs">00</p>
            <p>:</p>
            <p id="min">00</p>
            <p>:</p>
            <p id="sec">00</p>
        </div>
    </div>
    <!-- <form action= "generate.php" method="post"> -->
        <!-- <form action="lab4_sql.php" method="post"> -->
        <form action="generate_sql.php" method="post">

        <input id="username" name="author" type="text" placeholder="namn">
        <input id="subject" name="heading" type="text" placeholder="rubrik">
    
        <input id="post" name="entry" type="textarea" placeholder="whats on your mind?">
            
        <input id="pswrd" name ="pass" type="password" placeholder="lösenord">

        <input id="sbmtbnt" type="submit">

        
    </form>

</body>
</html>

</body>
</html>