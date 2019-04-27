<?php
require_once 'config/config.php';
spl_autoload_register(function ($class) {
    include_once 'classes/' . $class . '.php';
});
include_once 'content/head.php';
include_once 'content/intro.php';
include_once 'content/search.php';
include_once 'content/info.php';
include_once 'content/fat.php';
include_once 'content/proteins.php';
include_once 'content/salts.php';
include_once 'content/vitamins.php';
include_once 'content/carbohydrates.php';
?>
</body>
</html>