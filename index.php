<?php
//Get the steamid (really the community id)
$communityid = $_GET["steamid"];
//Get the map name
$mapname = $_GET["mapname"];
//See if the second number in the steamid (the auth server) is 0 or 1. Odd is 1, even is 0
$authserver = bcsub($communityid, '76561197960265728') & 1;
//Get the third number of the steamid
$authid = (bcsub($communityid, '76561197960265728')-$authserver)/2;
//Concatenate the STEAM_ prefix and the first number, which is always 0, as well as colons with the other two numbers
$steamid = "STEAM_0:$authserver:$authid";

//Output welcome line
echo "Welcome to my server!<br>";
//Output Steam Community ID
echo "Your Community ID is $communityid<br>";
//Output calculated SteamID
echo "Your SteamID is $steamid<br>";
//Output current map
echo "The current map is $mapname<br>";
//Output friendly greeting
echo "Enjoy your stay!";
?>