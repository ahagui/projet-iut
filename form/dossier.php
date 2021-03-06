<form method="post" action="addDossierAction">
	<label>Nom</label> <input type="text" name="nom"><br/>
	<label>Prénom</label> <input type="text" name="prenom"><br/>
	<label>Âge</label> <input type="number" name="age" min="0"><br/>
	<label>E-Mail</label> <input type="email" name="mail"><br/>
	<label>Adresse</label> <input type="text" name="adresse"><br/>
	<label>Adresse Suite</label> <input type="text" name="suite"><br/>
	<label>Ville</label> <input type="text" name="ville"><br/>
	<label>Code Postal</label> <input type="number" name="cp"><br/>
	<br/>
	<label>Ancienneté dans le corps de conférence</label> <input type="number" name="ancConf"><br/>
	<label>Échelon</label> <input type="text" name="echelon"><br/>
	<label>Ancienneté dans l'échelon</label> <input type="number" name="ancEchelon"><br/>
	<label>Activité de recherche</label> <select name="actRecherche">
		<option>=</option>
		<option>+</option>
		<option>++</option>
	</select><br/>
	<label>Activité d'enseignement</label> <select name="actEnseign">
		<option>=</option>
		<option>+</option>
		<option>++</option>
	</select><br/>
	<label>Tâches administratives</label> <select name="tachesAdmin">
		<option>=</option>
		<option>+</option>
		<option>++</option>
	</select><br/>
	<label>Visibilité</label> <select name="visibilite">
		<option>=</option>
		<option>+</option>
		<option>++</option>
	</select><br/>
	<label>Premier rapporteur</label> <input name="rapp1" type="text" list="rapporteurs"><br/>
	<label>Deuxième rapporteur</label> <input type="text" name="rapp2" list="rapporteurs"><br/>
	<datalist id="rapporteurs">
		<?php
			foreach($rapporteurs as $rapporteur){
				?>
				<option value="<?= $rapporteur->getPrenom()." ".$rapporteur->getNom(); ?>">
				<?php
			}
		?>
	</datalist>
	<input type="submit" value="Valider">
	<?= getCsrfObject()->addToken()->getHiddenInput(); ?>
</form>
