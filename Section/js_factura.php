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
    <script src="../Include/js/plugins/typehead/bootstrap3-typeahead.min.js"></script>
    <script src="../Include/js/plugins/datapicker/bootstrap-datepicker.js"></script>
    <script src="../Include/js/plugins/sweetalert/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js"></script>

    <?PHP
include "../conect/conexion.php";
$cn        = Conectarse();
$sql       = "SELECT * FROM proveedores";
$resultado = mysql_query($sql, $cn) or die(mysql_error());
$array     = array();
if ($resultado) {

    while ($row = mysql_fetch_array($resultado)) {

        $cliente = utf8_decode($row['PROVEEDOR']);
        array_push($array, $cliente);
    }
}
?>

    <script type="text/javascript">




            $(document).ready(function () {



               var items = <?=json_encode($array)?>

               /*Script Para el campo de proveedor autocompletar*/
               $('.typeahead_2').typeahead({
                     source: items
               });

               /*Script Para el Campo de Fecha*/
              $('#data_1 .input-group.date').datepicker({
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                calendarWeeks: false,
                autoclose: true
            });
            });



            $('#save').click(function(){



              var factura = $("#Factura").val();
              var fecha = $("#fecha").val();
              var total = $("#total").val();
              var proveedor = $("#proveedor").val();

              var datestring = moment(fecha).format('YYYY/MM/DD HH:MM:SS');

            if(factura !='' && fecha != '' && total != '' && proveedor != ''){

            $.ajax({
                 url:"../Controlador/insertar_deuda.php",
                 method:"POST",
                 data:{factura:factura,fecha:datestring,total:total,proveedor:proveedor},

                 success:function(data){

                    var numero = Number(data);
                    if(numero == 1 ){


                       swal({
                         title:"Buen trabajo!",
                         text: "Se agrego factura a pagar",
                         type: "success"
                         });
                         $("#formFactura")[0].reset();

                    }else if(numero = 2){

                      alert("Error al insertar la deuda.");

                    }



                 }

                 });

          }else{

             swal({
                         title:"Cuidado",
                         text: "Rellene todos los campos",
                         type: "warning"
                         });
          }

         });








    </script>