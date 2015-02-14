<table id="listar_alumno" class="table table-striped table-hover">
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
					<a href="javascript:void(0);" class="eliminar">eliminar</a>
				</td>
				<td>
					<a href="javascript:void(0);" class="editar">editar</a>
				</td>	
			</tr>
			<?php } ?>
		</tbody>
	</table>
