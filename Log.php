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