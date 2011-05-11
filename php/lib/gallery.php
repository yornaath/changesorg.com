<?php
require("php/database/class_mysql_database.php");
require("php/database/database_config.php");

$database = new mysql_database(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
$database->connect();

if ($handle = opendir('./bilder')) {
    $table_i = 1;

    $tr_i = 0;

    echo "<table class='gallery' id='$table_i'>\n";
    echo "<tr>\n";
    while (false !== ($file = readdir($handle))) {
        if($file != "." && $file != "..") {
            $tr_i++;
            $pathparts = pathinfo($file);
            $sql = "SELECT title, text FROM bilde WHERE id=" . $pathparts['filename'];
            $result = mysql_query($sql);
            while($row = mysql_fetch_array($result)) {
                $text = $row['text'];
                $title = $row['title'];
            }
            echo "<td>\n\t<a href='bilder/$file' rel='lightbox' title='$title'><div class='thumbnail'><img class='thumbnail_pic' src='bilder/$file'/>$text</div></a></td>\n";
            if($tr_i == 4 || $tr_i == 8 || $tr_i == 12 || $tr_i == 16 || $tr_i == 20 || $tr_i == 24 || $tr_i == 28 || $tr_i == 32)
                echo "</tr>\n<tr>\n";
            if($tr_i == 12 || $tr_i == 24) {
                $table_i++;
                echo "</tr></table>\n<table class='gallery' id='$table_i'>\n<tr>";
            }
        }
    }

    closedir($handle);
}

echo "</tr>";
echo "</table>";
echo "<table class='gallery_page_chooser'>";
echo "<tr>";
$button_i = 1;
while($button_i <= $table_i) {
    echo "<td class='gallery_page_button' id='$button_i'>$button_i</td>";
    $button_i++;
}
echo "</tr>";
echo "</table>";
?>