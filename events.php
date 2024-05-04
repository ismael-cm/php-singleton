<?php

// Implementación del patrón Singleton en clase logger
class Logger {
    private static $instance;
    private $logs = [];

    private function __construct() {}

    //Implementacion de patron Sigletone, solo se instacia una vez
    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new Logger();
        }
        return self::$instance;
    }

    //Funcion para guardar los logs
    public function log($mensaje) {
        $this->logs[] = $mensaje;
        echo "Logging: $mensaje\n";
    }

    //Funcion para obtener los logs
    public function getLogs() {
        return $this->logs;
    }
}

// Implementación del patrón Factory Method
abstract class EventLogger {
    abstract public function logEvent($tiempo);
}

class CorrerEventLogger extends EventLogger {
    public function logEvent($tiempo) {
        echo "\nEvento de correr logged - Tiempo: $tiempo\n";
    }
}

class CiclismoEventLogger extends EventLogger {
    public function logEvent($tiempo) {
        echo "\nEvento de ciclismo logged - Tiempo: $tiempo\n";
    }
}

class BoxeoEventLogger extends EventLogger {
    public function logEvent($tiempo) {
        echo "\nEvento de boxeo logged - Tiempo: $tiempo\n";
    }
}

class EventLoggerFactory {
    public static function createLogger($eventType) {
        switch ($eventType) {
            case 'correr':
                return new CorrerEventLogger();
            case 'ciclismo':
                return new CiclismoEventLogger();
            case 'boxeo':
                return new BoxeoEventLogger();
            default:
                throw new Exception("Tipo de evento invalido");
        }
    }
}

// Ejemplo de uso
$logger1 = Logger::getInstance();
$logger2 = Logger::getInstance();
echo ($logger1 === $logger2 ? "true" : "false") . "\n"; // Output: true

$logger1->log("\nProbar mensajes del log");

$correrLogger = EventLoggerFactory::createLogger('correr');
$correrLogger->logEvent(5);

$ciclismoLogger = EventLoggerFactory::createLogger('ciclismo');
$ciclismoLogger->logEvent(10);

$boxeoLogger = EventLoggerFactory::createLogger('boxeo');
$boxeoLogger->logEvent(500);


?>

