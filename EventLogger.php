<?php
// Implementación del patrón Factory Method
abstract class EventLogger {
    abstract public function logEvent($tiempo);
}