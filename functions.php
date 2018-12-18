<?php

function get_musics($dbc)
{
	$sql = "SELECT * FROM music";

	$result = mysqli_query($dbc, $sql);

	$musics = mysqli_fetch_all($result);

	return $musics;
}

