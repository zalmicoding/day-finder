
<!doctype html>
<html lang="en">
  <head>
	<title>Title</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	  
	


	<link rel="stylesheet" href="style.css">
	

	<title>day finder</title>
</head>
<body >
<div id="card">
	<h1>DAY FINDER</h1>
<form action="" method="POST" id="form" class="col-8" >
	<div class="form-group">
	 
	  <input type="number"
		class="form-control" name="num" id="" aria-describedby="helpId" placeholder="enter day number">
	  
	</div>

	<button type="submit" name="submit"  class="btn btn-danger">Submit</button>

</form>

<?php

if (isset($_POST['submit']))
{
	$weekday=$_POST['num'];

	switch ($weekday) {
		case 1:

		echo "today is monday";
			break;
			case 1:

		echo "today is monday";
			break;
			case 2:

		echo "today is tuesday";
			break;
			case 3:

		echo "today is wednesday";
			break;
			case 4:

		echo "today is thursday";
			break;
			case 5:

		echo "today is friday";
			break;
			case 6:

		echo "today is satureday";
			break;
			case 7:

		echo "today is sunday";
		break;
		default:
			echo "enter a valid number";
			break;
	}
}

?>
</div>

<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>