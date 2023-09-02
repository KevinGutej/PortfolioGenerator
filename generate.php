<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //Here we are collecting the data from form
    $name = $_POST['name'];
    $email = $_POST['email'];
    $bio = $_POST['bio'];

        $portfolioHTML = <<<HTML
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>$name's Portfolio</title>
            <link rel="stylesheet" href="style.css">
        </head>
        <body>
            <header>
                <h1>$name</h1>
                <p>Email: $email</p>
            </header>
            <main>
                <section class="bio">
                    <h2>About Me</h2>
                    <p>$bio</p>
            </main>
        </body>
        </html>
        HTML;
}
