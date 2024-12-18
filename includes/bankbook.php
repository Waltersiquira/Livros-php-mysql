<?php 
$bb = new mysqli('localhost', 'root', '', 'bankbook');
if ($bb->connect_error){
    echo 'erro';
}
$bb->query('set character_set_connection = utf8mb4');
$bb->query('set character_set_client = utf8mb4');
$bb->query('set character_set_results = utf8mb4');
?>