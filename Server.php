<!Doctype HTML>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <form action="Server.php" method="POST">
           Number1: <input type="number" name ="number1">
           <br>
           Number1: <input type="number" name ="number2">
            <input type="submit">
        </form>
        <?php 
            echo $_POST["number1"]+$_POST["number2"];
        ?>
    </body>
</html>