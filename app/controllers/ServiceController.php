<?php
require '../app/models/Service.php';

class ServiceController {
    private $service;
    
    public function __construct() {
        $this->service = new Service();
    }
    
    public function index() {
      $serviceModel = new Service(); // Instanciando o modelo
      $services = $serviceModel->getAll(); // Obtendo os serviços do banco
  
      if (!$services) {
          $services = []; // Garante que $services seja um array mesmo se não houver dados
      }
  
      include '../app/views/service/index.php'; // Incluindo a view corretamente
  }
  
    
    public function create() {
        include '../app/views/service/create.php';
    }
    
    public function store() {
        $this->service->create($_POST['nome'], $_POST['descricao'], $_POST['preco']);
        header('Location: /');
    }
    
    public function edit() {
        $service = $this->service->getById($_GET['id']);
        include '../app/views/service/edit.php';
    }
    
    public function update() {
        $this->service->update($_POST['id'], $_POST['nome'], $_POST['descricao'], $_POST['preco']);
        header('Location: /');
    }
    
    public function delete() {
        $this->service->delete($_GET['id']);
        header('Location: /');
    }
}
?>
