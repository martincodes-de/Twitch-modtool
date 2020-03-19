<?php

$username = $_POST["username"];
$modkanal = $_POST["modkanal"];
$modkanalurl = "";

if ($modkanal == "cooper") {

    $modkanalurl = "martincooper_lspd";
    $modkarte = "https://www.twitch.tv/popout/$modkanalurl/viewercard/$username";
    header("Location: $modkarte");

}elseif ($modkanal == "mueller") {

    $modkanalurl = "harvey_mueller7";
    $modkarte = "https://www.twitch.tv/popout/$modkanalurl/viewercard/$username";
    header("Location: $modkarte");

}else {

    echo "Kein gültiger Kanal für die Moderation ausgewählt - Moderationskarte kann nicht aufgerufen werden.";
}

?>