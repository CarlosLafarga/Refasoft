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

            var no_tiket = $("#no_tiket").val();
            listar(no_tiket);
            var table;
            var i = 0;
            var renglon = i++;
         });

         var listar = function(e){

            var no_tiket = e;


            //console.log(datestring);
             table = $("#detalles").DataTable({
                "destroy":true,
                "ajax":{
                    "method" : "POST",
                    "url": "../Controlador/listar_detalles_tiket.php?no_tiket="+no_tiket+""
                },
                "columns":[
                    {"data":"no_tiket"},
                    {"data":"codigo"},
                    {"data":"descripcion"},
                    {"data":"cantidad"},
                    {"defaultContent":"<center><input type='number' id='cant_dev' value='0' min='0' class='form-control'></center>"},
                    {"data":"precio"},
                    {"data":"total"},
                    {"data":"fecha_venta"},
                    {"defaultContent": " <center><button type='button' class='devolucion btn-sm btn-danger'>Devolucion</button></center>"}

                ]

            });


            obtener_serie("#detalles",table);

        }

        var obtener_serie = function(tbody,table){


                $(tbody).on("click", "button.devolucion", function(){

                   var data = table.row($(this).parents("tr")).data();
                   console.log(data);
                   swal({

                    title: "Estas Seguro?",
                    text: "¿Desea hacer devolucion del producto ?",
                    type: "error",
                    showCancelButton: true,
                    confirmButtonColor: '#DD6B55',
                    confirmButtonText: 'Si, Estoy seguro!',
                    cancelButtonText: "No, Cancelar!"

                    },


                    function (isConfirm) {

                    if (isConfirm){

                    var no_tiket = data.no_tiket;
                    var cantidad = $("#cant_dev").val();
                    var precio = data.precio;
                    var codigo = data.codigo;
                    var total = data.total;

                    console.log(no_tiket+"----"+cantidad+"----"+total+"----"+codigo+"");


                    $.ajax({
                    url:"../Controlador/devolucion.php",
                    method:"POST",
                    data:{no_tiket:no_tiket,cantidad:cantidad,precio:precio,codigo:codigo},

                    success:function(data){

                            //console.log(data);
                            if(data == 2){
                                 swal({
                                     title:"Buen trabajo!",
                                     text: "Buen Trabajo Deolucion echa con exito.",
                                     type: "success",
                                     showCancelButton: false,
                                     confirmButtonText: "Aceptar",
                                     closeOnConfirm: true
                                     },
                                     function(){


                                      location.reload();

                                     });
                            }else{

                                swal({
                                    title: "Error!",
                                    text: "Error al modificar tablas.",
                                    type: "error",
                                    showCancelButton: false,
                                    confirmButtonText: "Aceptar",
                                    closeOnConfirm: true
                                    },

                                    function(){

                                     //location.reload();

                                    });

                            }




                    }

                 });
                    /*else del if confirm*/
                    }else{

                          return false;

                        }
                    });


                /*-------------------*/
                });



        }



    </script>
