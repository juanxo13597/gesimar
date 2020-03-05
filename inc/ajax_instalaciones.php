<?php		
	$keyword = strval($_POST['query']);
	$search_param = "%{$keyword}%";
	$conn =new mysqli('localhost', 'root', '' , 'gesimar');

	$sql = $conn->prepare("SELECT * FROM instalaciones I, clientes C WHERE I.cliente = C.id && direccion LIKE ?");
	$sql->bind_param("s",$search_param);			
	$sql->execute();
	$result = $sql->get_result();
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
		$instalacion[] = $row["direccion"];
		}
		echo json_encode($instalacion);
	}
	$conn->close();
?>