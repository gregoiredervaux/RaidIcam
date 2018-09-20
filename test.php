<!DOCTYPE html>
<html>
<head>
	<title>Information pratiques</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="retrouvez le site web de l'association Raid Icam"/>
	<link rel="stylesheet" href="/app/style/default.css">
	<style>

	#facture{
		display:flex;
		justify-content: flex-end;
		flex-direction: column;
		align-items: flex-end;
		background: white;
	}

	table{
		border-spacing:0;
		margin: 2%;
	}

	.head{
		background-color: grey;
		border-top-right-radius: 1.5em;
		border-top-left-radius: 1.5em;
		font-family: seguoi;
	}

	th{
		padding: 1%;
		border-right-style: solid;
		border-right-width: 1px;
		border-right-color: #404040;
		border-left-style: solid;
		border-left-width: 1px;
		border-left-color: #404040;
		font-family: seguoil;
		text-align: right;
		min-width: 100px;
	}

	.head th{
		text-align: left;
		border-top-style:solid;
		border-top-width: 1px;
		border-color: #404040;

	}
	
	#recap_facture .head .premier{
		min-width: 200px;
	}

	#facture p{
		color:grey;
		font-size: 0.7em;
	}

</style>
</head>
<body>
	<div id="facture">
		<table id="recap_facture">
			<tr class="head">
				<th class="premier">désignation</th>
				<th>prix unitaire</th>
				<th>quantitée</th>
				<th>Montant H.T</th>
			</tr>
			<tr class="ligne">
				<th class="premier">part. tiote foulée</th>
				<th>15€</th>
				<th>1</th>
				<th>15€</th>
			</tr>
			<tr class="ligne">
				<th class="premier">frais bancaires</th>
				<th>1€</th>
				<th>1</th>
				<th>1€</th>
			</tr>
		</table>
		<table id="prix_facture">
			<tr class="head">
				<th>CT</th>
				<th>Montant</th>
			</tr>
			<tr class="ligne">
				<th>H.T</th>
				<th>16€</th>				
			</tr>
			<tr class="ligne">
				<th>TVA</th>
				<th>*0%</th>
			</tr>
			<tr class="ligne">
				<th>T.T.C</th>
				<th>16€</th>
			</tr>
		</table>
		<p>*en tant que association à but non lucratif, nous ne sommes pas assujéttie à la TVA</p>
	</div>
</body>
</html>