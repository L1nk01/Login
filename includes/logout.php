<?php
include_once 'UserSession.php';

$userSession = new UserSession();
$userSession->closeSession();

header("Location: ../index.php");