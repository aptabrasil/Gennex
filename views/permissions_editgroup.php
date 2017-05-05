<h1>Permissões - Editar grupo</h1>

<form method="POST">
	<label for="name">Nome do grupode permissões</label><br>
	<input type="text" name="name" value="<?php echo $group_info['name'] ?>" /><br><br>
	<label>Permissões</label>
    <br/>
	<?php foreach ($permission_list as $p): ?>
 	<input type="checkbox" name="permissions[]" value="<?php echo $p['id']; ?>" id="p_<?php echo $p['id']; ?>" <?php echo (in_array($p['id'], $group_info['params']))?'checked="checked"':''; ?> />
	<label for="p_<?php echo $p['id']; ?>"><?php echo $p['name']; ?></label>
	<br>
    <?php endforeach;?>
    <br>
	<input type="submit" value="Salvar">
</form>