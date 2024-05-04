<?php
require_once('EventLogger.php');

class BoxeoEventLogger extends EventLogger {
    public function logEvent($tiempo) {
        echo "\nEvento de boxeo logged - Tiempo: $tiempo\n";
    }
}