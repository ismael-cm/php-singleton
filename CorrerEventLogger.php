<?php
require_once('EventLogger.php');

class CorrerEventLogger extends EventLogger {
    public function logEvent($tiempo) {
        $logger = Logger::getInstance();
        $logger->log("Evento de correr logged - Tiempo: $tiempo");
    }
}