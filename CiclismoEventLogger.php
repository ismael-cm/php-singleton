<?php
require_once('EventLogger.php');

class CiclismoEventLogger extends EventLogger {
    public function logEvent($tiempo) {
        echo "\nEvento de ciclismo logged - Tiempo: $tiempo\n";
    }
}