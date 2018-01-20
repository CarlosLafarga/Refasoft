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
               

               listar();
               
            });



            var listar = function(){
            

            var table = $("#productos").DataTable({
                "destroy":true,
                "ajax":{
                    "method" : "POST",
                    "url": "../Controlador/listar_productos.php"
                },
                "columns":[
                    {"data":"codigo"},
                    {"data":"Descripcion"},
                    {"data":"cantidad"},
                    {"data":"ppv"},
                    {"data":"Proveedor"},
                    {"defaultContent": " <button type='button' class='agregar btn-sm btn-primary'>Agregar</button>"}
                    
                ]
            });


            agregar_venta("#productos",table);

        }




         var agregar_venta = function(tbody,table){
                    
                    $(tbody).on("click", "button.agregar", function(){
                    
                    var data = table.row($(this).parents("tr")).data();
                    
                    
                    id = data.Num_Producto;
                    prod = data.Descripcion;
                    cod = data.codigo;
                    


                    //console.log(data);
                    
                        var fila = "<tr>                                                                                                    <input name='id' hidden id='id' class='id' value="+id+"><input hidden class='codigo' id='codigo' name='codigo' value="+cod+"><td id='producto' class='producto'>"+prod+"</td><td><input type='number' value='1' name='cantidad' id='cantidad' class='cantidad form-control' onchange='onQtyChange(this);' min='1' ></td><td class='precios' id='precios'>"+precio+"</td><td id='totals' class='subtotal'>"+total+"</td><td><button onclick='deleteRow(this)' type='button' class='btn-sm btn-danger'>Eliminar</button></td></tr>";

                   

                   


                    var btn = document.createElement("tr");
                    btn.innerHTML=fila;
                    document.getElementById("actualizar").appendChild(btn);
                   
                    
                    

                });

                  


        }

    </script>