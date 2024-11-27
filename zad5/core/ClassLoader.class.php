<?php
namespace core;

class ClassLoader {
    public function __construct() {
        spl_autoload_register(function ($class) {
            // Replace namespace separator with directory separator (prolly not required)
            $classPath = str_replace('\\', DIRECTORY_SEPARATOR, $class);
            // Build the full path to the class file
            $filePath = getConf()->root_path . DIRECTORY_SEPARATOR . $classPath . '.class.php';
            if (is_readable($filePath)) {
                require_once $filePath;
            }
        });
    }
}
?>
