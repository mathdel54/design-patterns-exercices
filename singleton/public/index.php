<?php
require('../vendor/autoload.php');

use App\Config;


# TODO: Récuperer une instance de Config
# Afficher une valeur contenu dans config.php
# Récupérer une seconde instance de Config et vérifié que les deux instances sont identiques

$config = Config::getInstance();
$config2 = Config::getInstance();
echo ($config == $config2) ? 'true' : 'false';
echo "<br>" . $config->get('apiKey');