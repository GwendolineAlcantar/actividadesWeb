<form method="GET" class="col-md-12">
    <div class="row">
        <h3>Formulario</h3>
        <div class="col-md-3">
            <input id="nombre" name="nombre" type="text" class="form-control">
        </div>

        <input name="numPeticiones" type="hidden" value="<?= $numPeticiones ?>">
        <label for="">Peticiones <?= $numPeticiones ?></label>
        
        <div class="col-md-12">
            <button class="btn btn-success">enviar</button>
         </div>
    </div>
</form>