<?php
$loremIpsum = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste exercitationem corporis aut deleniti rerum? Voluptatum cum nulla aliquam libero recusandae, consequuntur doloremque, itaque ipsum aliquid quae atque fugit accusantium ipsa?";

echo "<p>{$loremIpsum}</p>";
echo "Panjang Karakter: " . strlen($loremIpsum) . "<br>";
echo "Panjang Kata: " . str_word_count($loremIpsum) . "<br>";
echo "<p>" . strtoupper($loremIpsum) . "</p>";
echo "<p>" . strtolower($loremIpsum) . "</p>";
?>