<?php

class Connection
{
  private $config = [
    'host' => 'localhost',
    'dbname' => 'login',
    'username' => 'root',
    'password' => '',
    'charset' => 'utf8'
  ];
  private $instance = null;
  private $dbh;

  public function __construct()
  {
    $dsn = "mysql:host={$this->config['host']};dbname={$this->config['dbname']};charset={$this->config['charset']}";
    try {
      $this->dbh = new PDO($dsn, $this->config['username'], $this->config['password']);
      $this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
      die("Connection failed: " . $e->getMessage());
    }
  }

  public static function getAvailableDrivers()
  {
    return PDO::getAvailableDrivers();
  }

  public static function getInstance()
  {
    if (self::$instance === null) {
      self::$instance = new self();
    }
    return self::$instance;
  }

  public function getConnection()
  {
    return $this->dbh;
  }
}
