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

    <script type="text/javascript">

        $(document).ready(function () {


         });

        $( "#aceptar1" ).click(function() {

            var nombre = $("#nombre").val();
            var monto = $("#monto").val();
            var fecha = $("#fecha").val();
            var obs = $("#obs").val();
            console.log(nombre+"-----"+monto +"---"+fecha+"---"+obs);
            if(nombre != "" && monto > 0  && obs !="" ){

                 $.ajax({
                 url:"../Controlador/insertar_prestamo.php",
                 method:"POST",
                 data:{nombre:nombre,monto:monto,fecha:fecha,obs:obs},

                 success:function(data){

                    var numero = Number(data);
                    if(numero == 1 ){


                       swal({
                         title:"Buen trabajo!",
                         text: "Se agrego prestamo con exito",
                         type: "success"
                         });
                         $("#prestamo")[0].reset();

                    }else if(numero = 2){

                      alert("Error al insertar prestamo.");
                      $("#prestamo")[0].reset();

                    }



                 }

                 });
            }else{

                   swal({
                         title:"Cuidado!",
                         text: "Debe Rellenar todos los campos requeridos.",
                         type: "warning"
                         });

            }


        });


        $('#cancelar1').click(function(){

                   swal({
                         title: "Estas Seguro?",
                         text: "¿Desea cancelar la transaccion?",
                         type: "warning",
                         showCancelButton: true,
                         confirmButtonColor: '#DD6B55',
                         confirmButtonText: 'Si, Estoy seguro!',
                         cancelButtonText: "No, Cancelar!"

                         },
                         function (isConfirm) { /*Your Code Here*/

                          if (isConfirm){

                              location.reload();

                              }else{

                               return false;

                             }
                        });

        });
    </script>
