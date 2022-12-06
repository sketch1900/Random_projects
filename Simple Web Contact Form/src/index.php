<!DOCTYPE html>
<html>
    <head>
        <!-- css -->
        <!-- js -->
    </head>
    <body>
        <h1>Contact Form</h1>
        <form action="index_submitted.php" id="contactform" method="post">
            <label for="fname">First name</label><br>
            <input type="text" id="fname" name="fname" sautocomplete="given-name"></input><br>

            <label for="lname">Last name</label><br>
            <input type="text" id="lname" name="lname" autocomplete="family-name"></input><br>
            <br>

            <!-- Radio buttons -->
            <p>Contact reason</p>
            
            <input type="radio" id="inquiry" name="radio" value="QUERY">
            <label for="inquiry">Query</label><br>

            <input type="radio" id="feedback" name="radio" value="FEEDBACK">
            <label for="feedback">Feedback</label><br>

            <input type="radio" id="complaint" name="radio" value="COMPLAINT">
            <label for="complaint">Complaint</label><br>

            <input type="radio" id="other" name="radio" value="OTHER">
            <label for="other">Other..</label>
            <br>
            <br>

            <label for="email">Email Address</label><br>
            <input type="email" id="email" name="email" autocomplete="off"><br>
            <br>
            <br>

            <label for="comment">Comment</label><br>
            <textarea rows="5" cols="50" id="text" name="textBox" form="contactform"></textarea>

            <br>
            <input type="submit" value="submit">
        </form>
    </body>
</html>

<?php ?>