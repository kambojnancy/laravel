<html>
	<head>
		<title>Laravel Data Insertion</title>
	</head>
	<body>
		<center>
			<form action="insert" method="post" >
				@csrf
				<table>
					<tr>
						<td>Name: </td>
						<td>
							<input type="text" name="name">
						</td>
					</tr>
					<tr>
						<td>password: </td>
						<td>
							<input type="password" name="password">
						</td>
					</tr>
					<tr>
						<td>Email:</td>
						<td>
							<input type="text" name="email">
						</td>
					</tr>
					<tr>
						<td><input type="submit" name="add" value="add"> </td>
						
					</tr>
				</table>
				
			</form>
		</center>
	</body>

</html>