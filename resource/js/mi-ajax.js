$(document).ready(function(){
	eliminar();
});

function eliminar(){
	$(".eliminar").click(function(){
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