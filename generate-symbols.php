<?php
/**
 * generate-symbols.php
 * Generates facades symbols and metadata for C5
 * @author Stefan Fodor
 * @year 2015
 */

set_time_limit(0);

require('concrete/dispatcher.php');


$sg = new Concrete\Core\Support\Symbol\SymbolGenerator();
file_put_contents(
    "_ide_helper_symbols.php",
    $sg->render()
);


$mg = new Concrete\Core\Support\Symbol\MetadataGenerator();
file_put_contents(
    ".phpstorm.meta.php",
    $mg->render()
);
