<h1>Inscription en 2 secondes</h1>
<form method="post" action="" id="registerForm" class="forms">
	<label>Votre pseudo :</label>
	<input type="text" name="rusername" id="rusername" class="validate[required,minSize[3],custom[onlyLetterNumber]]" value="" tabindex="11"  />
	<label>Votre email :</label>
	<input type="text" name="remail" id="remail" class="validate[required,custom[email]]" value="" tabindex="12" />
	<p class="moveup"><span>Utilisez une vraie adresse Email !</span><br />Votre mot de passe vous sera envoyé, vous permettant ensuite de voir vos mots et gérer votre profil.</p><br />

	<label>Mot de passe :</label>
	<input type="password" name="rpassword" id="rpassword" class="validate[minSize[6],maxSize[15]]" tabindex="13" />
	<label>Confirmer mot de passe :</label>
	<input type="password" name="rcpassword" id="rcpassword" class="validate[minSize[6],maxSize[15]]" tabindex="14"  />

	<input type="checkbox" name="agree" id="agree" class="validate[required]" style="width:30px;" tabindex="15" /> J'accepte les <a href="index.html" target="_blank">conditions d'utilisation</a> du site.
	<button type="submit" class="buttons right"  name="function" id="register" value="register" tabindex="16">Valider</button>
</form>
