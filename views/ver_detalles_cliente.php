<center>
    <div class="col-5">
        <form action="" method="post">
            <?=$mensaje?>
            <div class="form-group">
                <label for="">DNI</label>
                <input class="form-control text-center" value="<?=$datos['dni']?>" name="dni" id="dni" placeholder="..."
                    disabled>
            </div>

            <div class="form-group">
                <label for="">Nombre</label>
                <input class="form-control text-center" value="<?=$datos['nombre']?>" name="nombre" id="nombre"
                    placeholder="..." disabled required>
            </div>

            <div class="form-group">
                <label for="">Telefono</label>
                <input class="form-control text-center" value="<?=$datos['telefono']?>" name="telefono" id="telefono"
                    placeholder="..." disabled required>
            </div>

            <div class="form-group">
                <label for="">Email</label>
                <input class="form-control text-center" value="<?=$datos['email']?>" name="email" id="email"
                    placeholder="..." disabled>
            </div>

            <div class="form-group">
                <label for="">Perfil Wimax</label>
                <input class="form-control text-center" value="<?=$datos['perfil_wimax']?>" name="perfil_wimax" id="perfil_wimax"
                    placeholder="..." disabled>
            </div>

            <div class="form-group">
                <label for="">Cuenta Bancaria</label>
                <input class="form-control text-center" value="<?=$datos['cuenta_bancaria']?>" name="cuenta_bancaria" id="cuenta_bancaria"
                    placeholder="..." disabled>
            </div>



            <button type="submit" class="btn btn-primary" id="guardar" name="guardar" hidden>Guardar</button>
        </form>

        <button class="btn btn-outline-primary" id="editar" >Editar</button>
        

    </div>
    <div class="mt-4">
    <?=$creacion?>
    <?=$actualizacion?>
    </div>

    <?php if($ins_cli_result->num_rows!=0){?>
    <div class="col-md-6 border border-primary">
    <h3>Instalaciones</h3>
        <?php
        $num = 1;
            while($row = $ins_cli_result->fetch_assoc()){
                if($row['activa']=='1'){
                    $activa = "<activa class='text-success'>Activa</activa>";
                }else{
                    $activa = "<activa class='text-danger'>Inactiva</activa>";
                }
                echo $num.". <a href='?pag=ver_detalles_instalacion&&id=".$row['id']."'>".$row['direccion']."</a> ".$activa."<br>";
                $num++;
            }
            echo "</div>";
    }
    
        ?>
    <div class="mt-3">
    <button id="creador" class="btn btn-sm btn-info">Ver Creador</button>
    <small id="creado" hidden="hidden">Cliente creado por: <creador class="text-danger"><?=$ver_creador['username']?></creador></small>
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
        $("#dni").removeAttr("disabled");
        $("#nombre").removeAttr("disabled");
        $("#direccion").removeAttr("disabled");
        $("#telefono").removeAttr("disabled");
        $("#email").removeAttr("disabled");
        $("#perfil_wimax").removeAttr("disabled");
        $("#cuenta_bancaria").removeAttr("disabled");

        
        $("#guardar").removeAttr("hidden");
        $("#editar").attr("hidden", "true");

    });



});

</script>