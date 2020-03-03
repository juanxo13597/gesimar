<table id="ver_clientes" class="display" style="width:100%">
        <thead>
            <tr>
                <th>id</th>
                <th>dni</th>
                <th>Nombre</th>
                <th>Direccion</th>
                <th>Telefono</th>
                <th>Email</th>
            </tr>
        </thead>
        <?php
            for ($j=0; $j < count($data); $j++) { 
                echo "<tr>";
                echo "<td>".$data[$j]['id']."</td>";
                echo "<td>".$data[$j]['dni']."</td>";
                echo "<td>".$data[$j]['nombre']."</td>";
                echo "<td>".$data[$j]['direccion']."</td>";
                echo "<td>".$data[$j]['telefono']."</td>";
                echo "<td>".$data[$j]['email']."</td>";
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