<?php 
class ControllerPessoa{
    public static function index(){
        include 'View/modules/Pessoa/ListaPessoa.php';
    }

    public static function save(){
        include 'Model/PessoaModel.php';

        $model = new PessoaModel();

        $model->nome = $_POST['nome'];
        $model->cpf = $_POST['cpf'];
        $model->data_nascimento = $_POST['data_nascimento'];

        $model->save();

        header("Location: /pessoa");
    }
}
?>