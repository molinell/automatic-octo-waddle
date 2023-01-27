
<?php 
    // empty och isset är praktiska
    // $_GET är en superglobal associative array
    // $_REQUEST fungerar både för get och post data
    if(!empty($_REQUEST["name"]) && isset($_REQUEST["email"])) {

        // Såhär använder vi test_input funktionen
        $skadligdata = $_REQUEST["name"];
        $ofarligdata = test_input($skadligdata);

        print("Welcome " . $ofarligdata); 
        // XSS faran finns här på nästa rad
        print("<br>Your email address is:" .$_REQUEST["email"]); 
    }

    // Lite övningar med time() och mktime()
    if(!empty($_REQUEST["name"])) {

        $dag = test_input($_REQUEST["name"]);
        print("<p>Du matade in dagen #". $dag . "</p>");

        $tidnu = time();
        print("Just nu är det " . $tidnu . " sekunder sedan tidens begynnelse<br>");

        $inmatadtid = mktime(12, 01, 00, 1, $dag, 2023);
        print("Du undrar ifall " .$inmatadtid . " är i framtiden eller det förflutna?");

    }

?>