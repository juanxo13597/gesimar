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
                    id="cuota" placeholder="..." disabled>
            </div>

            <div class="form-group">
                <label for="">Tipo Conexion</label>
                <input type="text" class="form-control text-center" value="<?=$datos['tipo_conexion']?>"
                    name="tipo_conexion" id="tipo_conexion" placeholder="..." disabled>
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


    <?php if($datos_incidencia->num_rows!=0){?>
    <div class="col-md-6 border border-primary">
        <h3>Incidencias</h3>
        <?php
        $num = 1;
            while($row = $datos_incidencia->fetch_assoc()){
                if($row['activa']=='1'){
                    $activa = "<activa class='text-success'>Activa</activa>";
                }else{
                    $activa = "<activa class='text-danger'>Inactiva</activa>";
                }
                echo $num.". <a href='?pag=ver_detalles_incidencia&&id=".$row['id']."'>".$row['direccion']."</a> ".$activa." ~ ".$row['T_creacion']."<br>";
                $num++;

            }
            echo "</div>";

            
    }
    
        ?>

        <div class="mt-3">
            <?php
                if($_SESSION['login']['role'] == "ADMIN"){
                    echo "<button id='creador' class='btn btn-sm btn-info'>Ver Información</button>";
                 }
            ?>
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
            $("#cuota").removeAttr("disabled");
            $("#activa").removeAttr("disabled");
            $("#tipo_conexion").removeAttr("disabled");



            $("#guardar").removeAttr("hidden");
            $("#editar").attr("hidden", "true");

        });



    });
</script>