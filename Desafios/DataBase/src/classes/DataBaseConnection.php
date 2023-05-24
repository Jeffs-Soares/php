<?php

class DatabaseConnection {
    private $pdo;

    public function __construct(
        private string $host,
        private string $port,
        private string $dbname,
        private string $user,
        private string $password
    ) {}

    public function connect(): void {
        $dsn = "pgsql:host={$this->host};port={$this->port};dbname={$this->dbname}";
        
        $this->pdo = new PDO($dsn, $this->user, $this->password);
        
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        echo "Connected to the PostgreSQL database successfully!" . PHP_EOL;
    }

    public function disconnect(): void {
        $this->pdo = null;
        echo "Disconnected from the PostgreSQL database." . PHP_EOL;
    }
}
