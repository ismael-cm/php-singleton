<?php
require_once('EventLogger.php');

class CorrerEventLogger extends EventLogger {
    public function logEvent($tiempo) {
        echo "\nEvento de correr logged - Tiempo: $tiempo\n";
    }
}