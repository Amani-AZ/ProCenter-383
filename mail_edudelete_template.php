<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>HTML email template</title>
	<style>
		
		*{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}

		body{
			font-family: sans-serif;
			min-height: 100vh;
		}

		.page{
			width: 768px;
			margin:  0 auto;
			font-size: 16px;
			color: #555555;
		}

		h1{
			background-color: #f4f4f4;
			padding: 20px;
			margin-top: 20px;
		}

		h2{
			padding: 20px;
		}

		p{
			padding: 10px 20px;
			line-height: 26px;
		}	

		h3{
			padding: 20px;
		}

		table{
			padding: 20px;
			width:  100%;
		}

		table tr{}
		table th{
			text-align: left;
			padding: 10px;
			background-color: #e4e4e4;
		}
		table td{
			border: thin solid #d4d4d4;
			padding: 10px;
		}

		footer{
			padding: 20px;
		}

		footer a{
			text-decoration: none;
			color: #155197;
		}
	</style>
</head>
<body>
	<div class="page">

		<h1>Thank you <?php echo $name ?></h1>
		<br>
		<h2>Your Appoitnment is canceled !</h2>
		<p>We are happy to have you on ProCenter.</p>
		

		<br><br>

		<h3>Appointment Details:</h3>
		<table>
			<tr>
				<th>Educator Name</th>
				<th>Course</th>
				<th>Date</th>
				<th>Time</th>
			</tr>
			<tr>
				<td><?php echo $name ?></td>
				<td><?php echo $coures ?></td>
				<td><?php echo $Date ?></td>
				<td><?php echo $time ?></td>
			</tr>
		</table>
		<br><br><br><br><br><br>
		<hr>
		<footer>
            <a href="http://localhost/CS383-project/ProCenter-383/login.php">ProCenter</a> |
			<a>©2022 All Right Reserved by CSE ProCenter</a>
		</footer>
	</div>
</body>
</html>