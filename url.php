<?php

$url = "http://www.example.com.br";

if (str_starts_with($url, "https")) {
	echo "A URL é segura" . PHP_EOL;
} else {
	echo "A URL não é segura" . PHP_EOL;
}

echo PHP_EOL;

if (str_ends_with($url, ".br")) {
	echo "A URL é brasileira" . PHP_EOL;
} else {
	echo "A URL não é brasileira" . PHP_EOL;
}

echo PHP_EOL;
