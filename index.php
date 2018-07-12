<?php

	$jsonString = file_get_contents(__DIR__ . '/persons.json');
	$persons = json_decode($jsonString, true);
?>


<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Homework</title>
	<style>
		td {
			padding: 10px 15px;
			border: solid black 1px;
		}
		table {
			margin: 0 auto;
		}
	</style>
</head>
<body>
	<table>
		<thead>
			<tr>
				<td>Номер</td>
				<td>Имя</td>
				<td>Фамилия</td>
				<td>Город</td>
				<td>Дом</td>
				<td>Квартира</td>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($persons as $info) { ?>	
			<tr>
				<td><?php echo $info["ID"];?></td>
				<td><?php echo $info["lastName"]?></td>
				<td><?php echo $info["firstName"]?></td>
				<td><?php echo $info["city"]?></td>
				<td><?php echo $info["addres"]["home"]?></td>
				<td><?php echo $info["addres"]["apartament"]?></td>
			</tr>
			<?php } ?>
		</tbody>

	</table>


</body>
</html>	