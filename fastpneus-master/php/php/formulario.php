<?php
    $nome = $_POST["nome"];
    $telefone = $_POST["telefone"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    
            $conexao = mysqli_connect('localhost','root','','fastpneus') or die("Erro ao Conectar");
            $string = "INSERT INTO cliente VALUES";
            $string .="('$nome','$telefone','$email','$senha')";
            mysqli_query($conexao,$string) or die("Erro ao Cadastrar");
            ?>
            <script type="text/javascript">
                alert('Cadastro Efetuado com Sucesso!');
                window.location.href = "../index.html";
            </script>
            
<?php