	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Tickets</title>
		<link rel="stylesheet" href="css/tickets.css?v=1">
		<link rel="icon" sizes="32*32" href="./img/Screenshot_2024-03-01_221406-removebg-preview.png">
			
	</head>
	<body>

	<?php 
include 'adminconfig.php';
$id = intval($_GET['bkid']);
$sql = "SELECT b.*, p.* FROM book b JOIN packages p ON b.PackageId = p.PackageId WHERE b.id=:id";
$query = $dbh->prepare($sql);
$query->bindParam(':id', $id, PDO::PARAM_INT); 
$query->execute();
$results = $query->fetchAll(PDO::FETCH_OBJ);
$cnt = 1;
if($query->rowCount() > 0) {
    foreach($results as $result) { 
?>
	<!-- <div class="container"> -->

		
	</div>

	<!--  -->

	<div class="ticket">
		<div class="left">
			<div class="image">
				<img src="uploads/<?php echo htmlentities($result->PackageBgImage);?>" alt="">
				<div class="bkid">
					<p>
					<?php echo htmlentities($result->id);?>
					</p>
				</div>
			</div>
			<div class="ticket-info">
				<p class="date">
					
					<span class="june-29"></span>
					<span class="june-29"></span>
				</p>
				<div class="show-name">
					<h1><?php echo htmlentities($result->PackageName);?></h1>
				</div>
				<div class="time">
					<p><?php echo htmlentities($result->booking_from_date);?><span>TO</span> <?php echo htmlentities($result->booking_till_date);?></p>
					<!-- <p>DOORS <span>@</span> 7:00 PM</p> -->
				</div>
				<p class="location"><span><?php echo htmlentities($result->firstname);?></span>
					<span class="separator"><i class="far fa-smile"></i></span><span><?php echo htmlentities($result->email);?></span>
				</p>
			</div>
		</div>
		<div class="right">
			<!-- <p class="admit-one">
				<span>ADMIT ONE</span>
				<span>ADMIT ONE</span>
				<span>ADMIT ONE</span>
			</p> -->
			<div class="right-info-container">
				<div class="show-name">
					<h1>SOUR Prom</h1>
				</div>
				<div class="time">
					<p>8:00 PM <span>TO</span> 11:00 PM</p>
					<p>DOORS <span>@</span> 7:00 PM</p>
				</div>
				<div class="barcode">
					<img src="https://external-preview.redd.it/cg8k976AV52mDvDb5jDVJABPrSZ3tpi1aXhPjgcDTbw.png?auto=webp&s=1c205ba303c1fa0370b813ea83b9e1bddb7215eb" alt="QR code">
				</div>
				<p class="ticket-number">
					#20030220
				</p>
			</div>
		</div>
	</div>
<?php }}?>
	</body>
	</html>

