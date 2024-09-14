<!-- **Task 2: Interface Implementation**
Develop a logging system using interfaces. Create classes that
implement a logging interface and demonstrate their usage. -->

<?php
interface LoggingInterface
{
    public function log($message);
}
class FileLogging implements LoggingInterface
{
    public function log($message)
    {
        file_put_contents('app.log', $message . PHP_EOL, FILE_APPEND);
    }
}
class DatabaseLogging implements LoggingInterface
{
    public function log($message)
    {
        echo ("Database login successfully: $message\n");
    }
}
$file = new FileLogging();
$file->log("Logging to a File.");
$database = new DatabaseLogging();
$database->log("Logging to a Database.");
?>