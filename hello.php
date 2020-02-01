<?php
function microSec( & $ms ) {
    if (\floatval( $ms ) == 0) {
        $ms = microtime( true );
    }
    else {
        $originalMs = $ms;
        $ms = 0;
        return microtime( true ) - $originalMs;
    }
}
?>

<?= microSec($ms) ?>

<?php
echo('aaa\n');
print("bbb\n");
sleep(10);

echo microSec($ms)

?>
