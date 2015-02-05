<?php

require_once 'header.php';

$page = isset($_GET['page']) ? $_GET['page'] : 'main';

if ($page == 'about') {
    require_once 'about.php';
} elseif ($page == 'contacts') {
    require_once 'contacts.php';
} else {
    require_once 'main.php';
}

require_once 'footer.php';