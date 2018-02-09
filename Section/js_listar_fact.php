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
               listar_por_ven();
               listar_ven();

            });

       var listar = function(){


            var table = $("#facturas_pen").DataTable({
                "destroy":true,
                "ajax":{
                    "method" : "POST",
                    "url": "../Controlador/listar_deudas.php"
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


        var listar_por_ven = function(){


            var table = $("#facturas_por_ven").DataTable({
                "destroy":true,
                "ajax":{
                    "method" : "POST",
                    "url": "../Controlador/listar_deudas_vencer.php"
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


         var listar_ven = function(){


            var table = $("#facturas_ven").DataTable({
                "destroy":true,
                "ajax":{
                    "method" : "POST",
                    "url": "../Controlador/listar_deudas_vencidas.php"
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

    </script>
