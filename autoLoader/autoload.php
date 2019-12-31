<?php
/*
 * This file is part of the Managesend package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
require_once "Psr4ClassLoader.php";

$loader = new Psr4ClassLoader();
$loader->addPrefixes(array(
    'Managesend\\' => __DIR__.'/../src',
));
$loader->register();

?>
