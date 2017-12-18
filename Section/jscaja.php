    <script src="../Include/js/jquery-3.1.1.min.js"></script>
    <script src="../Include/js/bootstrap.min.js"></script>
    <script src="../Include/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="../Include/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="../Include/js/inspinia.js"></script>
    <script src="../Include/js/plugins/pace/pace.min.js"></script>

    <!-- Flot -->
    <script src="../Include/js/plugins/flot/jquery.flot.js"></script>
    <script src="../Include/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="../Include/js/plugins/flot/jquery.flot.resize.js"></script>

    <!-- ChartJS-->
    <script src="../Include/js/plugins/chartJs/Chart.min.js"></script>

    <!-- Peity -->
    <script src="../Include/js/plugins/peity/jquery.peity.min.js"></script>
    <!-- Peity demo -->
    <script src="../Include/js/demo/peity-demo.js"></script>
     <!-- iCheck -->
    <script src="../Include/js/plugins/iCheck/icheck.min.js"></script>
    
    <script src="../Include/js/busqueda.js"></script>
    <script src="../Include/js/plugins/dataTables/datatables.min.js"></script>
    <script src="../Include/js/plugins/chosen/chosen.jquery.js"></script>
    <script src="../Include/js/plugins/select2/select2.full.min.js"></script>
    <script type="text/javascript">
        
            $(document).ready(function () {
               

               listar();

            });



            var listar = function(){
            

            var table = $("#productos").DataTable({
                "destroy":true,
                "ajax":{
                    "method" : "POST",
                    "url": "../Controlador/listar_productos.php"
                },
                "columns":[
                    {"data":"Num_Producto"},
                    {"data":"codigo"},
                    {"data":"unidad"},
                    {"data":"Descripcion"},
                    {"data":"PT"},
                    {"data":"PB"},
                    {"data":"Proveedor"},
                    {"defaultContent": " <button type='button' class='btn-sm btn-primary'>Agregar</button>"}
                    
                ]
            });


            obtener_serie("#productos",table);

        }

        var obtener_serie = function(tbody,table){
                $(tbody).on("click", "button.editar", function(){
                    var data = table.row($(this).parents("tr")).data();
                    location.href = "EditAlmacen.php?id="+data.Num_Producto+"";
                    console.log(data.Num_Producto);
                });

                  $(tbody).on("click", "button.eliminar", function(){
                    var data = table.row($(this).parents("tr")).data();
                     if (confirm('¿Desea eliminar el producto' +' ' + data.Num_Producto + '?')) { 
                    window.location.href = "../Modelo/funcionborrar.php?id="+data.Num_Producto+"";
                    console.log(data.Num_Producto);
                    }
                });


        }

    </script>