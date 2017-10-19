<center><h1>Pagina principal del controlador Contactos</h1></center>
<br />
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<center>
<table id="id" class="table table-borderer">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>idPais</th>
            <th>idregion</th>
            <th>Telefono</th>
            <th>Mensaje</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach ($query as $roww) {
					/*echo $row ->Id . "<br />";*/
                    echo "<tr>";
                    echo "<td>".$roww -> Nombre   . "</td>";
                    echo "<td>".$roww -> idpais   . "</td>";
					echo "<td>".$roww -> idregion . "</td>";
					echo "<td>".$roww -> Telefono . "</td>";
					echo "<td>".$roww -> mensaje  . "</td>";						
                    echo "</tr>";
			}
        ?>
    </tbody>
</table>
			
		</div>
	</div>
	
</div>
