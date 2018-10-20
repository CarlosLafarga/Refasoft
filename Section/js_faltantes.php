    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
     <!-- Chosen -->
    <script src="../Include/js/plugins/chosen/chosen.jquery.js"></script>

   <!-- JSKnob -->
   <script src="../Include/js/plugins/jsKnob/jquery.knob.js"></script>

   <!-- Input Mask-->
    <script src="../Include/js/plugins/jasny/jasny-bootstrap.min.js"></script>

   <!-- Data picker -->
   <script src="../Include/js/plugins/datapicker/bootstrap-datepicker.js"></script>

   <!-- NouSlider -->
   <script src="../Include/js/plugins/nouslider/jquery.nouislider.min.js"></script>

   <!-- Switchery -->
   <script src="../Include/js/plugins/switchery/switchery.js"></script>

    <!-- IonRangeSlider -->
    <script src="../Include/js/plugins/ionRangeSlider/ion.rangeSlider.min.js"></script>

    <!-- iCheck -->
    <script src="../Include/js/plugins/iCheck/icheck.min.js"></script>

    <!-- MENU -->
    <script src="../Include/js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- Color picker -->
    <script src="../Include/js/plugins/colorpicker/bootstrap-colorpicker.min.js"></script>

    <!-- Clock picker -->
    <script src="../Include/js/plugins/clockpicker/clockpicker.js"></script>

    <!-- Image cropper -->
    <script src="../Include/js/plugins/cropper/cropper.min.js"></script>

    <!-- Date range use moment.js same as full calendar plugin -->
    <script src="../Include/js/plugins/fullcalendar/moment.min.js"></script>

    <!-- Date range picker -->
    <script src="../Include/js/plugins/daterangepicker/daterangepicker.js"></script>

    <!-- Select2 -->
    <script src="../Include/js/plugins/select2/select2.full.min.js"></script>

    <!-- TouchSpin -->
    <script src="../Include/js/plugins/touchspin/jquery.bootstrap-touchspin.min.js"></script>

    <!-- Tags Input -->
    <script src="../Include/js/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>

    <!-- Dual Listbox -->
    <script src="../Include/js/plugins/dualListbox/jquery.bootstrap-duallistbox.js"></script>


    <script type="text/javascript">

       $(document).ready(function () {

            listar();
            listar2();
            listar3();
            listar4();

            });





            var listar = function(){



            var table = $("#faltantes").DataTable({
                "pageLength":50,
                "destroy":true,
                "ajax":{
                    "method" : "POST",
                    "url": "../Controlador/listar_faltantes.php"
                },
                "columns":[
                    {"data":"Id"},
                    {"data":"cantidad"},
                    {"data":"codigo"},
                    {"data":"unidad"},
                    {"data":"descripcion"},
                    {"data":"precio"},
                    {"data":"total"},
                ],
                 dom: '<"html5buttons"B>lTfgitp',
                         //'Bfrtip',

                 "buttons":[

                    {extend: 'excel', title: 'Vale Rosalio'}
                ]
            });


           // agregar_venta("#productos",table);
          }


           var listar2 = function(){



            var table = $("#faltantes2").DataTable({
              "pageLength":50,
                "destroy":true,
                "ajax":{
                    "method" : "POST",
                    "url": "../Controlador/listar_faltantes2.php"
                },
                "columns":[
                    {"data":"codigo"},
                    {"data":"Descripcion"},
                    {"data":"unidad"},
                    {"data":"cantidad"},
                    {"data":"Proveedor"},
                    {"data":"Grupo"},
                    {"data":"ult_factura"},
                ],
                 dom: '<"html5buttons"B>lTfgitp',
                         //'Bfrtip',

                 "buttons":[

                    {extend: 'excel', title: 'Faltantes'}
                ]
            });


           // agregar_venta("#productos",table);
          }

          var listar3 = function(){



            var table = $("#faltantes3").DataTable({
              "pageLength":50,
                "destroy":true,
                "ajax":{
                    "method" : "POST",
                    "url": "../Controlador/listar_faltantes_ms.php"
                },
                "columns":[
                    {"data":"codigo"},
                    {"data":"unidad"},
                    {"data":"descripcion"},
                    {"data":"cantidad"},
                    {"data":"cliente_credito"},
                    {"data":"fecha_venta"},
                    {"data":"Proveedor"},
                    {"data":"inventario"},

                ],
                 dom: '<"html5buttons"B>lTfgitp',
                         //'Bfrtip',

                 "buttons":[

                    {extend: 'excel', title: 'Faltantes de martes a sabado'}
                ]
            });


           // agregar_venta("#productos",table);
          }
            var listar4 = function(){



            var table = $("#faltantes4").DataTable({
                "pageLength":50,
                "destroy":true,
                "ajax":{
                    "method" : "POST",
                    "url": "../Controlador/listar_faltantes_lunes.php"
                },
                "columns":[
                    {"data":"codigo"},
                    {"data":"unidad"},
                    {"data":"descripcion"},
                    {"data":"cantidad"},
                    {"data":"cliente_credito"},
                    {"data":"fecha_venta"},
                    {"data":"Proveedor"},
                    {"data":"inventario"},
                ],
                 dom: '<"html5buttons"B>lTfgitp',
                         //'Bfrtip',

                 "buttons":[

                    {extend: 'excel', title: 'Faltantes si hoy es lunes'}
                ]
            });


           // agregar_venta("#productos",table);
          }

       </script>
