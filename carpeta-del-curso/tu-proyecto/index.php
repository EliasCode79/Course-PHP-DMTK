<?php

    error_reporting( E_ALL );           //para reportar errores
    ini_set('display_errors', 1);       // para mostar los errores
    setlocale(LC_TIME, 'es');           // estable el idioma en mostrar los datos en php en este caso le indiamos español
    date_default_timezone_set('Australia/Sydney');      // Establece la zona horario 
    
    // strtotime('2018-10-01 15:00:00')  Esta funcion traduce la fechas a numeros(segundos)
    // strftime('%d %b %Y', "fecha en segundos") esta funcion muestra las fechas en español, en 1er parametro le indicamos como queremos q nos muestre, el 2do parametro es la fecha en numeros. Si no le pasamos el segundo parametro nos mostrara la fecha actual.



    // function post_1_title(){
    //     $post_title_1 = "titulo 1 de mi posts";
    //     return $post_title_1;
    // }

    // function post_1_content(){
    //     $post_content_1 = "lorrem ipsum nosdv svosns vsovnsodvnso sdovnsodvsn osdnvosnvosdnvsodvn hubo un erro y no lo detecto bieva es una prueba";
    //     return $post_content_1;
    // }
    
    // function post_2_title(){
    //     $post_title_2 = "titulo de mi 2 posts";
    //     return $post_title_2;
    // }
    
    // function post_2_content(){
    //     $post_content_2 = "tod esto el contenido de php para ver si fucioa bien comenzamos con nuestras entradas bien vamonso";
    //     return $post_content_2;
    // }

    // define('CONSTANTE','siempre');

    // function saludo($nombre){
    //     return "Welcome " .$nombre;
    // }

    // function el_dia_de_hoy(){
    //     return "hoy es " . date("l");
    // }

    // function incremento($num, $inc = 5){
    //     echo $num + $inc;
    // }

    // $sudo = "super_usuario";
    // function class_global(){
    //     global $sudo;
    //     echo "hola " . $sudo;
    // }

    // my_function();

    $all_post = [
        [
            'id' => 1,
            'title' => 'Lorem ipsun title 1',
            'excerpt' => 'excerpt test1 nonosdvsdvs dnvsodvns sovnsodvnsodvons vosnvsadvnsadvnposavnsañdvon ',
            'content' => 'contenido de este post1 npsodnvosno nosdvnsdov',
            'published_on' => '2018-11-01 10:15:00'
        ],
        [
            'id' => 2,
            'title' => 'title 2',
            'excerpt' => 'excerpt test1 osefjose nosdnvos snosdnvosdvnsodn osnvosnvdo',
            'content' => 'contenido de este post1 npsodnvosno nonosdvsdvs dnvsodvns  n nosdvnsdov sovnsodvnsodvons vosnvsadvnsadvnposavnsañdvon snovs snovsnvosa tes',
            'published_on' => '2016-05-01 10:35:00'
        ],
        [
            'id' => 3,
            'title' => 'title 3',
            'excerpt' => 'excerpt test1 osefjose nosdnvos snosdnvosdvnsodn osnvosnvdo',
            'content' => 'HELLO WORLD contenido de este post1 npsodnvosno nonosdvsdvs dnvsodvns  n nosdvnsdov sovnsodvnsodvons vosnvsadvnsadvnposavnsañdvon snovs snovsnvosa tes',
            'published_on' => '2016-05-01 10:35:00'
        ]
    ];

    //Funcion para encontrar un post 
    $post_fount = false;
    if(isset( $_GET['view'])){
        foreach( $all_post as $post ){
            if( $post['id'] == $_GET['view'] ){
                $post_fount = $post;
            }
        }
    }


    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <title>Micro CMS</title>
</head>
<body>
    <nav id="site-navigation" role="navegation" class="row row-center">
        <div class="column">
            <h1>
                <a href="index.php">Micro CMS</a>
            </h1>
            <ul class="main-menu column clearfix"></ul>
        </div>
    </nav>
    <div id="content">
        <div class="posts">
            <?php foreach ($all_post as $post): ?>
            <article>
                <header>
                    <h2><?php echo $post['title'] ?></h2>
                </header>
                <div class="post-content">
                    <?php  echo $post['content'] ?>
                </div>
                <footer>
                    <span>Publicada en: </span>
                    <?php echo strftime('%d %b %Y',strtotime($post['published_on'])); echo '<br>';?>
                    <?php echo strftime('%d %b %Y %H %M %S'); ?>
                </footer>
            </article>
            <?php endforeach; ?>
        </div>
    </div>

    <footer id="footer">
        <div class="inner-footer">
            Curso de introducciona PHP
        </div>
    </footer>
</body>
</html>
