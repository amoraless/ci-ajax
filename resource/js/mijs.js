$(document).ready(function(){
		$("#btn_buscar").click(function(){
			buscar_ajax();
		});
});

function buscar_ajax(){

	var buscar=$("input[name='buscador']").val();
	$.ajax({
		url:base_url+"ur_buscar/func_buscar",
		data:'pBuscar='+buscar,
		type:'post',
		dataType:'json',
		beforeSend:function()
		{
			console.log("cargando espere.....!!");
		},
		success:function(data)
		{
			var html_tbl="";
			$.each(data, function( index, value ) {
				html=html+"<tr>";
			   		html=html+"<td>"+(index+1)+"</td>";
			   		html=html+"<td>"+value['nombre']+"</td>";
			   		html=html+"<td>"+value['apellido']+"</td>";
			   		html=html+"<td>"+value['edad']+"</td>";
			   		html=html+"<td>"+value['estado']+"</td>";
				html=html+"</tr>";
			});
			
			$("#contenedor_tabla").html(html_tbl);
		},
		error:function(data){
			console.log("ocurrio algun erro");
		}
	});
}