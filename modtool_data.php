<?php

$username = $_POST["username"];
$modchannel = $_POST["modchannel"];
$action = $_POST["goto"];


function goToUserinfo($modchannel, $username) {
  if (empty($username)) {
    echo "The userinfo isn't visible because you doesn't enter a username.";
    header("refresh: 5; url=index.html");
}

elseif (!empty($username)) {
  header("Location: https://www.twitch.tv/popout/$modchannel/viewercard/$username");
}
}

function goToLiveModeration($modchannel) {
  header("Location: https://www.twitch.tv/moderator/$modchannel");
}

if ($action == "userinfo") {
  goToUserinfo($modchannel, $username);
}

elseif ($action == "livemod") {
  goToLiveModeration($modchannel);
}

?>
