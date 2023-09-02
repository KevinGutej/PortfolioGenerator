<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Generator</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Portfolio Generator</h1>
    <form action="generate.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" name="name" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" required><br>

        <label for="bio">Bio:</label>
        <textarea name="bio" rows="4" required></textarea><br>

        <input type="submit" value="Generate Portfolio">
    </form>
</body>

</html>