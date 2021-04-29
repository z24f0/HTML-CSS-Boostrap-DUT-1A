<DOCTYPE html>
<html long="fr">
	
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet"  href="snk.css"/>
		<title>Shingeki No Kyogin</title>
	</head>
	
	
	<body>
		<header>
			<h1 class="rouge">Shingeki No Kyogin</h1>
			<img src="img/2.webp" title="La saison 4 approche !!!" alt="mince ca s'affiche pas"/><br><br>
			
				<!--<img class="reseau" src="img/facebook.png" title="La saison 4 approche !!!" alt="mince ca s'affiche pas"/>			
			<img  src="img/twitter.png" title="La saison 4 approche !!!" alt="mince ca s'affiche pas"/>-->
			
			
			
			<nav class="disp">
					<a href="file:///media/famahammad/6088-1E79/HTML%20CSS%20snk%20cl%C3%A9/tp1p1.html" title="snk ACCUEIL">intro<a/> 
					<a href="file:///media/famahammad/6088-1E79/HTML%20CSS%20snk%20cl%C3%A9/tp1p4.html" title="snk biographie">biographie perso<a/>
					<a href="file:///media/famahammad/6088-1E79/HTML%20CSS%20snk%20cl%C3%A9/tp1p3.html" title="snk hajime isayama">hajime isayama<a/>
					<div >media
						
							<a class="invisible" href="file:///media/famahammad/6088-1E79/HTML%20CSS%20snk%20cl%C3%A9/tp1p3.html" title="snk hajime isayama">photo<a/>
							<a class="invisible" href="file:///media/famahammad/6088-1E79/HTML%20CSS%20snk%20cl%C3%A9/tp1p3.html" title="snk hajime isayama">vidéo<a/>
					<div/>
				
				<!--
			<ul>
				<li><a href="file:///home/z24/Bureau/HTML%20CSS%20snk/tp1p1.html" title="snk ACCUEIL"> intro <a/></li>
				<li><a href="file:///home/z24/Bureau/HTML%20CSS%20snk/tp1p2.html" title="snk titans primordiaux">Lien vers la description des 9 titans primordiaux<a/></li>
				<li><a href="file:///home/z24/Bureau/HTML%20CSS%20snk/tp1p4.html" title="snk biographie">biographie perso<a/></li>
				<li><a href="file:///home/z24/Bureau/HTML%20CSS%20snk/tp1p3.html" title="snk hajime isayama">hajime isayama<a/></li>
			</ul>-->
			</nav>
		
		</header>
		
		
		<form type="POST">
				<p>
					<label for="nom">NOM </label>
					<input type="text" name="Nom" id="nom" placeholder="nom ..." required>
				</p>
				<p>	
					<label for="mail">MAIL </label>
					<input type="email" name="Email" id="mail " placeholder="exemple@mail.com ..." required>
				</p>
				<p>	
					<label for="tel">TELEPHONE </label>
					<input type="tel" name="Telephone" id="tel" placeholder="0711223344 ">
				</p>
				<p>	
					<label for="bugliste">BUG DU TYPE : </label>
					<select name=listebug" id="bugliste">
						<option value="bug">Un bug du site !</option>
						<option value="am">Je veut apporter une amélioration </option>
						<option value="bug">Autre ... </option>
					</select>
				</p>
				<p>	
					<label for="visite">1ERE VISITE ? </label>
					<input type="radio" name="choix" id="visite">
					<label for="nonvisite">DEJA VISITÉ ? </label>
					<input type="radio" name="choix" id="nonvisite">
				</p>
				<p>
					<label for="descrpt">DESCRIPTION OU AMÉLIORAION À AMÉLIORER: </label>
					<textarea name="Description" id="descript" row="30" col="50" required></textarea>
				</p>
				<p>
					<label for="nom">ENVOYER </label>
					<input type="submit" value="Envoyer">
				</p>	
			</form>
		
		
<?php
	if(empty($_POST["nom"])){
		echo "Le nom doit être renseigné !!!"
	}
	else if(empty($_POST["mail"])){
		echo "Le mail doit être renseigné !!!"
	}
	else if(empty($_POST["tel"])){
		echo "Le téléphone doit être renseigné !!!"
	}
	else if(empty($_POST["bugliste"])){
		echo "Le téléphone doit être renseigné !!!"
	}
	else if(empty($_POST["visite"]) && ($_POST["nonvisite"]) ){
		echo "La visite doit être renseigné !!!"
	}
	else if(empty($_POST["descript"])){
		echo "La description doit être renseigné !!!"
	}
?>		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		<footer>
		<br><br>
		<nav>
		
			<ul>
				<li><a href="file:///media/famahammad/6088-1E79/HTML%20CSS%20snk%20cl%C3%A9/tp1p1.html" title="snk ACCUEIL"> intro <a/> <br></li>
				<li><a href="file:///media/famahammad/6088-1E79/HTML%20CSS%20snk%20cl%C3%A9/tp1p2.html" title="snk titans primordiaux">Lien vers la description des 9 titans primordiaux<a/> <br></li>
				<li><a href="file:///media/famahammad/6088-1E79/HTML%20CSS%20snk%20cl%C3%A9/tp1p4.html" title="snk biographie">biographie perso<a/></li>
				<li><a href="file:///media/famahammad/6088-1E79/HTML%20CSS%20snk%20cl%C3%A9/tp1p3.html" title="snk hajime isayama">hajime isayama<a/></li>
				<li><a href="file:///media/famahammad/6088-1E79/HTML%20CSS%20snk%20cl%C3%A9/tp1p5.html" title="snk photos">GALERIE PHOTO<a/></li>
			</ul> <!--
			<ul>
				<li><a href="file:///home/z24/Bureau/HTML%20CSS%20snk/tp1p1.html" title="snk ACCUEIL"> intro <a/></li>
				<li><a href="file:///home/z24/Bureau/HTML%20CSS%20snk/tp1p2.html" title="snk titans primordiaux">Lien vers la description des 9 titans primordiaux<a/></li>
				<li><a href="file:///home/z24/Bureau/HTML%20CSS%20snk/tp1p4.html" title="snk biographie">biographie perso<a/></li>
				<li><a href="file:///home/z24/Bureau/HTML%20CSS%20snk/tp1p3.html" title="snk hajime isayama">hajime isayama<a/></li>
			</ul>-->
		</nav>
		<br><br>
			--------------- MAHAMMAD FAZIL  GROUPE 4 ---------------<br><br>
		</footer>
	</body>
</html>

