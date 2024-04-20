<?php
header("Access-Control-Allow-Origin: *");
$site = $_POST['url'];
$html = @file_get_contents($site);

if ($html === false) {

    echo "Error: Failed to scrape or Invalid Url. ";
} else {

    $bytes = file_put_contents('markup.txt', $html);
    $decision = exec("python3 test.py $site 2>&1 ");
    echo $decision;
}
?>
