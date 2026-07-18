<?php 
namespace Ayky\Database ;

use PDO;
use Dotenv\Dotenv;

class Database {
    private static $instance = null;
    private $pdo ;

    private string $dbName;
    private string $dbUser;
    private string $dbPassword;
    private string $dbHost;
    private string $dbPort;

    private function __construct(){
        $dotenv = Dotenv::createImmutable(__DIR__ . '/../../');
        $dotenv->load();

        $this->dbHost = $_ENV['DB_HOST'];
    $this->dbPort = $_ENV['DB_PORT'];
    $this->dbName = $_ENV['DB_NAME'];
    $this->dbUser = $_ENV['DB_USER'];
    $this->dbPassword = $_ENV['DB_PASSWORD'];
    
    $this->pdo = new PDO(
        "mysql:host={$this->dbHost};port={$this->dbPort};dbname={$this->dbName};charset=utf8",
        $this->dbUser,
        $this->dbPassword
    );
    }

    public static function getInstance(){
        if(self::$instance == null){
            self::$instance = new self() ;
        }
            return self::$instance ;
        
    }

    public function getPdo(): PDO {
      return  $this->pdo ;
    }

    // 19/07/2026
    // afficher les jobs
}