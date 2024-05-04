<?php
require_once('EventLogger.php');

class BoxeoEventLogger extends EventLogger {
    public function logEvent($tiempo) {
        $logger = Logger::getInstance();
        $logger->log("Evento de boxeo logged - Tiempo: $tiempo");
    }
}