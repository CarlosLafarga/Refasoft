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
    <script src="../Include/js/moment.min.js"></script>

    <script>

       $(document).ready(function () {

                var hoy = new Date();
                var dd = hoy.getDate();
                var mm = hoy.getMonth()+1; //hoy es 0!
                var yyyy = hoy.getFullYear();

               if(dd<10) {
                    dd='0'+dd
                }

               if(mm<10) {
                     mm='0'+mm
                }

                hoy = mm+'/'+dd+'/'+yyyy;

                listar(hoy);


                $('#data_1 .input-group.date').datepicker({
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                calendarWeeks: false,
                autoclose: true
            });

            });

       function corte(e){

            listar(e);


       }



       var listar = function(e){

            var datestring = moment(e.value).format('YYYY/MM/DD');

            //console.log(datestring);
            var table = $("#ventas").DataTable({
                "destroy":true,
                "ajax":{
                    "method" : "POST",
                    "url": "../Controlador/listar_ventas_all.php?fecha="+datestring+""
                },
                "columns":[
                    {"data":"no_tiket"},
                    {"data":"vendedor"},
                    {"data":"venta_total"},
                    {"data":"cliente_credito"},
                    {"data":"tipo_pago"},
                    {"data":"fecha_venta"},
                    {"defaultContent": " <center><button type='button' class='detalles btn-sm btn-primary'><i class='fa fa-list'></i>&nbsp;Detalles</button>|<button type='button' class='borrar btn-sm btn-danger'><i class='fa fa-trash'></i>&nbsp;Borrar</button></center>"}

                ]
            });


            detalles("#ventas",table);

        }

         var detalles = function(tbody,table){

                $(tbody).off('click');

                $(tbody).on("click", "button.detalles", function(){
                    var data = table.row($(this).parents("tr")).data();
                    window.location.href = "detalles_venta.php?no_tiket="+data.no_tiket+"";
                    console.log(data.no_tiket);
                });


                 $(tbody).on("click", "button.borrar", function(){
                     var data = table.row($(this).parents("tr")).data();
                     console.log(data);

                   swal({

                    title: "Estas Seguro?",
                    text: "¿Desea borrar tiket por completo ?",
                    type: "error",
                    showCancelButton: true,
                    confirmButtonColor: '#DD6B55',
                    confirmButtonText: 'Si, Estoy seguro!',
                    cancelButtonText: "No, Cancelar!"

                    },


                    function (isConfirm) {

                    if (isConfirm){

                    var no_tiket = data.no_tiket;


                    console.log(no_tiket);


                    $.ajax({
                    url:"../Controlador/borrar_tiket.php",
                    method:"POST",
                    data:{no_tiket:no_tiket},

                    success:function(data){

                            //console.log(data);
                            if(data == 2){
                                 swal({
                                     title:"Buen trabajo!",
                                     text: "Buen Trabajo tiket borrado  con exito.",
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
                });


          }

    </script>
