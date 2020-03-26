<table id="ver_incidencias" class="display" style="width:100%">
        <thead>
            <tr>
                <th>id</th>
                <th>Cliente</th>
                <th>Direccion</th>
                <th>Telefono</th>
                <th>Activa</th>
            </tr>
        </thead>
        <?php
        if(!is_null($data)){
            for ($j=0; $j < count($data); $j++) { 
                if($data[$j]['activa']=='1'){
                    $activa = "<button class ='btn btn-success' disabled>Activa</button>";
                }else{
                    $activa = "<button class ='btn btn-danger' disabled>Inactiva</button>";
                }

                echo "<tr>";
                echo "<td>".$data[$j]['id']."</td>";
                echo "<td><a href='?pag=ver_detalles_incidencia&&id=".$data[$j]['id']."'>".$datos_cliente[$j]['nombre']."</a></td>";
                echo "<td>".$datos_instalacion[$j]['direccion']."</td>";
                echo "<td>".$datos_cliente[$j]['telefono']."</td>";
                echo "<td>".$activa."</td>";
                echo "</tr>";
            }
        }
            
        ?>
    </table>

    <script>
        $(document).ready(function() {
  $('#ver_incidencias').DataTable({
    "order": [[4, "asc"], [0, "desc"]],
    "lengthMenu": [[15, 25, 100, -1], [15, 25, 100, "Ver Todo"]],
    "language": {
      "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
    }
  });
});
    </script>