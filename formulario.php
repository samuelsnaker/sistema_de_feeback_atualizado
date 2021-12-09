<?php

    if(isset($_POST['submit']))
    {
    include_once('config.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $sexo = $_POST['sexo'];
    $data_nascimento = $_POST['data_nascimento'];
    $sua_experiencia = $_POST['sua_experiencia'];
    $feedback = $_POST['feedback'];

    //Salvar informações no Banco de Dados
    $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,telefone,sexo,data_nascimento,sua_experiencia,feedback)
    VALUES ('$nome','$email','$telefone','$sexo','$data_nascimento','$sua_experiencia','$feedback')");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Avaliação</title>
    <style>
        
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: radial-gradient(circle at 50% 50%, #ff8fbe 0, #fe85b9 25%, #e37ab0 50%, #c970a6 75%, #b1679c 100%);
        }
        .box{
            color: white;
            position:absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 15px;
            border-radius: 15px;
            width: auto;   
        }
        fieldset{
            border: 3px solid #A020F0;
        }
        legend{
            border: 1px solid #A020F0;
            padding: 10px;
            text-align: center;
            background-color: #A020F0;
            border-radius: 8px;
        }
        .inputBox{
            position: relative;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white; 
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }
        .labelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }
        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput{  
            top: -20px;
            font-size: 12px;
            color: dodgerblue;
        }
        #data_nascimento{ 
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }
        #submit{
            background-image: linear-gradient(to right, rgb(0, 92, 197), rgb(90, 20, 220));
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }
        #listar{
            background-image: linear-gradient(to right, rgb(0, 92, 197), rgb(90, 20, 220));
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }
        #submit:hover{
            background-image: linear-gradient(to right, rgb(0, 80, 172), rgb(80, 19, 195));
        }

</style>
    
</head>
<body>
    <div class="box">
        <form action="formulario.php" method="POST" enctype="multipart/form-data">
            <fieldset>
               <legend><b>Formulário de Avaliação</b></legend>
               <br>
               <div class="inputBox">
                   <input type="text" name="nome" id="nome" class="inputUser" required>
                   <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                   <input type="text" name="email" id="email" class="inputUser" required>
                   <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>
                <div class="inputBox">
                   <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                   <label for="telefone" class="labelInput">Telefone</label>
                </div>
                <br>
                <p>Sexo:</p>
                <input type="radio" id="feminino" name="sexo" value="feminino" required>
                <label for="feminino">Feminino</label>
                <input type="radio" id="masculino" name="sexo" value="masculino" required>
                <label for="masculino">Masculino</label>
                <input type="radio" id="outro" name="sexo" value="outro" required>
                <label for="outro">Outro</label>
                <br><br>
                <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                <input type="date" name="data_nascimento" id="data_nascimento" required>
                <br><br>   

 <div class="inputBox">
            <h1 class="digitanome">Como foi sua experiência?</h1>
                 <input type="radio" id="pessima" name="sua_experiencia" value="pessima">
                <label for="pessima"><br>Péssima</br></label>
                <input type="radio" id="ruim" name="sua_experiencia" value="ruim">
                <label for="ruim"><br>Ruím</br></label>
                <input type="radio" id="indiferente" name="sua_experiencia" value="indiferente">
                <label for="indiferente"><br>Indiferente</br></label>
                <input type="radio" id="boa" name="sua_experiencia" value="boa">
                <label for="boa"><br>Boa!</br></label>                
                <input type="radio" id="excelente" name="sua_experiencia" value="excelente">
                <label for="excelente"><br>Excelente!</br></label>  
                <br></br>
                <div class="inputBox">
                   <input type="text" name="feedback" id="feedback" class="inputUser" required>
                   <label for="feedback" class="labelInput">Conte-nos o porquê de sua avaliação</label>
                </div>
                <br></br>
                <input type="submit" name="submit" id="submit" onclick="next()">
                <br></br>
                <input type="hidden" name="id" value="<?php echo $id?>">
                <button onclick="location.href = 'http://localhost/projeto/listagem.php';" id="listar" class="float-left submit-button" >Exibir formulário</button>
        </form>
    </div> 

    
</body>
</html>