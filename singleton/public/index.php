<?php

use App\Config;

require('../vendor/autoload.php');

$configInstance1 = Config::getInstance();

$apiKey = $configInstance1->get('apiKey');
echo "La clé API est : $apiKey\n";

$configInstance2 = Config::getInstance();

if ($configInstance1 === $configInstance2) {
    echo "Les deux instances de Config sont identiques.\n";
} else {
    echo "Les deux instances de Config ne sont pas identiques.\n";
}
