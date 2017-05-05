<div class="tabarea">
	<div class="tabitem activetab">Grupos de permissões</div>	
	<div class="tabitem">Permissões</div>	
</div>
<div class="tabcontent">
	<div class="tabbody" style="display:block">
	    <div class="button">
			<a href="<?php echo BASE_URL; ?>/permissions/add_group">Adicionar grupo de permissão</a>
		</div>
		<table border="0" width="100%">
			<tr>
				<th>Nome do grupo de permissão</th>
				<th width="160">Ação</th>
				<?php foreach ($permission_groups_list as $p): ?>
					<tr>
						<td><?php echo $p['name']; ?></td>
						<td width="100">
							<div class="button">
								<a href="<?php echo BASE_URL; ?>/permissions/edit_group/<?php echo $p['id']; ?>" >Editar</a>
							</div>
							<div class="button">
								<a href="<?php echo BASE_URL; ?>/permissions/delete_group/<?php echo $p['id']; ?>" onclick="return confirm('Excluir permissão')">Excluir</a>
							</div>
						</td>
					</tr>
				<?php endforeach; ?>
				
			</tr>
		</table>
	</div>
	<div class="tabbody">
	    <div class="button">
			<a href="<?php echo BASE_URL; ?>/permissions/add">Adicionar permissão</a>
		</div>
		<table border="0" width="100%">
			<tr>
				<th>Nome da permissão</th>
				<th width="50">Ação</th>
				<?php foreach ($permission_list as $p): ?>
					<tr>
						<td><?php echo $p['name']; ?></td>
						<td class="button" width="50"><a href="<?php echo BASE_URL; ?>/permissions/delete/<?php echo $p['id']; ?>" onclick="return confirm('Excluir permissão')">Excluir</a></td>
					</tr>
				<?php endforeach; ?>
				
			</tr>
		</table>
	</div>
</div>