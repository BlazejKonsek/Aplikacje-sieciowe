<?php
namespace core;

class ClassLoader {
    public function __construct() {
        spl_autoload_register(function ($class) {
            $classPath = str_replace('\\', DIRECTORY_SEPARATOR, $class);
            $filePath = getConf()->root_path . DIRECTORY_SEPARATOR . $classPath . '.class.php';
            if (is_readable($filePath)) {
                require_once $filePath;
            }
        });
    }
}
?>
