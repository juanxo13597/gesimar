<center>
    <div class="col-5">
        <?=$mensaje?>
        <form action="" method="post">
            <div class="form-group">
                <input type="text" name="dni" class="form-control" placeholder="DNI">
            </div>
            <div class="form-group">
                <input type="text" name="nombre" class="form-control" placeholder="Nombre (Obligatorio)" required>
            </div>
            <div class="form-group">
                <input type="text" name="telefono" class="form-control" placeholder="Telefono (Obligatorio)" required>
            </div>
            <div class="form-group">
                <input type="text" name="email" class="form-control" placeholder="Email">
            </div>
            <div class="form-group">
                <input type="text" name="perfil_wimax" class="form-control" placeholder="Perfil Wimax">
            </div>
            <div class="form-group">
                <input type="text" name="cuenta_bancaria" class="form-control" placeholder="Cuenta Bancaria">
            </div>
            <div class="form-group">
                <button type="submit" name="guardar" class="btn btn-outline-primary">Guardar</button>
                <button type="reset" class="btn btn-outline-danger">Limpiar</button>
            </div>
        </form>


    </div>
</center>