<h1>Editar</h1>
<?php if(isset($erro) && !empty($erro)): ?>
<div class="warn"><?php echo $erro; ?></div>
<?php endif;?>
<form method="POST">
	<label for="login">Login</label><br>
	<?php echo $user_info['login']; ?> <br><br>
	<label for="password">Senha</label><br>
	<input type="password" name="password" ><br><br>
	<label for="group">Grupos de permissões</label><br>
	<select name="group" id="group" required>
		<?php foreach ($group_list as $g): ?>
			<option value="<?php echo $g['id']; ?>" <?php ($g['id']==$user_info['idgroup'])?'selected="selected"':''; ?>><?php echo $g['name']; ?></option>
		<?php endforeach; ?>
	</select><br><br>
	<input class="button" type="submit" value="Editar">


</form>