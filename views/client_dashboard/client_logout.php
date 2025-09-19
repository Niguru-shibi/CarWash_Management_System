<?php

//start session
session_start();

//destroy session
session_destroy();

//link to home page
header("Location: ../../index.php");