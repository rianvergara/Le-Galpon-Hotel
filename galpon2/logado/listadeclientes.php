<?php
    session_start();
    require_once("servidor.php");
    require_once("cabecalho.php");

    $comando="SELECT * FROM clientes";
    $enviar=mysqli_query($conn, $comando);
    
    if (mysqli_num_rows($enviar)>0) {
        $resultado=mysqli_fetch_all($enviar);
        // echo "<pre>";
        // var_dump($resultado);
        // echo "</pre>";
        // die(); 

        if(!empty($_SESSION['mensagem'])) {
        echo $_SESSION['mensagem'];
        unset($_SESSION['mensagem']);
    }
?>
    <table>
        <tr>
            <th>Código do Cliente</th>
            <th>Nome</th>
            <th>RG</th>
            <th>Fone</th>
        </tr>

        <?php

    foreach ($resultado as $cliente) :
        // echo "<pre>";
        // var_dump($quarto);
        // echo "</pre>";
?>
        <tr>
            <td><?php echo $cliente['0'];?></td>
            <td><?php echo $cliente['3'];?></td>
            <td><?php echo $cliente['1'];?></td>
            <td><?php echo $cliente['2'];?></td>
            <td><a href="editacliente.php/?cliente=<?php echo $cliente['0'];?>"><button>Editar</button></td>
            <td><a href="excluircliente.php/?cliente=<?php echo $cliente['0'];?>"><button>Excluir</button></td>
        </tr>

<?php
    endforeach;
?>

    </table>

<?php
}
?>
<a href="index.php">Voltar</a>