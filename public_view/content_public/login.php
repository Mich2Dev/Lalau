<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #ffd4e5;
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .container {
            position: relative;
            background-color: #ffffff;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            text-align: center;
            width: 350px;
        }

        h3 {
            color: #ff80ab;
            margin-bottom: 20px;
        }

        input[type="text"],
        input[type="password"] {
            padding: 12px;
            border: 2px solid #ff80ab;
            border-radius: 8px;
            margin-bottom: 20px;
            width: 100%;
            font-size: 16px;
        }

        .botonera1 {
            display: block;
            width: 100%;
            padding: 12px 20px;
            margin-bottom: 10px;
            border: 2px solid #ff80ab; /* Ajuste del borde para el botón de regresar */
            border-radius: 8px;
            background-color: #ff80ab;
            color: #ffffff;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        
        .botonera2 {
            display: block;
            width: 87.5%;
            padding: 12px 20px;
            margin-bottom: 10px;
            border: 2px solid #ff80ab; /* Ajuste del borde para el botón de regresar */
            border-radius: 8px;
            background-color: #ff80ab;
            color: #ffffff;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .botonera:hover {
            background-color: #ff5c8d;
        }
        .botoregreso {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-color: #80b3ff;
            color: #ffffff;
            font-size: 16px;
            text-decoration: none;
            margin: 0 auto;
        }

        .seccion {
            position: relative;
            animation: slideUp 0.6s;
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(40px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .princess-crown {
            position: absolute;
            top: 10px;
            right: 10px;
            color: gold;
            font-size: 2em;
            animation: pulse 1.5s infinite alternate;
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
            }
            100% {
                transform: scale(1.2);
            }
        }

        .botonera-container {
            display: flex;
            flex-direction: column;
            align-items: stretch;
        }
    </style>
    <title>Log-In</title>
</head>
<body>
    <div class="container">
        <div class="seccion">
            
            <hr>
            <h3>Log In</h3>
            <hr>
            <label for="">Usuario :</label>
            <input class="log_in_user" name="usuario" type="text" placeholder="Usuario">
            <br>
            <label for="">Contraseña :</label>
            <input class="log_in_user2" name="clave" type="password" placeholder="Clave">
            <br>
            <br>
            <div class="botonera-container">
                <button class="botonera1">Iniciar</button>
                <a href="registro" class="botonera2">Registrarse</a>
                <a href="/" class="botoregreso" style="background-color: #80b3ff; border: none; text-decoration: none;">
                 <i class="fas fa-arrow-left"></i>
                </a>
            </div>
            
        </div>
    
        <i class="princess-crown fas fa-crown"></i>
    </div>