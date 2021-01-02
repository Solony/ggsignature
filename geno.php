<?php

$fp = fopen("php://output", "w+");
if (($handle = fopen("./1_enterovirus68.csv", "rb")) !== FALSE) {
    while (($data = fgetcsv($handle)) !== FALSE) {
        fputcsv($fp, $data);
    }
    fclose($handle);
}

echo json_encode([$fp]);
?>
