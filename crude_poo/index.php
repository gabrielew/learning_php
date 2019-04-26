<?php 

    require 'contato.class.php';

    $contato = new Contato();
?>  

    <h1 style="text-align:center"> Contatos </h1>
    <a href = "adicionar.php"> [ADICIONAR] </a> <p></p>
    <table border ='1' width = "600" >
        <tr>
            <th> ID </th>
            <th> NOME </th>
            <th> EMAIL </th>
            <th> AÇÕES </th>
        </tr>

        <?php
            $list = $contato->selectAll();
            foreach ($list as $item):
        ?>
                <tr>
                    <td> <?php echo $item['id_contato']; ?> </td>
                    <td> <?php echo $item['nome']; ?> </td>
                    <td> <?php echo $item['email']; ?> </td>
                    <td>
                        <a href = "editar.php?id_contato=<?php echo $item['id_contato']; ?>"> [EDITAR] </a>
                        <a href = "excluir.php?id_contato=<?php echo $item['id_contato']; ?>"> [EXCLUIR] </a>
                    </td>
                </tr>
            <?php endforeach; ?>        

    </table>

