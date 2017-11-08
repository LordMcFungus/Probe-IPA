<?php
/**
 * Created by PhpStorm.
 * User: Alain
 * Date: 03.11.2017
 * Time: 09:33
 */
require_once '../inserat/InseratController.php';


$controller = new InseratController();

$inserate = $controller->showInserate(1);

echo "    <div >
            <h1>Inserate</h1>
          </div>
          <div id=\"inserateContainer\"/>
            $inserate
          </div>
          <div><a>Vorherige Seite</a><a>Nächste Seite</a></div>";