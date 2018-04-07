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
                cargar(hoy);


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
            cargar(e.value);


       }

       function cargar(fecha){

            var datestring = moment(fecha).format('YYYY/MM/DD');

            if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
            } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
            };
            xmlhttp.open("GET","../Controlador/select_ventas.php?fecha="+datestring,true);
            xmlhttp.send();
            //this.load();
       }

       var listar = function(e){

            var datestring = moment(e.value).format('YYYY/MM/DD');

            //console.log(datestring);
            var table = $("#ventas").DataTable({
                "destroy":true,
                "ajax":{
                    "method" : "POST",
                    "url": "../Controlador/listar_ventas.php?fecha="+datestring+""
                },
                "columns":[
                    {"data":"no_tiket"},
                    {"data":"codigo"},
                    {"data":"descripcion"},
                    {"data":"cantidad"},
                    {"data":"precio"},
                    {"data":"total"},
                    {"data":"tipo_pago"},
                    {"data":"fecha_venta"},
                    {"defaultContent": " <button type='button' class='detalles btn-sm btn-primary'>Detalles</button>|<button type='button' class='tiket btn-sm btn-info'><i class='fa fa-print'></i></button>"}

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

                $(tbody).on("click", "button.tiket", function(){
                    var data = table.row($(this).parents("tr")).data();
                    window.open("ticket.php?no_ticket="+data.no_tiket+"", "Ticket", "width=600, height=800");
                    console.log(data.no_tiket);
                });

          }

    </script>
