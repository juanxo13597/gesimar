<?php		
	$keyword = strval($_POST['query']);
	$search_param = "%{$keyword}%";
	$conn =new mysqli('localhost', 'root', '' , 'gesimar');

	$sql = $conn->prepare("SELECT * FROM clientes WHERE nombre LIKE ?");
	$sql->bind_param("s",$search_param);			
	$sql->execute();
	$result = $sql->get_result();
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
		$cliente[] = $row["nombre"];
		}
		echo json_encode($cliente);
	}
	$conn->close();
?>