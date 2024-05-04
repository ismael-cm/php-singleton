<?php
    require('Log.php');
    require('EventLoggerFactory.php');

    //Probar que sea la misma instancia
    $logCorrer = Logger::getInstance();
    $logBoxeo = Logger::getInstance();
    $esMismaInstancia = ($logCorrer === $logBoxeo ? "Verdadero" : "Falso");

    $logBoxeo->log("\nProbar mensajes del log");

    $correrLogger = EventLoggerFactory::createLogger('correr');
    $ciclismoLogger = EventLoggerFactory::createLogger('ciclismo');
    $boxeoLogger = EventLoggerFactory::createLogger('boxeo');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Probando los logs</h1>
    <p><b>¿Es la misma instancia?</b> R// <?php echo $esMismaInstancia ?></p>
    <p><?php $boxeoLogger->logEvent(500); ?></p>
    <p><?php $ciclismoLogger->logEvent(10); ?></p>
    <p><?php $correrLogger->logEvent(5); ?></p>

    
</body>
</html>


