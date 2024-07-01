<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BlogProject</title>
</head>
<body>
    <h3>New Post</h3>
    <form action="includes/post.inc.php" method="post">
        <input type="text" name="title" id="title">
        <textarea name="post" id="post"></textarea>
        <button name="submit" role="button">POST</button>
    </form>
</body>
</html>