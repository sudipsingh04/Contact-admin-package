<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us</title>
</head>
<body>
    <h1>Contact Us</h1>
    <form action="" method="POST">
        @csrf
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" placeholder="Your name please"><br><br>
        <label for="email">Email</label><br>
        <input type="email" id="email" name="email" placeholder="Your valid email"><br><br>
        <textarea name="message" id="" cols="30" rows="10" placeholder="Your message"></textarea><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
