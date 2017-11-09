<?php
/**
 * Created by PhpStorm.
 * User: Alain
 * Date: 03.11.2017
 * Time: 09:33
 */
require_once '../inserat/InseratController.php';


$currentPage = (int)filter_input(INPUT_GET, 'CurrentPage', FILTER_SANITIZE_NUMBER_INT) ?? 1;

$controller = new InseratController();

$maxPages = $controller->getNumberOfPages();

var_dump($currentPage);

$inserate = $controller->showInserate($currentPage);

$buttons = "";

$buttons = $currentPage == 1 ? "" : "<div> <a class='navigationButton' onclick='previousPage()'>Vorherige Seite</a></div>";
$buttons = $currentPage == $maxPages ? $buttons."" : $buttons."<div> <a class='navigationButton' onclick='nextPage()'>Nächste Seite</a></div>";


echo "    <div >
            <h1>Inserate</h1>
          </div>
          <div id=\"inserateContainer\"/>
            $inserate
          </div>
          <div> $buttons  $maxPages</div>";