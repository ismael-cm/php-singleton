<?php
require('CiclismoEventLogger.php');
require('BoxeoEventLogger.php');
require('CorrerEventLogger.php');

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