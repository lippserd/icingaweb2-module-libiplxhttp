<?php
/* Icinga Web 2 libiplxhttp Module (c) 2017 Icinga Development Team | GPLv2+ */

spl_autoload_register(function ($class) {
    $prefix = 'iplx\\Http\\';
    $len = strlen($prefix);

    $baseDir = __DIR__ . '/library/vendor/iplx/Http/';

    if (strncmp($prefix, $class, $len) !== 0) {
        return;
    }

    $relative = substr($class, $len);

    $file = $baseDir . str_replace('\\', '/', $relative) . '.php';

    if (file_exists($file)) {
        require $file;
    }
});
