<?php  //echo $fromDB;
	while ($row = $query->fetch_object()) {
		echo "$row->nama<br>";
	}