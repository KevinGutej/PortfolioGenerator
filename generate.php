<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //Here we are collecting the data from form
    $name = $_POST['name'];
    $email = $_POST['email'];
    $bio = $_POST['bio'];
}
