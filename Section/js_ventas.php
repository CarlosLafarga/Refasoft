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
                listar_credito(hoy);
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
            listar_credito(e);
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
            console.log(datestring);
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

        var listar_credito = function(e){

            var datestring = moment(e.value).format('YYYY/MM/DD');
            console.log(datestring);
            //console.log(datestring);
            var table = $("#ventas_credito").DataTable({
                "destroy":true,
                "ajax":{
                    "method" : "POST",
                    "url": "../Controlador/listar_ventas_credito.php?fecha="+datestring+""
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


            detalles("#ventas_credito",table);

        }

         var detalles = function(tbody,table){

                $(tbody).off('click');

                $(tbody).on("click", "button.detalles", function(){
                    var data = table.row($(this).parents("tr")).data();
                    window.location.href = "detalles_venta.php?no_tiket="+data.no_tiket+"&codigo="+data.codigo+"";
                    console.log(data.no_tiket);
                });

                $(tbody).on("click", "button.tiket", function(){
                    var data = table.row($(this).parents("tr")).data();
                    window.open("ticket.php?no_ticket="+data.no_tiket+"", "Ticket", "width=600, height=800");

                    console.log(data.no_tiket);
                });

          }

    </script>
