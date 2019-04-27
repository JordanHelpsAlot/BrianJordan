<?php
$base_url = "https://www.netflix.com/watch/";
$show_array[0]["id"] = "771476";
$show_array[0]["length"] = 5520;

$curr_show_index = 0;
$random_t = rand(1, $show_array[$curr_show_index]["length"]);

$random_url = $base_url.$show_array[$curr_show_index]["id"].'?t='.$random_t;
echo "<a href='$random_url' target=_blank>$random_url</a>"


?>