<center><h1>Pagina principal del controlador Contactos</h1></center>
<br />
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<center>
				<?php
					foreach ($query as $roww) {
						/*echo $row ->Id . "<br />";*/
						echo $roww -> Nombre . "<br />";
						echo $roww -> idpais . "<br />";
						echo $roww -> idregion . "<br />";
						echo $roww -> Telefono . "<br />";
						echo $roww -> mensaje . "<br />";						
						echo "<br />";
					}
				?>
			</center>
			
		</div>
	</div>
	
</div>