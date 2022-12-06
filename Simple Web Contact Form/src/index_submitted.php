<!DOCTYPE html>
<html>
    <head>
        <!-- css -->
        <!-- js -->

    </head>
    <body>
        <h1>Contact form confirmation</h1>
        <p>The following details have been submitted.</p>
        <?php   
            require "form.php";
            
            echo $fname . "</br>";
            echo $lname . "</br>";
            echo $queryType . "</br>";
            echo $comment . "</br>";
            echo $email . "</br>";
        ?>

        <form action="index.php" id="contactform" method="post">
            <input type="submit" value="Edit">
        </form>
    </body>
</html>