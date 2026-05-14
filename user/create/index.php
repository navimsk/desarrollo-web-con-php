<?php
header('Content-Type: text/html; charset=utf-8');

echo "
<!DOCTYPE html>
<html lang='es'>
<head>
    <meta charset='UTF-8'>
    <title>Kirby - Regístrate</title>
    <style>
        body { 
            background: #121212; 
            color: #ffafcc; /* Rosa Kirby */
            text-align: center; 
            font-family: 'Courier New', Courier, monospace; 
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }
        pre { 
            font-size: 16px; 
            line-height: 1; 
            font-weight: bold;
            text-shadow: 0 0 10px rgba(255, 175, 204, 0.5);
            background: #1a1a1a;
            padding: 20px;
            border-radius: 15px;
            border: 2px solid #ffafcc;
        }
        h1 { 
            font-size: 2.5rem; 
            margin-bottom: 0;
            color: #fff;
        }
        .corazon {
            color: #ff4d6d;
        }
    </style>
</head>
<body>

    <h1>Holi Sebaaaa !!</h1>

    <pre>
    ⠀⠀⠀⠀⠀⠀⠀⢀⣤⠖⠛⠉⠉⠛⠶⣄⡤⠞⠻⠫⠙⠳⢤⡀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⢠⠟⠁⠀⠀⠀⠀⠀⠀⠈⠀⢰⡆⠀⠀⠐⡄⠻⡄⠀⠀⠀
⠀⠀⠀⠀⠀⠀⡾⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠛⠦⠤⣤⣇⢀⢷⠀⠀⠀
⠀⠀⠀⠀⠀⠀⢳⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣿⡀⢈⡼⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠘⣆⢰⡀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠁⣼⠃⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠙⣎⢳⣄⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⡾⠃⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠈⢳⣝⠳⣄⡀⠀⠀⠀⠀⠀⢀⡴⠟⠁⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠈⠳⢮⣉⣒⣖⣠⠴⠚⠉⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⣀⣴⠶⠶⢦⣀⠀⠀⠀⠀⠀⠉⠁⠀⠀⠀⠀⢀⣠⣤⣤⣀⠀⠀⠀
⠀⢀⡾⠋⠀⠀⠀⠀⠉⠧⠶⠒⠛⠛⠛⠛⠓⠲⢤⣴⡟⠅⠀⠀⠈⠙⣦⠀
⠀⣾⠁⠀⠀⠀⠀⠀⠀⠀⣠⡄⠀⠀⠀⣀⠀⠀⠀⠈⠀⠀⠀⠀⠀⠀⠸⣇
⠀⣿⡀⠀⠀⠀⠀⠀⢀⡟⢁⣿⠀⢠⠎⢙⡇⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣽
⠀⠈⢻⡇⠀⠀⠀⠀⣾⣧⣾⡃⠀⣾⣦⣾⠇⠀⠀⠀⠀⠀⠀⠀⠰⠀⣼⠇
⠀⢰⡟⠀⡤⠴⠦⣬⣿⣿⡏⠀⢰⣿⣿⡿⢀⡄⠤⣀⡀⠀⠀⠀⠰⢿⡁⠀
⠀⡞⠀⢸⣇⣄⣤⡏⠙⠛⢁⣴⡈⠻⠿⠃⢚⡀⠀⣨⣿⠀⠀⠀⠀⢸⡇⠀
⢰⡇⠀⠀⠈⠉⠁⠀⠀⠀⠀⠙⠁⠀⠀⠀⠈⠓⠲⠟⠋⠀⠀⠀⠀⢀⡇⠀
⠈⣧⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢸⠇⠀
⠀⢹⡇⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣾⡄⠀
⠀⠀⠻⣄⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣽⠋⣷⠀
⠀⠀⢰⣿⣦⡀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣠⡾⠃⠀⣿⡇
⠀⠀⢸⡯⠈⠛⢶⣄⡀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣀⣤⠾⠋⠂⠀⠀⣿⠃
⠀⠀⠈⣷⣄⡛⢠⣈⠉⠛⠶⢶⣶⠶⠶⢶⡶⠾⠛⠉⠀⠀⠀⠁⢠⣠⡏⠀
⠀⠀⠀⠈⠳⣅⡺⠟⠀⣀⡶⠟⠁⠀⠀⠘⢷⡄⠀⠛⠻⠦⡄⢀⣒⡿⠀⠀
⠀⠀⠀⠀⠀⠈⠉⠉⠛⠁⠀⠀⠀⠀⠒⠂⠀⠙⠶⢬⣀⣀⣤⡶⠟⠁⠀⠀
    </pre>

    <div style='margin-top: 20px;'>
        <p style='font-size: 1.8rem;'>Registrate, te quiero mucho <span class='corazon'>♥</span></p>
    </div>

</body>
</html>
";
?>