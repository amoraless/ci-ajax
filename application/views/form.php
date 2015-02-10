
<form action="<?php echo base_url();?>welcome/actions/<?php echo (isset($id)!='')?$id:''; ?>" method="post">
	<table>
		<tr style="<?php echo (isset($id)!='')?'':'display: none;'; ?>">
			<td><label>id: </label></td>
			<td><input type="text" name="id" value="<?php echo (isset($id)!='')?$id:''; ?>"/></td>
		</tr>
		<tr>
			<td><label>nombre: </label></td>
			<td><input type="text" name="nombre" value="<?php echo (isset($nombre)!='')?$nombre:''; ?>" /></td>
		</tr>
		<tr>
			<td><label>apellido: </label></td>
			<td><input type="text" name="apellido" value="<?php echo (isset($apellido)!='')?$apellido:''; ?>"/></td>
		</tr>
		<tr>
			<td><label>edad: </label></td>
			<td><input type="text" name="edad" value="<?php echo (isset($edad)!='')?$edad:''; ?>" /></td>
		</tr>
		<tr>
			<td><label>edad: </label></td>
			<td><input type="text" name="estado" value="<?php echo (isset($estado)!='')?$estado:''; ?>" /></td>
		</tr>
		<tr>
			<td><input type="submit" value="Actulizar"/>
			</td>
			<td> <a href="<?php echo base_url()?>">Canselar</a></td>
		</tr>
	</table>
</form>