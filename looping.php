<!-- looping for -->
<?php
for($i = 0; $i < 10; $i++){
    echo"<h1>$i<h1/>";
}
?>
<!-- foreach -->
<?php
$buah = ['mangga','jeruk','semangka'];

foreach($buah as $b ){
    echo"<h1>{$b}<h1/>";
}