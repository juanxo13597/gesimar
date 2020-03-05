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
    

</center>

<script>

$(document).ready(function () {

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