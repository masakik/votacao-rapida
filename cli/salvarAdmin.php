<?php
require_once __DIR__ . '/../app/bootstrap.php';
require_once __DIR__ . '/funcoes_cli.php';

if (!empty($argv[1])) {
    echo salvarAdmin($argv[1]), PHP_EOL;
} else {
    echo 'Uso: php salvar_admin.php <codpes>', PHP_EOL;
}
