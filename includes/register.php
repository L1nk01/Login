<?php

include_once __DIR__ . '/Connection.php';

$connection = new Connection();
$dbh = $connection->getConnection();

if (isset($_POST['username']) && isset($_POST['password'])) {
  $userField = $_POST['username'];
  $passwordField = $_POST['password'];
  $md5password = md5($passwordField);

  try {
    $dbh->beginTransaction();

    $query = "INSERT INTO users (username, password) VALUES (?, ?)";

    $stmt = $dbh->prepare($query);

    $stmt->bindParam(1, $userField);
    $stmt->bindParam(2, $md5password);

    $stmt->execute();
    $dbh->commit();
    header("Location: /login");
  } catch (Exception $e) {
    echo "hubo un bobo manito, baquea: " . $e;
  }
}