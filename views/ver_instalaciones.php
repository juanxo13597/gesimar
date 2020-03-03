<table id="ver_clientes" class="display" style="width:100%">
        <thead>
            <tr>
                <th>id</th>
                <th>Cliente</th>
                <th>Direccion</th>
                <th>Cuota</th>
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
                echo "<td><a href='?pag=ver_detalles_instalacion&&id=".$data[$j]['id']."'>".$data[$j]['nombre']."</a></td>";
                echo "<td>".$data[$j]['direccion']."</td>";
                echo "<td>".$data[$j]['cuota']." €/MES</td>";
                echo "<td>".$activa."</td>";
                echo "</tr>";
            }
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