<?php 

    require 'contato.class.php';

    $contato = new Contato();
?>  

    <h1 style="text-align:center"> Contatos </h1>

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
                        <a href = ""> [EDITAR] </a>
                        <a href = "excluir.php?id=<?php echo $item['id_contato'] ?>"> [EXCLUIR] </a>
                    </td>
                </tr>
            <?php endforeach; ?>        

    </table>

