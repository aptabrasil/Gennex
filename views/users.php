<div class="button"><a href="<?php echo BASE_URL; ?>/users/add">Adicionar Usuário</a></div>

<table border="0" width="100%">
	<tr>
		<th>Nome do usuário</th>
		<th>Grupo de permissões</th>
		<th width="160">Ação</th>
	</tr>
	<?php foreach ($users_list as $user): ?>
	<tr>
		<td><?php echo $user['login']; ?></td>
		<td width="200"><?php echo $user['name']; ?></td>
		<td width="100">
			<div class="button">
				<a href="<?php echo BASE_URL; ?>/users/edit/<?php echo $user['id']; ?>" >Editar</a>
			</div>
			<div class="button">
 				<a href="<?php echo BASE_URL; ?>/users/delete/<?php echo $user['id']; ?>" onclick="return confirm('Excluir usuário')">Excluir</a>
			</div>
		</td>
	</tr>
	<?php endforeach; ?>
</table>
