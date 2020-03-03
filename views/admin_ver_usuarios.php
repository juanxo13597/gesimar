<table id="ver_clientes" class="display" style="width:100%">
        <thead>
            <tr>
                <th>id</th>
                <th>usuario</th>
                <th>rol</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <?php
            for ($j=0; $j < count($data); $j++) { 
                echo "<tr>";
                echo "<td>".$data[$j]['id']."</td>";
                echo "<td>".$data[$j]['username']."</td>";
                echo "<td>".$data[$j]['role']."</td>";
                echo "<td><a href='?pag=admin_editar_usuario&&id=".$data[$j]['id']."'>EDITAR</a></td>";
                echo "</tr>";
            }
        ?>
    </table>

    <script>
        $(document).ready(function() {
  $('#ver_clientes').DataTable({
    "language": {
      "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
    }
  });
});
    </script>