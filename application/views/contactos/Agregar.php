<center><h1>Pagina principal del controlador contactos</h1></center>
<br />

<div class="container">

	<form id="frm_agregar">
		<div class="row">
			<div class="col-md-12">
				<div class="input-group">
					<span class="input-group-addon" id="basic-addon1">
						Nombre:
					</span>
					<input required type="text" class="form-control" placeholder="Tu nombre Aqui!" name="nnombre" aria-describedby="basic-addon1">				
				</div>			
			</div>		
		</div>

		<br />	

		<div class="row">
			<div class="cod-md-12">
				<div class="input-group">
					<span class="input-group-addon" id="basic-addon1">
						Pais:
					</span>
					<select required id="idpais" name="idpais" class="form-control">
	                        <option value="0"  >Paises</option>
	                        <?php
	                        	foreach ($pais as $i ) {
	                        		echo '<option value="'. $i->idpais .'">'. $i->pais_nom. '</option>';
	                        	}
	                        ?>	
	                </select>				
				</div>			
			</div>
		</div>

		<div class="row">
			<div class="cod-md-12">
				<div class="input-group">
					<span class="input-group-addon" id="basic-addon1">
						Region:
					</span>
					<select required id="idregion" name="idregion" class="form-control">
	                        <option value="0"  >Regiones</option>                        
	                </select>				
				</div>			
			</div>
		</div>

		<div class="row">
			<div class="cod-md-12">
				<div class="input-group">
					<span class="input-group-addon" id="basic-addon1">
						Telefono:
					</span>
					<input required="" type="text" class="form-control" placeholder="Tu telefono Aqui!" name="ntelefono" aria-describedby="basic-addon1" > 				
				</div>			
			</div>
		</div>

		<div class="row">
			<div class="cod-md-12">
				<div class="input-group">
					<span class="input-group-addon" id="basic-addon1">
						Mensaje:
					</span>
					<textarea required="" class="form-control" style="resize: none;"  placeholder="Escriba un mensaje aqui" id="nmensaje" name="nmensaje" rows="4" cols="20"></textarea>
				</div>			
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<button type="submit" class="btn btn-success pull-right" id="btn_guardar">
					Guardar
				</button>			
			</div>		
		</div>
		

		<div class="row">
			<div class="col-md-12">
				<?php echo validation_errors();  ?>			
			</div>		
		</div>
	</form>	
	<div id="error"></div>


	
</div>
<script type="text/javascript">

$(document).ready(function(){
	$('#idpais').select2();
  	$('#idregion').select2();

	$("#idpais").change(function(){
		$("#idpais option:selected").each(function(){
			idpais=$('#idpais').val();
			$.post("<?php echo base_url(); ?>contactos/Lasregiones",{
				idpais : idpais
			}, function(data){
				$("#idregion").html(data);
			});
		});
	});

    $("#frm_agregar").on("submit", function(form) {
            form.preventDefault();
            $.ajax({
                type: "POST",
                url: '/Contactos/AgregarContacto',
                data: $("#frm_agregar").serialize(),

                beforeSend: function () {
                    $("frm_agregar").submit();
                    $("#error").html("Procesando, espere por favor...");
                },
                success: function(response)
                {					   
                    console.log("Response: ");
                    console.log(response);
                    $response = JSON.parse(response)
                    if($response[0] == "ok"){
                        console.log("Agregado");
                        $("#error").html("enviado");
                        $("#error").html($response[1]);
                    } else {
                        console.log("Error");
                        console.log($response[1]);
                    }
                    /* CargarModulo('permisos/mispapeletas'); */						
                },
                error: function(jqXHR, estado, error)
                {					   
                    console.log("Estado: " + estado); 					   
                    console.log("Error: " + error); 					   
                },					   
                complete: function(jqXHR, estado)
                {					   
                    console.log(estado); 					   
                },
                timeout: 1000                       
            }); // End ajax method
             /* return false; */
    }); // End $("#frm_agregar").submit({

});
</script>
		
