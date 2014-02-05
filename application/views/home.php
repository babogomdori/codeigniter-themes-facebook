<?php

if($user) {
	print_r($user);
	echo '<p><a href="'.$logoutUrl.'">Logout</a></p>';
} else {
	echo '<p><a href="'.$loginUrl.'">Login</a></p>';
}
