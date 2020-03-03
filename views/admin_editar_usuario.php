<center>

    <div class="col-5">

        <form action="" method="post">
            <?=$result?>
            <div class="form-group">
                <input type="text" name="username" class="form-control" value="<?=$data['username']?>" required>
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Contraseña">
            </div>
            <div class="form-group">
               <div class="form-group">
                 <label for="">ROL</label>
                 <select class="form-control" name="role">
                   <option value="<?=$data['role']?>">Actual: <?=$data['role']?></option>
                   <option value="ADMIN">ADMIN</option>
                   <option value="USER">USER</option>
                 </select>
               </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-outline-primary">Guardar</button>
            </div>

        </form>
    </div>

</center>
