<h1>Permissões - Adicionar grupo</h1>

<form method="POST">
	<label for="name">Nome do grupode permissões</label><br>
	<input type="text" name="name"/><br><br>
	<label>Permissões</label>
    <br/>
	<?php foreach ($permission_list as $p): ?>
 	<input type="checkbox" name="permissions[]" value="<?php echo $p['id']; ?>" id="p_<?php echo $p['id']; ?>" />
	<label for="p_<?php echo $p['id']; ?>"><?php echo $p['name']; ?></label>
	<br>
    <?php endforeach;?>
    <br>
	<input type="submit" value="Adicionar">
</form>