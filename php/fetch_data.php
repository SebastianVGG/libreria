<?php

// configuration
include("config.php");

$limit = 8;

	if (isset($_POST['page_no'])) {
		$page = $_POST['page_no'];
	}else{
		$page = 0;
	}

	if (isset($_GET['categoria'])) 
		$categoria_get = $_GET['categoria'];

if($categoria_get == "terror")
    $id_categoria = 1;

    if($categoria_get == "ciencia_ficcion")
    $id_categoria = 2;

    if($categoria_get == "infantil")
    $id_categoria = 3;

    if($categoria_get == "drama")
    $id_categoria = 4;

    if($categoria_get == "novela")
    $id_categoria = 5;

    if($categoria_get == "romance")
    $id_categoria = 6;

// selecting posts
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
$html .= "<div id='pagination'>
<button class='btn btn-success loadbtn' data-id='{$last_id}'>Load More</button></td>
</div>";
echo $html;
}
?>
