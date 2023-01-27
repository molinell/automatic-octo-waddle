<?php
    $datum = date("d.M.Y");
    print("<p>Dagens datum är: <br>" . $datum . "</p>");
    // Arrays
    $veckodagar = array("Måndag", "Tisdag", "Onsdag", "Torsdag", "Fredag", "Lördag", "Söndag");
    print("<p>Idag är det veckodag nummer: " . date("l") . "</p>");
    print("<p>Nytt försök, är det veckodag nummer " . date("m") . "då?");
    print("<p>Veckodag nummer 01 betyder att det är " . $veckodagar[1] . "</p>");
