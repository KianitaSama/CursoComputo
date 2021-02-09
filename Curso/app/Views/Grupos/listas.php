<?php
//Si se ha pulsado el botón de buscar
if (isset($_POST['search'])) {
    //Recogemos las claves enviadas
    $keywords = $_POST['Buscar'];

    //Conectamos con la base de datos en la que vamos a buscar
    $conexion = mysql_connect("localhost", "root", "");
    mysql_select_db("login", $conexion);

    $query = "SELECT InicioC, Inombre as InicioC
                FROM registro
                WHERE status = '1'
                AND (contenido LIKE '%" . $keywords . "%'
                OR Inombre LIKE '%" . $keywords . "%')
                ORDER BY InicioC ";

    $query_searched = mysql_query($query, $conexion);

    $count_results = mysql_num_rows($query_searched);

    //Si ha resultados
    if ($count_results > 0) {

        echo '<h2>Se han encontrado '.$count_results.' resultados.</h2>';

        echo '<ul>';
        while ($row_searched = mysql_fetch_array($query_searched)) {
            
            echo '<li><a href="#">'.$row_searched['Inombre'].' ('.$row_searched['InicioC'].')</a></li>';
        }
        echo '</ul>';
    }
    else {
        //Si no hay registros encontrados
        echo '<h2>No se encuentran resultados con los criterios de búsqueda.</h2>';
    }
}
?>