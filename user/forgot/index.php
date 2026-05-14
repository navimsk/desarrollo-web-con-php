<?php
// Forzar que el navegador sepa que es HTML
header('Content-Type: text/html; charset=utf-8');

echo "
<!DOCTYPE html>
<html>
<head>
    <title>Troleo</title>
    <style>
        body { 
            background: #000; 
            color: white; 
            text-align: center; 
            font-family: sans-serif; 
            padding-top: 50px; 
        }
        h1 { font-size: 50px; }
    </style>
</head>
<body>
    <h1>Forgot</h1>
    <iframe 
        width='560' 
        height='315' 
        src='https://www.youtube.com/embed/dQw4w9WgXcQ?autoplay=1' 
        frameborder='0' 
        allow='autoplay' 
        allowfullscreen>
    </iframe>
</body>
</html>
";
?>