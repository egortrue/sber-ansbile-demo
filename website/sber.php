<!DOCTYPE html>
<html>

<head>
    <title>Hello sber!</title>
    <style>
        body {
            width: 35em;
            margin: 0 auto;
            font-family: Tahoma, Verdana, Arial, sans-serif;
        }
    </style>
</head>

<body>
    <h1>Hello, Sber!</h1>
    <?php 
        echo str_repeat("<p>If you see this page, Egor Trukhin successfully completed the task :)</p>", 5);
    ?>
    <?php phpinfo(); ?>
</body>

</html>