<?php
$password = "mypass";

echo "Con la encriptacion sha1 obtengo: ".sha1($password)."<br>";
echo "Con la encriptacion sha1 obtengo: ".sha1($password,true)."<br>";

echo "Con la encriptacion md5 obtengo: ".md5($password)."<br>";

echo "Con la encriptacion crc32 obtengo: ".crc32($password)."<br>";

echo "Con la encriptacion crypt obtengo: ".crypt($password)."<br>";

?>