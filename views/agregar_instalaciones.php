<center>
    <div class="col-5">
        <?=$mensaje?>
        <form action="" method="post">
            <div class="form-group">
                <input type="text" name="cliente" class="form-control" placeholder="Cliente" id="cliente" autocomplete="off">
            </div>
            <div class="form-group">
                <input type="number" name="cuota" class="form-control" placeholder="Cuota €/MES">
            </div>
            <div class="form-group">
                <input type="text" name="tipo_conexion" class="form-control" placeholder="Tipo Conexion">
            </div>
            <div class="form-group">
                    <label for="activa">Activa</label>
                  <select class="form-control" name="activa" id="activa">
                    <option value="1">Si</option>
                    <option value="0">No</option>
                  </select>
            </div>
            <div class="form-group">
                <button type="submit" name="guardar" class="btn btn-outline-primary">Guardar</button>
                <button type="reset" class="btn btn-outline-danger">Limpiar</button>
            </div>
        </form>


    </div>
</center>




<script>
    $(document).ready(function () {
        $('#cliente').typeahead({
            source: function (query, result) {
                $.ajax({
                    url: "./inc/ajax_clientes.php",
					data: 'query=' + query,            
                    dataType: "json",
                    type: "POST",
                    success: function (data) {
						result($.map(data, function (item) {
							return item;
                        }));
                    }
                });
            }
        });
    });
</script>