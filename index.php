

<!DOCTYPE html>
<html>
<head>
	<title>Raid Icam</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="retrouvez le site web de l'association Raid Icam"/>
	<link rel="shortcut icon" href="library/img/favicon.ico"> 
	<link rel="stylesheet" href="app/style/index.css">

</head>
<body>
	<div class="background">
		<img src="/library/img/fond_index.png">
	</div>
	<div id="casque" class="pivot">
		<img src="/library/img/casque.png">
	</div>
	<div id="cache"></div>
	<div id="corps" onmousemove="changement_angle(event)">
		<section class="column" id="trail">
			<div class="explication explication_trail">
				C'est court, c'est intense, c'est le Trail Icam !!
			</div>
			<div class="container" onmouseover="aff_contenu('trail')" onmouseout="cacher_contenu('trail')">
				<img src="/library/img/trail.png">
			</div>
		</section>
		<section class="column path">
			
		</section>
		<section class="column" id="raid">
			<div class="explication explication_raid">
				C'est sport, c'est sur un Week end, c'est le Raid Icam !!
			</div>
			<div class="container" onmouseover="aff_contenu('raid')" onmouseout="cacher_contenu('raid')">
				<img src="/library/img/raid.png">
			</div>
		</section>
	</div>
</body>
<script src="app/style/default.js"></script>
<script src="app/style/index.js"></script>

</html>