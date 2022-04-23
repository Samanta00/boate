
<?php
include_once("conexao.php");
  $nome = $_POST['nome'];
  $email = $_POST['email']; 
  $comentario = $_POST['comentario'];
  $sql = "INSERT INTO comentarios_boate (nome, email, comentario)
          VALUES ('$nome','$email','$comentario');";


  $salvar = mysqli_query($conexao,$sql);

  $linhas = mysqli_affected_rows($conexao);

  mysqli_close($conexao);

        if($linhas == 1){
        echo "<h3>Sucesso! Formulario Enviado: </h3> <br>
    <h5>Preenchido por: $nome - <br>
        email: $email -  <br>
        comentario :$comentario -  Em: $cidade - <br>

    </h5>";

    "<div>
    <img class='imagem-comentario' src='img/WhatsApp Image 2022-04-22 at 15.46.20.jpeg' width='5%' height='10%'>
    <div class='informacoes'>
      <h4>Nome: $nome</h4>
      <h5>Comentário: $comentario</h5>
    </div>
    </div>
    <hr width='100%'> 
    <div>";
               }
                else
               {  
            echo "<h2>Erro!</h2><h5>Consulte um Administrador:</h5>";
              }
           header("Location:contato.html");       
?>




