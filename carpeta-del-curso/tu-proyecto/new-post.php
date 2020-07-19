<?php require ('init.php'); ?>
<?php require ('templates/header.php'); ?>

<?php


$error = false;
$title = '';
$excerpt = '';
$content = '';

if( isset($_POST['submit-new-post']) ){     //   "isset" es una funcion q pregunta si existe, "empty" es otra function q pregunta si esta vacia
    $title = $_POST['title'];
    $excerpt = $_POST['excerpt'];
    $content = $_POST['content'];

    if( empty($title) || empty($content) ){
        $error=true;
    }
    else{
        $new_post = [
            'id' => 0,
            'title' => $title,
            'excerpt' => $excerpt,
            'content' => $content,
            'published_on' => date('Y-m-d H:i:s')
        ];

        // var_dump($new_post);
        die('formulario enviado'); 
    }
}

?>
<h2>Crear nuevo POST</h2>
<?php if($error): ?>
<div class="error">Error en el formulario</div>
<?php endif; ?>    
<form action="" method="POST">
    <label for="title">Titulo (Requerido) </label>
    <input type="text" id="title" name="title" value="<?php echo $title; ?>">

    <label for="excerpt">Extrato </label>
    <input type="text" id="excerpt" name="excerpt" value="<?php echo $excerpt; ?>">

    <label for="contet">Contenido (Requerido) </label>
    <textarea name="content" id="content" cols="30" rows="10"><?php echo $content; ?></textarea>

    <p>
        <input type="submit" name="submit-new-post" value="Nuevo post">
    </p>
</form>

<?php require ('templates/footer.php'); ?>



