<?php
require_once 'config/config.php';
spl_autoload_register(function ($class) {
    include_once 'classes/' . $class . '.php';
});
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <title><?php echo $config["full_name"];?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="näringsämnen,näringsinnehåll,livesmedelsinnehåll,livsmedel,mat,Livsmedelsverket,hälsa,matmedveten">
    <meta name="description" content="<?php echo $config["full_name"];?> hjälper dig att enkelt ta reda på näringsämnen i din mat. Sök bland cirka 2100 livsmedel och maträtter!">
    <meta name="author" content="Axel Svanfeldt">
    <link href='//fonts.googleapis.com/css?family=Open+Sans:300,400' rel='stylesheet' type='text/css'>
    <link href="//ajax.googleapis.com/ajax/libs/jquerymobile/1.4.5/jquery.mobile.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquerymobile/1.4.5/jquery.mobile.min.js"></script>
    <script src="js/script.js"></script>
</head>
<body>
<?php
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