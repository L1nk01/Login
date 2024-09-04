<?php

include_once __DIR__ . '/Connection.php';

class User extends Connection
{
  private $dbh;
  private $name;
  private $username;

  public function __construct()
  {
    parent::__construct();
    $this->dbh = $this->getConnection();
  }

  public function userExists(string $username, string $password): bool
  {
    try {
      $md5password = md5($password);
      $query = 'SELECT * FROM users WHERE username = :username AND password = :password';

      $stmt = $this->dbh->prepare($query);
      $stmt->bindParam(':username', $username);
      $stmt->bindParam(':password', $md5password);
      $stmt->execute();

      return $stmt->rowCount() ? true : false;
      // return $stmt->rowCount() > 0;
    } catch (PDOException $e) {
      // Maneja la excepción de la consulta
      error_log('Error en userExists: ' . $e->getMessage());
      return false;
    }
  }

  public function setUser(string $username): void
  {
    $query = 'SELECT * FROM users WHERE username = :username';
    $stmt = $this->dbh->prepare($query);
    $stmt->bindParam(':username', $username);
    $stmt->execute();

    foreach ($stmt as $currentUser) {
      // $this->name = $currentUser['name'];
      $this->username = $currentUser['username'];
    }
  }

  public function getName()
  {
    return $this->name;
  }

  public function getUsername()
  {
    return $this->username;
  }
}
