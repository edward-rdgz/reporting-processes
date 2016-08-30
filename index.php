<html>
<head>
	<meta charset="utf-8">
	<title>Reporte</title>
	<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
	<script>
		$(document).ready(function(e){
		//$("body").html("<H1>Bonjour Monde!!</H1>");
			$.ajax({
				url:"query.php",
				type:"POST",
				dataType:"json",
				success: function(data){
					//$("body").html(data);
					$.each($(data),function(i,e){
					$("#resultado").append("<tr><td>"+data[i].Usuario+"</td><td>"+data[i].Proceso+"</td>"+"<td>"+data[i].Acceso+"</td>"+"<td>"+data[i].SoloLectura+"</td><td>"+data[i].AlDia+"</td></tr>");
					});
				}
			});
		});
	</script>
</head>
<body>
	<table id="resultado" width="262" border="1" align="center">
		<tr>
			<th>Usuario</th>
			<th>Proceso</th>
			<th>Acceso</th>
			<th>Lectura</th>
			<th>Día</th>
		</tr>
	</table>
</body>
</html>