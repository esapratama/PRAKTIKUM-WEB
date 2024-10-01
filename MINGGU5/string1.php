<?php
$loremIpsum = "Lorem ipsum dolor sit emet consectetur adipiscing elit.
Voluptatem reprehenderitnobis veritatis commodi fugiat molestias
impedit unde ipsum voluptatum, corrupti minus sit excepturi nostrum
quisquam? Qous impedit eum nulla optio.";

echo "<p>{$loremIpsum}</p>";
echo "Panjang karakter; " . strlen($loremIpsum) . "<br>";
echo "Panjang kata: " . str_word_count($loremIpsum) . "<br>";
echo "<p>" . strtoupper($loremIpsum) . "</p>";
echo "<p>" . strtolower($loremIpsum) . "</p>";
