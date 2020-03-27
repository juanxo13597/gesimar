<center>
    <div class="col-5">
        <form action="" method="post">
            <?=$mensaje?>
            <div class="form-group">
                <label for="">Cliente</label>
                <p><a href="?pag=ver_detalles_cliente&&id=<?=$datos_cliente['id']?>"><?=$datos_cliente['nombre']?></a>
                </p>
            </div>

            <div class="form-group">
                <label for="">Direccion</label>
                <input class="form-control text-center" value="<?=$datos_instalacion['direccion']?>" name="direccion"
                    id="direccion" placeholder="..." disabled required>
            </div>

            <div class="form-group">
                <label for="">Cuota</label>
                <input type="number" class="form-control text-center" value="<?=$datos_instalacion['cuota']?>"
                    name="cuota" id="cuota" placeholder="..." disabled>
            </div>

            <div class="form-group">
                <label for="">Tipo Conexion</label>
                <input type="text" class="form-control text-center" value="<?=$datos_instalacion['tipo_conexion']?>"
                    name="tipo_conexion" id="tipo_conexion" placeholder="..." disabled>
            </div>

            <div class="form-group">
                <label for="">Nota</label>
                <textarea type="text" class="form-control text-center" name="nota" id="nota" placeholder="..."
                    disabled><?=$datos['nota']?></textarea>
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

    <div class="mt-3">
            <button id="creador" class="btn btn-sm btn-info">Ver Información</button>
            <div id="creado" hidden="hidden">
                <small>Cliente creado por: <creador class="text-danger"><?=$ver_creador['username']?></creador></small>
                <?php
                    if($ver_updater){
                        echo "<br><small>Ultima actualizacion por: <creador class='text-danger'>".$ver_creador['username']."</creador></small>";
                    }
                ?>
            </div>

        </div>


</center>

<script>
    $(document).ready(function () {

        $("#creador").click(function (e) {
            e.preventDefault();
            $("#creado").removeAttr("hidden");
            $("#creador").attr("hidden", "true");
        });

        $("#editar").click(function (e) {
            e.preventDefault();
            $("#activa").removeAttr("disabled");
            $("#nota").removeAttr("disabled");


            $("#guardar").removeAttr("hidden");
            $("#editar").attr("hidden", "true");

        });



    });
</script>