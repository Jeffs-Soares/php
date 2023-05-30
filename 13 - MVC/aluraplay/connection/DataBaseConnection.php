<?php
class DataBaseConnection
{
    public $pdo;
    public function __construct(
        private string $host,
        private string $port,
        private string $dbname,
        private string $user,
        private string $password
    ) {}
    public function connect(): void
    {
        try {

            $dsn = "pgsql:host={$this->host};port={$this->port};dbname={$this->dbname}";
            $this->pdo = new PDO($dsn, $this->user, $this->password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //echo "Connected to the PostgreSQL database successfully!" . PHP_EOL;

        } catch (PDOException $e) {
           // echo "Failed to connect the PostgreSQL database!";
            die($e->getMessage());
        }
    }

    public function disconnect(): void
    {
        $this->pdo = null;
        echo "Disconnected from the PostgreSQL database.";
    }

    public function createInitialTable():void{
           
        $this->pdo->exec("CREATE TABLE IF NOT EXISTS videos (id SERIAL PRIMARY KEY, url VARCHAR(255) NOT NULL, title VARCHAR(255) NOT NULL);"); 

         

    }



}
