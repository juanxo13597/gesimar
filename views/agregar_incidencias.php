<center>
    <div class="col-5">
        <?=$mensaje?>
        <form action="" method="post">
            <div class="form-group">
                <input type="text" name="cliente" class="form-control" placeholder="cliente" id="cliente" autocomplete="off">
            </div>
            <div class="form-group">
                <input type="text" name="instalacion" class="form-control" placeholder="Instalacion" id="instalacion" autocomplete="off">
            </div>
            <div class="form-group">
                <textarea type="text" name="nota" class="form-control" placeholder="Nota"></textarea>
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

        $('#instalacion').typeahead({
            source: function (query, result) {
                $.ajax({
                    url: "./inc/ajax_instalaciones.php",
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