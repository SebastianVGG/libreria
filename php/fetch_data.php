<?php

// configuration
include("config.php");

$limit = 8;
$formato_ebook = false;
$novedades = false;
$novedades_ebook = false;

	if (isset($_POST['page_no'])) {
		$page = $_POST['page_no'];
	}else{
		$page = 0;
	}

	if (isset($_GET['categoria'])) 
		$categoria_get = $_GET['categoria'];

switch ($categoria_get) {
    case "terror":
        $id_categoria = 1;
        break;
    case "ciencia_ficcion":
        $id_categoria = 2;
        break;
    case "romance":
        $id_categoria = 3;
        break;
    case "fantasia":
        $id_categoria = 4;
        break;
    case "clasico":
        $id_categoria = 5;
        break;
    case "accion":
        $id_categoria = 6;
        break;
    case "no_ficcion":
        $id_categoria = 7;
        break;
    case "novelas_cuentos":
        $id_categoria = 8;
        break;

    case "ebook_terror":
        $id_categoria = 1;
        $formato_ebook = true; 
        break;
    case "ebook_ciencia_ficcion":
        $id_categoria = 2;
        $formato_ebook = true; 
        break;
    case "ebook_romance":
        $id_categoria = 3;
        $formato_ebook = true; 
        break;
    case "ebook_fantasia":
        $id_categoria = 4;
        $formato_ebook = true; 
        break;
    case "ebook_clasico":
        $id_categoria = 5;
        $formato_ebook = true; 
        break;
    case "ebook_accion":
        $id_categoria = 6;
        $formato_ebook = true; 
        break;

    case "novedades":
        $novedades = true;
        break;
    case "novedades_ebook":
        $novedades_ebook = true;
        break;
}

if($novedades)
    $sql = "SELECT * FROM libro ORDER BY id DESC limit 0, $limit";
elseif($novedades_ebook)
    $sql = "SELECT * FROM libro WHERE formato = 'ebook' ORDER BY id DESC limit 0, $limit";
elseif($formato_ebook)
    $sql = "SELECT * FROM libro where id_categoria = $id_categoria and formato = 'ebook' limit  $page, $limit";
    
else
    $sql = "SELECT * FROM libro where id_categoria = $id_categoria limit $page, $limit";


$query = $link->query($sql);
if ($query->num_rows > 0) {
    $html = '';
while($row = $query->fetch_assoc()){
    $last_id = $row['id'];
          $url = $row['img'];
          $titulo = $row['titulo'];
          $precio = $row['precio'];
          $get_id_autor = $row['id_autor'];
          $get_autor = $link->query("SELECT * FROM autor WHERE id = $get_id_autor");
          $autor = $get_autor->fetch_all(MYSQLI_ASSOC);
    // Creating HTML structure
    $html .='<div class="col">';
    $html .='<div class="card">';
    $html .='<a href="vista_libro.php?id='.$last_id.'"><img src="'.$url.'" class="card-img-top" /></a>';
    $html .='<div class="card-body">';
    $html .='<a href="vista_libro.php?id='.$last_id.'"><h5 class="card-title text-center pt-1"><span>'.$titulo.'</span></h5></a>';
    $html .='<h6 class="card-text text-center pt-2">';
    $html .='<span class="autor">Autor </span><span class="autor_nombre fw-bold">'.$autor[0]['nombre'].'</span>';
    $html .='</h6>';
    $html .='<h3 class="card-text text-center libro_precio pt-5">$'.$precio.'</h3>';
    $html .='</div>';
    $html .='</div>';
    $html .='</div>';

}

if($novedades or $novedades_ebook){
    echo $html;
}else{
    $html .= "<div id='pagination'>
    <button class='btn loadbtn ' data-id='{$last_id}'>Ver más contenido</button>
    </div>";
    echo $html;
}

}
?>
