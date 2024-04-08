<?php
$db = new SQLite3('track_metadata.db');
if(!$db) {
    echo $db->lastErrorMsg();
} else {
    echo "Opened database successfully\n";
}
?>
