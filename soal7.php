<?php
function wrapText ($text) {
    $count = str_split($text) ;

    if (count($count) > 50 ) {
        $text = substr($text,0,50);
        $text .= "...";
    }
    echo $text;
}

$text = 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quam reprehenderit corrupti expedita. Modi, repudiandae quasi. Tempore eligendi reprehenderit fuga quaerat commodi voluptatibus, eaque similique quis expedita! Maxime quos molestias reiciendis.';

echo "<b> kalimat awal : </b>" . $text ;

wrapText($text);

?>