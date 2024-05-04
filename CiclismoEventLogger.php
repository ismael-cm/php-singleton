<?php
require_once('EventLogger.php');

class CiclismoEventLogger extends EventLogger {
    public function logEvent($tiempo) {
        $logger = Logger::getInstance();
        $logger->log("Evento de ciclismo logged - Tiempo: $tiempo");
    }
}