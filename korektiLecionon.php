<?php
include "util.php";
$pagxtitolo="Détails leçon";
$korpo="informoj";
$persono_id=$_SESSION["persono_id"];
if ($persono_id=="") {header("Location:index.php?erarkodo=8");}
$persono = apartigiPersonon($persono_id);
$kurso=isset($_GET["kurso"])?$_GET["kurso"]:"";
$leciono=isset($_GET["numleciono"])?$_GET["numleciono"]:"";
$studanto_id=isset($_GET["studanto"])?$_GET["studanto"]:"";
if ($studanto_id==""){header("Location:miajlernantoj.php?erarkodo=23");}
$studanto = apartigiPersonon($studanto_id);
include "pagxkapo.inc.php";
?>

	<div class="row">
		<article class="col s12 m9 l6 offset-m1 offset-l1">
			<h1>Détails de la leçon de <?=$studanto["enirnomo"]?></h1>

<h2>Introduction</h2>
<textarea></textarea>

<?php



$query = "select ekzercoj.id,ekzercoj.komando from ekzercoj join lecioneroj on lecioneroj.id=ekzercoj.lecionero_id join lecionoj on lecionoj.id=lecioneroj.leciono_id where kurso='".$kurso."' and numero='".$leciono."'";
$result = $bdd->query($query);
while ($row=$result->fetch()) {
	echo "<p class=\"parto\">";
	echo "<strong>EXERCICE : </strong>".$row["komando"];
	echo "</p>";
	$ekzerco_id = $row["id"];
	$query2 = "select ekzerceroj.numero,ekzerceroj.demando,respondoj.respondo,respondoj.gxusta from ekzerceroj left join respondoj on ekzerceroj.id=respondoj.ekzercero_id where persono_id=".$studanto_id." and ekzerceroj.ekzerco_id='".$ekzerco_id."' order by ekzerceroj.kodo";
	$result2 = $bdd->query($query2);
	while ($row2=$result2->fetch()) {
		echo "<p>".$row2["numero"].". ".$row2["demando"]."<br>\n";
		if ($row2["gxusta"]==1) {
			echo "<span style=\"color:green\">".$row2["respondo"]."</span></p>\n";	
		} else {
			echo "<span style=\"color:blue\">".$row2["respondo"]."</span></p>\n";
			echo "<p><label><input type=\"checkbox\" class=\"filled-in\" id=\"expediteur_ikurso\" name=\"expediteur_ikurso\" />";
      		echo "<span>bonne réponse</span></label></p>";
			echo "<input type='checkbox'><input>";
		}
}
	
}

// on affiche le commentaire de l'élève qui est stocké en base
$query = "SELECT komentario  FROM personoj_lecionoj join lecionoj on lecionoj.id=personoj_lecionoj.leciono_id where persono_id= ".$studanto_id." and numero=".$leciono;
$result = $bdd->query($query);
$row=$result->fetch();
echo "<h3>Commentaire de l'élève</h3>";
echo $row["komentario"];

// on ajoute un bouton pour renvoyer la leçon


?>
<h2>Conclusion</h2>
<textarea></textarea>

	<section id="leciono-fino">
			<div id="marko" class="right-align">
				<p>
				<a id="korektiLecionon_button" class="waves-effect waves-light btn tooltipped light-blue darken-1" href="korektiLecionon.php?leciono=<?=$leciono?>&kurso=<?=$kurso?>&studanto=<?=$studanto_id?>" data-kurso="<?=$kurso?>" data-leciono="<?=$leciono?>" data-studanto="<?=$studanto_id?>" data-position="top" data-delay="50" data-tooltip="Corriger cette leçon en ligne">Corriger cette leçon en ligne</a>
</p>
<p>

				<a id="resendiLecionon_button" class="waves-effect waves-light btn tooltipped light-blue darken-1 " data-kurso="<?=$kurso?>" data-leciono="<?=$leciono?>" data-studanto="<?=$studanto_id?>" data-position="top" data-delay="50" data-tooltip="Renvoyer cette leçon par mail">Renvoyer cette leçon par mail</a>
				 <p>
      			<input type="checkbox" id="expediteur_ikurso" name="expediteur_ikurso" value="expediteur_ikurso" />
      			<label for="expediteur_ikurso">Avec ikurso@esperanto-france.org comme expéditeur</label>
    			</p>
    		</p>
			</div>

		</section>
	</article>

		
		<aside class="col s12 m10 l3 offset-m1 push-l1">


			<ul class="collapsible" data-collapsible="expandable">

			<li class="active">
				<div class="collapsible-header"><i class="material-icons">toc</i>Leçons de l'élève</div>

<?php

$query = "SELECT numero,kurso,titolo  FROM `personoj_lecionoj` join lecionoj on lecionoj.id=personoj_lecionoj.leciono_id WHERE `persono_id` = ".$studanto_id." order by kurso,numero";
$result = $bdd->query($query);
while ($row=$result->fetch()) {
	echo "<div class='collapsible-header'><a href='vidiLecionon.php?kurso=".$row["kurso"]."&numleciono=".$row["numero"]."&studanto=".$studanto_id."'>".$row["titolo"]."</a></div>\n";
}
?>
				
			</li>
		</ul>	


		</aside>

	</div>
	
<?php include "pagxpiedo.inc.php";?>