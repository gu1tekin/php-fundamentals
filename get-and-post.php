<?php 
    if(isset($_GET['name'])){
        $name = htmlentities($_GET['name']);
        echo $name;
    }
?>
<!DOCTYPE html>
<html>
    <head>

    </head>
<body>
    <form method="GET" action="get_post.php">
        <div>
            <label >name:</label><br>
            <input type="text" name="name"><br>
        </div>
        <div>
            <label >email:</label><br>
            <input type="text" name="email"><br>
        </div>
        <input type="submit" value="Submit">
    </form> 
</body>
</html>
