<!DOCTYPE html>
<html>

	<head>
	  <title>Colin Jacques - Home</title>
	  <link href="site.css" rel="stylesheet">
	</head>

	<nav id="nav01"></nav>
	<body>

		<div id="mainPic">
			<img src="https://i.imgur.com/vboSpiu.jpg">
		</div>

		<div class="main">
			<h1> Bio </h1>
		</div>
		<div class="main">
			<h1> Stats </h1>
			<?php
			$dom = new DOMDocument();
			$dom2 = new DOMDocument();
			$dom->loadHTMLFile('http://int.soccerway.com/players/gabriel-jacques-colin/360837/');
			$dom2->loadHTMLFile('http://int.soccerway.com/players/colin-gabriel--jacques/417701/');
			$xml = simplexml_import_dom($dom);
			$xml2 = simplexml_import_dom($dom2);
			//echo $xml->head->title;
			//echo "<br><br>";
			//print_r($xml->body);

			//print_r($xml);
			$stats = array();
			$count = 0;
			$a = $xml->xpath("//*[@class='sub-head']");
			foreach($a as $ar){
				foreach ($ar->children() as $ch) {
					if(strcmp($ch->getName(), "td") == 0){
						$stats[$count] = $ch;
						$count += 1;
					}
				}
			}

			$b = $xml2->xpath("//*[@class='sub-head']");
			$stats2 = array();
			$count2 = 0;

			foreach($b as $arb){
				foreach($arb->children() as $chb){
					if(strcmp($chb->getName(),"td") == 0){
						$stats2[$count2] = $chb;
						$count2 += 1;
					}
				}
			}

			/*foreach($stats as $value){
				echo $value."	";
			}
			echo "<br>";
			foreach($stats2 as $value2){
				echo $value2."	";
			}*/
			echo "<table class='stats'>";
			echo "<tr>";
			echo "<th> Year </th>";
			echo "<th> Competition </th>";
			echo "<th> Minutes Played </th>";
			echo "<th> Appearances </th>";
			echo "<th> Lineups </th>";
			echo "<th> Substitute in </th>";
			echo "<th> Substitute out </th>";
			echo "<th> Substitutes on bench </th>";
			echo "<th> Goals </th>";
			echo "<th> Yellow card </th>";
			echo "<th> 2nd Yellow/Red </th>";
			echo "<th> Red card </th>";
			echo "</tr>";
			echo "<tr>";
			echo "<td> 2014/2015 </td>";
			foreach($stats as $value){
				echo "<td> ".$value." </td>";
			}
			echo "</tr>";
			echo "<tr>";
			echo "<td> 2015/2016 </td>";
			foreach($stats2 as $value2){
				echo "<td> ".$value2." </td>";
			}
			echo "</tr>";
			echo "</table>";
			?>			
		</div>

	</body>
	<script src="script.js"></script>
</html>