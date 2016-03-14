<html><body>
<?php
// A simple web site in Cloud9 that runs through Apache
// Press the 'Run' button on the top to start the web server,
// then click the URL that is emitted to the Output tab of the console

echo 'Hello world from Cloud9!';

$arr = array(1, 2, 3, 4);
foreach ($arr as &$value) {
    $value = $value * 2;
}

echo '<br><br><br><pre>';

var_dump($arr);

echo '<br><br>';

print_r($arr);
echo '<br><br><br></pre>';
?>

</body>
</html>