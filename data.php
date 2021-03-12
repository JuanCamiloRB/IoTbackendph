<?php
header('Content-Type: application/json');
$con = mysqli_connect("localhost", "root", "", "u209033975_hega");

if (mysqli_connect_errno($con)) {
    echo "Failed to connect to DataBase: " . mysqli_connect_error();
} else {
    $data_points = array();
    $result = mysqli_query($con, "SELECT * FROM detallenodo"); 
    while ($row = mysqli_fetch_array($result)) {
        $point = array("idnodo" => $row['id_detallenodo'], "temperatura" => $row['d_temperatura'],"humedad" => $row['d_humedad']);
        array_push($data_points, $point);
    }
    echo json_encode($data_points);
}
mysqli_close($con);

?>