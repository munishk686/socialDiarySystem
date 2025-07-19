<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet"  href="style.css">

    <script>
    function validateStatus() {
        var status = document.getElementById('st').value;
        var pattern = /^[a-zA-Z0-9,.!?]+$/; // Alphanumericals, comma, period, exclamation mark, and question mark
        if (!pattern.test(status)) {
            alert('Status can only contain alphanumericals, comma, period, exclamation mark, and question mark. Spaces on their own are not allowed.');
            return false; // Prevent form submission
        }
        return true; // Allow form submission
    }
    </script>

<body >
<nav class="navbar">
        <div class="container">
            <span class="navbar-text">
                Status Posting System
            </span>
        </div>
<div class="container">
    <h2>Status Posting System</h2><br>

    <form action="poststatusprocess.php" method="post" onsubmit="return validateStatus()">
        <label for="stcode">Status Code:</label>
        <input type="text" name="stcode" placeholder="Status code Required" required>
        <br> <br>
        <label for="st">Status:</label>
        <input type="text" id="st" name="st" placeholder="Status Required" required><br> <br>

        <label for="stcode">Share:</label>

        <input type="radio" id="university" name="share" value="University" required>
        <label for="university">University</label>
        <input type="radio" id="class" name="share" value="Class" required>
        <label for="class">Class</label>
        <input type="radio" id="private" name="share" value="Private" required>
        <label for="private">Private</label><br><br>

        <label for="date">Date:</label>
        <input type="date" id="date" name="date" required value="<?php echo date('Y-m-d'); ?>"><br><br>


        <label for="Permission">Permission:</label>

        <input type="checkbox" id="allowlike" name="permission[]" value="allowlike" >
        <label for="allowlike">Allow Like</label>
        <input type="checkbox" id="allowcomments" name="permission[]" value="allowcomments" >
        <label for="allowcomments">Allow Comments</label>
        <input type="checkbox" id="allowshare" name="permission[]" value="allowshare" >
        <label for="allowshare">Allow Share</label><br><br>

        <input type="submit" name="post" value="Post"><br><br>

        <a href="index.html">Return to Home Page</a>
    </form>
    </div>
</body>
</html>
