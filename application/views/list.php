<a href="<?php echo base_url();?>welcome/get/">Insertar</a>
<table class="table table-striped table-hover">
		<thead>
			<th width="5%">id</th>
			<th width="30%">nombre</th>
			<th width="50%">apellido</th>
			<th width="10%">edad</th>
			<th width="5%">estado</th>
			<th>eliminar</th>
			<th>editar</th>
		</thead>
		<tbody>
			<?php foreach ($alumnos as $row){ ?>
			<tr>
				<td><?php echo $row['id']; ?></td>
				<td><?php echo $row['nombre']; ?></td>
				<td><?php echo $row['apellido']; ?></td>
				<td><?php echo $row['edad']; ?></td>
				<td><?php echo $row['estado']; ?></td>
				<td>
					<a href="<?php echo base_url()?>welcome/delete/<?php echo $row['id']; ?>">eliminar</a>
				</td>
				<td>
					<a href="<?php echo base_url()?>welcome/get/<?php echo $row['id']; ?>">editar</a>
				</td>	
			</tr>
			<?php } ?>
		</tbody>
	</table>
