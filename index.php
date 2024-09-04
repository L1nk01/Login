<?php

include_once __DIR__ . '/includes/User.php';
include_once __DIR__ . '/includes/UserSession.php';

$userSession = new UserSession();
$user = new User();

if (isset($_SESSION['user'])) { // there was a session started
  $user->setUser($userSession->getCurrentUser());
  include_once __DIR__ . '/public/views/home.php';
} else if (isset($_POST['username']) && isset($_POST['password'])) {
  $userField = $_POST['username'];
  $passwordField = $_POST['password'];

  if ($user->userExists($userField, $passwordField)) { // user logged in
    $userSession->setCurrentUser($userField);
    $user->setUser($userField);

    include_once __DIR__ . '/public/views/home.php';
  } else {
    $errorLogin = "The username and/or password is wrong.";
    include_once __DIR__ . '/public/views/login_form.php';
  }
} else { // user put wrong password
  include_once __DIR__ . '/public/views/login_form.php';
}
