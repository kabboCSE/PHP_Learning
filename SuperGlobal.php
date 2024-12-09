<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    echo $_SERVER["DOCUMENT_ROOT"];
    echo "<br>";
    echo $_SERVER["PHP_SELF"];
    echo "<br>";
    echo $_SERVER["SERVER_NAME"];
    echo "<br>";
    echo "THE Method is : " . $_SERVER["REQUEST_METHOD"] . " Method"; 
    echo "<br>";
    echo $_GET["name"];
    echo $_GET["age"];
    echo $_REQUEST["name"];
    echo $_FILES[""];
    echo $_COOKIE[""];
    echo $_SESSION[""];
    echo $_ENV[""];

    
    ?>
</body>
</html>