<?php include("cabecalho.php");
      include("servidor.php");
       ?>

<?php
    $comando="SELECT * FROM clientes";
    $enviar=mysqli_query($conn, $comando);

    if (mysqli_num_rows($enviar)>0) {
        $resultado=mysqli_fetch_all($enviar);
            
                foreach ($resultado as $clientes) :
?>
    <tr>
        <td><?php echo $clientes['cd_cliente'];?></td>
        <td><?php echo $clientes['nome_cliente'];?></td>
        <td><?php echo $clientes['rg'];?></td>
        <td><?php echo $clientes['fone'];?></td>
        <td><a href="removecliente.php?cd_cliente=<?=$clientes['cd_cliente']?>">Remover</a></td>
        <td>
            <form action="removechave.php" method="post">
                <input type="hidden" name="id" value="<?=$produto['id']?>" />
                <button>Remover</button>
            </form>
        </td>
    </tr>
    <?php
        endforeach;
    }else{
        echo "não achou";

}
    ?>
