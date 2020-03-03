<center>
    <div class="col-5">
        <form action="" method="post">
            <?=$mensaje?>
            <div class="form-group">
                <label for="">Cliente</label>
                    <p><a href="?pag=ver_detalles_cliente&&id=<?=$datoscliente['id']?>"><?=$datos['nombre']?></a></p>
            </div>

            <div class="form-group">
                <label for="">Direccion</label>
                <input class="form-control text-center" value="<?=$datos['direccion']?>" name="direccion" id="direccion"
                    placeholder="..." disabled required>
            </div>

            <div class="form-group">
                <label for="">Cuota</label>
                <input type="number" class="form-control text-center" value="<?=$datos['cuota']?>" name="cuota"
                    id="cuota" placeholder="..." disabled required>
            </div>

            <div class="form-group">
                <label for="activa">Activa</label>
                <select class="form-control" name="activa" id="activa" disabled>
                    <option value="<?=$datos['activa']?>">Actual: <?=$activa?></option>
                    <option value="1">Si</option>
                    <option value="0">No</option>
                </select>
            </div>





            <button type="submit" class="btn btn-primary" id="guardar" name="guardar" hidden>Guardar</button>
        </form>

        <button class="btn btn-outline-primary" id="editar">Editar</button>


    </div>
    <div class="mt-4">
        <?=$creacion?>
        <?=$actualizacion?>
    </div>


</center>

<script>
    $(document).ready(function () {

        $("#editar").click(function (e) {
            e.preventDefault();
            $("#cuota").removeAttr("disabled");
            $("#activa").removeAttr("disabled");



            $("#guardar").removeAttr("hidden");
            $("#editar").attr("hidden", "true");

        });



    });
</script>