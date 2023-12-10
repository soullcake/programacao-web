<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(isset($_POST['nome'], $_POST['matricula'], $_POST['curso'])){

        // passando os valores do formulario para as variaveis: 
        $nome = $_POST['nome'];
        $matricula = $_POST['matricula'];
        $curso = $_POST['curso'];

        // criando instacia do livro e salvando os valores passados nas variaveis: 
        $model = new Aluno(connection());
        $data = $model->salvarAluno($nome, $matricula, $curso);
        
        if ($data) {            
            $_SESSION['nome'] = $nome;
            header('Location: /dashboard');
        }
    } else {
        header('Location: /');
    }
} else {
    header('Location: /');
}