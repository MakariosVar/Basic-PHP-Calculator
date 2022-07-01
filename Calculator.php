<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Calculator</title>


		<style>
			html, body {
    				height: 100%;
			}

			html {
			    display: table;
			    margin: auto;
			}

			body {
			    display: table-cell;
			    vertical-align: middle;
			}
			p {
				text-align:center;
				font-size:30px;
			}
		</style>
	</head>
	

	<body>
	<form>
		<input type="number" name="num1" placeholder="Number 1">
		<input type="number" name="num2" placeholder="Number 2">
		<select name="operator">
			<option>None</option>
			<option>Add</option>
			<option>Subtract</option>
			<option>Multiply</option>
			<option>Divide</option>
		</select>	
		
		<button type="submit" name="submit" value="submit">Calculate</button>
	</form>
	
	<p>The Answer is :</p>
	<?php 
		if (isset($_GET['submit'])) {
			$result1=$_GET['num1'];
			$result2=$_GET['num2'];
			$operator=$_GET['operator'];
			switch ($operator) {
				case "None":
					echo "<p>Select Metod</p>";
				break;
				case "Add":
					echo "<p>".$result1 + $result2."</p>";
				break;
				case "Subtract":
					echo "<p>".$result1 - $result2."</p>";
				break;
				case "Multiply":
					echo "<p>".$result1 * $result2."</p>";
				break;
				case "Divide":
					echo "<p>".$result1 / $result2."</p>";
				break;
			}
		}

	?>

	</body>
</html>