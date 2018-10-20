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
    <script src="../Include/js/plugins/datapicker/bootstrap-datepicker.js"></script>
    <script src="../Include/js/plugins/sweetalert/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js"></script>

    <script>

       $(document).ready(function () {

                $('#data_1 .input-group.date').datepicker({
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                calendarWeeks: false,
                autoclose: true
                });



               $.ajax({
                    type:"POST",
                    url: "../Controlador/listar_clientes.php",
                    success: function(response){

                      $('#clientes').html(response).fadeIn();
                    }
                    });

            });






        $( "#consultar" ).click(function() {

          var fecha_de = $("#de").val();
          var fecha_a = $("#a").val();
          var cliente = $("#clientes").val();

          var de = moment(fecha_de).format('YYYY/MM/DD');
          var a = moment(fecha_a).format('YYYY/MM/DD');
            //console.log(tipo_fact);
            var table = $("#ventas").DataTable({
                 "pageLength":50,
                "destroy":true,
                "ajax":{
                    "method" : "POST",
                    "url": "../Controlador/listar_credito.php?cliente="+cliente+"&de="+de+"&a="+a+""
                },
                "columns":[
                    {"data":"Id"},
                    {"data":"cantidad"},
                    {"data":"codigo"},
                    {"data":"unidad"},
                    {"data":"descripcion"},
                    {"data":"precio"},
                    {"data":"total"},
                    {"data":"fecha_venta"},


                ],
                  dom: '<"html5buttons"B>lTfgitp',
                         //'Bfrtip',

                 "buttons":[

                    {extend: 'excel', title: 'Vale '+cliente+' de '+de+' a '+a}
                ]
            });

         });

        $( "#imprimir" ).click(function() {

            var fecha_de = $("#de").val();
            var fecha_a = $("#a").val();
            var cliente = $("#clientes").val();

            var de = moment(fecha_de).format('YYYY/MM/DD');
            var a = moment(fecha_a).format('YYYY/MM/DD');
            window.open("nota_credito.php?cliente="+cliente+"&de="+de+"&a="+a+"", "Ticket", "width=600, height=800");

        });



    </script>
