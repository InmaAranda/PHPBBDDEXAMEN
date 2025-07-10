<?php
require_once('../plantillas/cabecera.php');
?>

<article>
    <h2>Dar de alta un vehículo</h2>

    <form action="insertar.php" method="post">
        <div  class="control mb-3">
            <label for="matricula" class="col-sm-2 col-form-label">Matrícula:</label>
            <input type="text" name="matricula" id="matricula" required class="form-control" required >
        </div>

        <div>
            <label for="marca" class="col-sm-2 col-form-label">Marca:</label>
            <input type="text" name="marca" id="marca" required class="form-control" required>
        </div>

         <div>
            <label for="modelo" class="col-sm-2 col-form-label">Modelo:</label>
            <input type="text" name="modelo" id="modelo" required class="form-control" required>
        </div>

        <div  class="control mb-3">
            <label for="tipo"class="col-sm-2 col-form-label">Tipo:</label>
            <select name="tipo" id="tipo" class="form-select form-select-lg" required class="form-control" required>
                <option value="turismo">Turismo</option>
                <option value="autobús">Autobús</option>
                <option value="camión">Camión</option>
                <option value="furgón">Furgón</option>
            </select>
        </div>

        <div  class="control mb-3">
            <label for="color"class="col-sm-2 col-form-label">Color:</label>
            <input type="text" name="color" id="color" class="form-control" required>
        </div>
l        <div>
            <label for="fecha_matriculacion" class="col-sm-2 col-form-label">Fecha de matriculación:</label>
            <input type="date" name="fecha_matriculacion" id="fecha_matriculacion" class="form-control" required>
        </div>

        <div  class="control mb-3">
            <label for="cilindrada"class="col-sm-2 col-form-label">Cilindrada:</label>
            <input type="text" name="cilindrada" id="cilindrada"class="form-control" required>
        </div>
        
        <div  class="control mb-3">
            <label for="itv_pasada"class="col-sm-2 col-form-label">ITV Pasada:</label>
            <div class="col-sm-10"><div class="form-check">
                <input class="form-check-input" type="radio"  name="itv_pasada" id="itv_si" value="1" checked>
                <label class= "form-check-label" for="itv_si">Si</label>
           </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="itv_pasada" id="itv_no" value="0">
                <label class= "form-check-label" for="itv_no">No</label>
            </div>

        <div  class="control mb-3">0
            <input type="submit" value="Añadir Vehículo" class="btn btn-primary">
        </div>

    </form>
</article>

<?php
require_once('../plantillas/pie.php');
?>
