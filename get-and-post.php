<?php 
#GET
// GET is less secure compared to POST because data sent is part of the URL
// Never use GET when sending passwords or other sensitive information! Because, Data is visible to everyone in the URL
// Note that the query string (name/value pairs) is sent in the URL of a GET request which is not secury.
// GET requests can be cached
// GET requests remain in the browser history
// GET requests can be bookmarked
// GET requests should never be used when dealing with sensitive data
// GET requests have length restrictions
// GET requests are only used to request data (not modify)
    if(isset($_GET['name'])){
        $name = htmlentities($_GET['name']);
        echo $name;
    }

#POST
// POST is a little safer than GET because the parameters are not stored in browser history or in web server logs
// Data is not displayed in the URL
// The data sent to the server with POST is stored in the request body of the HTTP request which is more secury.
// POST requests are never cached
// POST requests do not remain in the browser history
// POST requests cannot be bookmarked
// POST requests have no restrictions on data length
if(isset($_POST['name'])){
    $name = htmlentities($_POST['name']);
    echo $name;
}
?>
<!DOCTYPE html>
<html>
<body>
    <form method="GET" action="get_post.php"> <!-- You need to change the method GETorPOST depend on the method you want to use -->
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
