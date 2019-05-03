<!DOCTYPE html>
<html>
<head>
	<title> <?php echo $page_title ?> </title>
</head>
<body>

    <strong>Postagem</strong>:<p></p>
    <input class="form-control" type="text" name="titulo" /><p></p>
    <input class="btn btn-success" type="submit" value="Enviar" />

    <table>
        <tr>
            <th> ID </th>
            <th>Titulo</th>
        </tr>

    <?php foreach ($titulo as $post) { ?>
        <tr>
            <td> <?php echo $post->id ?> </td>
            <td> <?php echo $post->titulo ?> </td>
        </tr>
    <?php } ?>

    </table>
</body>
</html>
