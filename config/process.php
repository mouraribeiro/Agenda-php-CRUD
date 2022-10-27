<?php 


session_start();

include_once("connection.php");
include_once("url.php");

$data = $_POST;

/*modificações do banco*/

if(!empty($data)){
    if($data["type"]==="create"){
        $nome = $data["nome"];
        $phone = $data["phone"];
        $observations = $data["observations"];

        $query = "INSERT INTO contacts (nome, phone, observatios) VALUES (:nome, :phone, :observations)";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(":nome", $nome);
        $stmt->bindParam(":phone", $phone);
        $stmt->bindParam(":observations",$observations);

        try{

            $stmt->execute();
            $_SESSION["msg"] = "Contato criado com sucesso.";
        
        }catch(PDOException $e){
            $error = $e->getMessage();
            echo "Erro: $error";
        }
    }else if($data["type"]==="edit"){

        $nome = $data["nome"];
        $phone = $data["phone"];
        $observations = $data["observations"];
        $id = $data["id"];

        $query = "UPDATE contacts SET name = :name, phone = :phone, observations = :observations WHERE id = :id";




        $stmt = $conn->prepare($query);
        $stmt->bindParam(":nome", $nome);
        $stmt->bindParam(":phone", $phone);
        $stmt->bindParam(":observations", $observations);
        $stmt->bindParam(":id", $id);
        $stmt->execute();




        try{

            $stmt->execute();
            $_SESSION["msg"] = "Contato atualizado com sucesso.";
        
        }catch(PDOException $e){
            $error = $e->getMessage();
            echo "Erro: $error";
        }
    }else if($data['type']==="delete"){

        $id = $data['id'];
        $query = "DELETE FROM contacts WHERE id = :id";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(":id", $id);
        $stmt->execute();

        try{

            $stmt->execute();
            $_SESSION["msg"] = "Contato deletado com sucesso.";
        
        }catch(PDOException $e){
            $error = $e->getMessage();
            echo "Erro: $error";
        }



    }
    /*redireciona para a página certa após add*/
    header("Location: ". $BASE_URL . "../index.php");

/*selecao de dados*/
}else{
    //verifica se tem id

$id;
    if(!empty($_GET)){
        $id = $_GET['id'];
    }

    //retorna dado de um contato
    if(!empty($id)){
        
        $query = "SELECT * FROM contacts WHERE id = :id";

        $stmt = $conn->prepare($query);

        $stmt->bindParam(":id",$id);

        $stmt->execute();

        $contact = $stmt->fetch();

    }else{
        //retorna todos os contatos
        $contacts =[];

        $query = "SELECT * FROM contacts";

        $stmt = $conn->prepare($query);

        $stmt->execute();

        $contacts = $stmt->fetchAll();
    }

        

    }

    /*fechar conexão*/
    $conn = null;








?>