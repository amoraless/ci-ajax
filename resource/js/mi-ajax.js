$(document).ready(function(){
	guardar();
	eliminar();
});
function guardar() {
	$('#guardar').click(function(){
		var nombre,apellido,edad,estado;
		nombre=$("#form_alumno input[name='nombre']").val();
		apellido=$("#form_alumno input[name='apellido']").val();
		edad=$("#form_alumno input[name='edad']").val();
		estado=$("#form_alumno input[name='estado']").val();
		$.ajax({
				url:base_url+"ajax_guardar/guardar",
				data:"pNombre="+nombre+
					  "&pApellido="+apellido+
					  "&pEdad="+edad+
					  "&pEstado="+estado,
				type:'post',
				/*dataType:'json',*/
				beforeSend:function()
				{
					$("#mensaje").addClass("alert alert-info");
					$("#mensaje").html("Guardando el alumno: "+nombre);
					$('#contenedor_tabla').html("Refrescando......!!!");
				},
				success:function(data)
				{
					$('#contenedor_tabla').html(data);
					$("#mensaje").html("alumno: "+nombre+" guardado");
					
				},
				error:function(data){
					console.log("ocurrio algun erro");
				}
			});

	});
}
function eliminar(){
	$(document).on('click',".eliminar",function(){
		var evento=$(this).parent().parent().index();
		var id=$("#listar_alumno tbody tr:eq("+evento+") td:eq(0) ").html();
		var nombre=$("#listar_alumno tbody tr:eq("+evento+") td:eq(1) ").html();
		var confirmar=confirm("Desea eliminar el alumno: "+nombre);
		if (confirmar==true){
			$.ajax({
				url:base_url+"c_ajax/fun_eliminar",
				data:"pId="+id,
				type:'post',
				dataType:'json',
				beforeSend:function()
				{
					$("#mensaje").addClass("alert alert-info");
					$("#mensaje").html("eliminabdo el alumno: "+nombre);
				},
				success:function(data)
				{
					$("#listar_alumno tbody tr:eq("+evento+")").fadeOut();
					$("#mensaje").html("se elimino el alumno: "+nombre);
				},
				error:function(data){
					console.log("ocurrio algun erro");
				}
			});

			
		}
	});
}
