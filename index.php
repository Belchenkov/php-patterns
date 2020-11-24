<?php


use Strategy\DocumentsSave;
use Strategy\ImagesSave;
use Strategy\BaseLogic;
use Strategy\IFileSave;

require "functions.php";

spl_autoload_register('project_autoload');

function saveStrategy(array $strategyCollection): Bool
{
    foreach ($strategyCollection as $item) {
        if ($item instanceof IFileSave) {
            $item->save();
        }
    }

    return true;
}

saveStrategy([
    new ImagesSave('builder.png'),
    new DocumentsSave('patterns.docx')
]);