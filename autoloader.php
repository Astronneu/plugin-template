<?php
spl_autoload_register(function ($className) {

    $namespacePrefix = 'Weberwin\\PluginTemplate\\';
    $namespaceBaseDir = __DIR__ . '/src/core/';
    $filePath = str_replace($namespacePrefix, '', $className);
    $filePath = $namespaceBaseDir . str_replace('\\', '/', $filePath) . '.php';


    if (file_exists($filePath)) {
        require_once $filePath;
    }
    else {
        $namespaceBaseDir = __DIR__ . '/src/';
        $filePath = str_replace($namespacePrefix, '', $className);
        $filePath = $namespaceBaseDir . str_replace('\\', '/', $filePath) . '.php';
        if (file_exists($filePath)) {
            require_once $filePath;
        }
    }

});