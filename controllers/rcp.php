<style>
#lista_productos{
   cursor: pointer;
    list-style: none;
    padding: 5px 3px 5px 13px;
    position: relative;
    background: #4b4b4b;
    border: 1px solid #444;
    width: 268px;
    height:auto;
    color: #f8f8f8;
    transition: all .1s ease-in-out;
   
}
#lista_productos:hover{
    background: rgba(255,255,255,0.7);
    color:#444;
    transform: scale(1.1);
}
</style>
<?php
include ('../seguridad/conexion.php');

if(isset($_GET['nombre'])){
	$nombre = $_GET['nombre'];
	$result = mysqli_query($con,"
	SELECT * FROM productos 
	WHERE producto LIKE '".$nombre."%' 
	or  id_producto LIKE '".$nombre."' 
	LIMIT 10
	");
	while($row = mysqli_fetch_array($result)){
		echo '<li onClick="fill_info('.$row['id_producto'].');" id="lista_productos">'.$row['producto'].'</li>';
	}
}



if(isset($_GET['idreg'])){
	$idreg = $_GET['idreg'];
	$result = mysqli_query($con,"SELECT * FROM productos WHERE id_producto='".$idreg."'");
	$row = mysqli_fetch_array($result);
	?>
	<div class="form-group col-md-12" id="div_resp">
		<label for="producto_descripcion">Descripcion</label>
		<input class="form-control" type="text" name="producto_descripcion" id="producto_descripcion" value="<?php echo $row['producto'] ?>">
	</div>

	            <div class="form-group col-md-12" id="div_resp">
		                        <label for="producto_preciounidad">Precio/Uni(Inc.IGV)</label>
		                        <input type="text" class="form-control" name="producto_preciounidad" id="producto_preciounidad" value="<?php echo $row['precio'] ?>">
		        </div>
	<?php
}
?>