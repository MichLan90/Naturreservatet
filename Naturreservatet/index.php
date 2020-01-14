<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Index my Zoo</title>
</head>
<body>
    <h1>My Zoo</h1>
    <h2>Välja hur många apor, giraffer, tigrar och kokosnötter som ska finnas i naturreservatet</h2>

    <form action="/results.php" method="post">
        Apor:
        <input type="number" name="quantApor" min="1" max="1000">
        Giraffer:
        <input type="number" name="quantGiraf" min="1" max="1000">
        Tigrar:
        <input type="number" name="quantTigr" min="1" max="1000">
        Kokosnötter:
        <input type="number" name="quantKokos" min="1" max="1000">
        <input type="submit"> <br>
    </form>

</body>
</html>