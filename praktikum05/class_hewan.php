<?php
    class HewanMamalia{

        public $warna;
        public $namahewan;
        public $habitat;

        function makan()
        {
            return "mamalia makan";
        }

        function minum()
        {
            return "mamalia minum";
        }

        function menyusui()
        {
            return "mamalia menyusui";
        }
}

$mamalia = new HewanMamalia ();
echo $mamalia->namahewan = "lumba-lumba";
echo $mamalia->namahewan;
echo"<br>";
echo $mamalia->warna = "abu-abu";
echo"<br>";
echo $mamalia->habitat = "laut";
echo"<br>";
echo $mamalia->makan();
echo "<br>";
echo $mamalia->minum();
echo "<br>";
echo $mamalia->menyusui();

