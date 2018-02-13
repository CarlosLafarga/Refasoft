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

    <script src="../Include/js/plugins/dataTables/datatables.min.js"></script>
    <script src="../Include/js/plugins/chosen/chosen.jquery.js"></script>
    <script src="../Include/js/plugins/select2/select2.full.min.js"></script>
    <script src="../Include/js/plugins/typehead/bootstrap3-typeahead.min.js"></script>
    <script src="../Include/js/plugins/sweetalert/sweetalert.min.js"></script>

    <script>

       $(document).ready(function () {


               listar();

               $.ajax({
                    type:"POST",
                    url: "../Controlador/listar_proveedores.php",
                    success: function(response){

                      $('#proveedor').html(response).fadeIn();
                    }
                    });

            });

       var listar = function(){

            var tipo_fact =  $("#tipo_fact").val();
            var proveedor = $("#proveedor").val();

            console.log(tipo_fact);
            var table = $("#facturas_pen").DataTable({
                "destroy":true,
                "ajax":{
                    "method" : "POST",
                    "url": "../Controlador/listar_deudas.php?proveedor="+proveedor+"&tipo_fact="+tipo_fact+""
                },
                "columns":[
                    {"data":"no_factura"},
                    {"data":"fecha_alta"},
                    {"data":"total_de_factura"},
                    {"data":"proveedor_a_pagar"},
                    {"defaultContent": " <button type='button' class='agregar btn-sm btn-primary'>Agregar</button>"}

                ]
            });


            //agregar_venta("#productos",table);

        }

        function filtrar(proveedor){

           listar();

        }




    </script>
