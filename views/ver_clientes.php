<table id="ver_clientes" class="display" style="width:100%">
        <thead>
            <tr>
                <th>id</th>
                <th>Nombre</th>
                <th>Telefono</th>
            </tr>
        </thead>
        <?php
        if(!is_null($data)){
            for ($j=0; $j < count($data); $j++) { 
                echo "<tr>";
                echo "<td>".$data[$j]['id']."</td>";
                echo "<td><a href='?pag=ver_detalles_cliente&&id=".$data[$j]['id']."'>".$data[$j]['nombre']."</a></td>";
                echo "<td>".$data[$j]['telefono']."</td>";
                echo "</tr>";
            }
        }
            
        ?>
    </table>

    <script>
        $(document).ready(function() {
  $('#ver_clientes').DataTable({
    "order": [[0, "desc"]],
    "lengthMenu": [[25, 50, 100, -1], [25, 50, 100, "Ver Todo"]],
    "language": {
      "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
    }
  });
});
    </script>