<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Comments</title>
</head>
<body>
    <div class="container">
        <form method="post">
            <!-- <input type="text" name="comment">
            <input type="submit"> -->
            <textarea name="comment" cols="30" rows="10" placeholder="Enter some text here">

            </textarea>
            <input type="submit">
        </form>
    </div>
    
</body>
</html>

<?php
    if ($_POST['comment'])
    {
        $data = $_POST['comment'];
        $fp = fopen("data.txt", "a") or die ("Unable to open file");
        fwrite($fp, $data);
        fwrite($fp, "\n");
        fclose($fp);
        echo nl2br(htmlentities(file_get_contents("data.txt")));
        echo "<br>";
    }
?>