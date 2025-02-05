<?php
require '../app/config/config.php';
class Service {
    private $pdo;
    
    public function __construct() {
        try {
            $this->pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Erro ao conectar ao banco de dados: " . $e->getMessage());
        }
    }
    
    public function getAll() {
      $stmt = $this->pdo->query("SELECT * FROM services");
      $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
  
      if (!$result) {
          return []; // Retorna um array vazio para evitar erro no foreach
      }
      
      return $result;
  }
  
    
    public function getById($id) {
        $stmt = $this->pdo->prepare("SELECT * FROM services WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    
    public function create($nome, $descricao, $preco) {
        $stmt = $this->pdo->prepare("INSERT INTO services (nome, descricao, preco) VALUES (?, ?, ?)");
        return $stmt->execute([$nome, $descricao, $preco]);
    }
    
    public function update($id, $nome, $descricao, $preco) {
        $stmt = $this->pdo->prepare("UPDATE services SET nome=?, descricao=?, preco=? WHERE id=?");
        return $stmt->execute([$nome, $descricao, $preco, $id]);
    }
    
    public function delete($id) {
        $stmt = $this->pdo->prepare("DELETE FROM services WHERE id=?");
        return $stmt->execute([$id]);
    }
}
