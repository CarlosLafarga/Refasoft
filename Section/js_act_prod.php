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


                     var id = data.Num_Producto;
                     var prod = data.Descripcion;
                     var cod = data.codigo;
                     var ppv = data.ppv;
                     var pt = data.PT;
                     var ppb = data.PB;
                     var cantidad = data.cantidad;
                     var prov = data.Proveedor;




                    //console.log(data);

                    var fila = "<tr><input name='id' hidden id='id' class='id' value="+id+"><td class='codigo'>"+cod+"</td><td id='producto' class='producto'>"+prod+"</td><td><input type='number' value='1' name='cantidad' id='cantidad' class='cantidad form-control' value="+cantidad+" min='1'></td><td><input type='number' class='ppv form-control' onchange='onQtyChange(this);' id='ppv' value='"+ppv+"'></td><td id='pt' class='pt'>"+pt+"</td><td id='ppb' class='ppb'>"+ppb+"</td><td id='prov' class='prov'>"+prov+"</td><td><button onclick='deleteRow(this)' type='button' class='btn-sm btn-danger'>Eliminar</button></td></tr>";






                    var btn = document.createElement("tr");
                    btn.innerHTML=fila;
                    document.getElementById("tablita").appendChild(btn);




                });




        }


        function deleteRow(r) {

                   var i = r.parentNode.parentNode.rowIndex;


                    swal({
                         title: "Estas Seguro?",
                         text: "¿Desea eliminar el producto numero  "+i+" ?",
                         type: "error",
                         showCancelButton: true,
                         confirmButtonColor: '#ed5565',
                         confirmButtonText: 'Si, Estoy seguro!',
                         cancelButtonText: "No, Cancelar!"

                         },
                         function (isConfirm) { /*Your Code Here*/

                          if (isConfirm){

                          document.getElementById("actualizar").deleteRow(i);

                        }else{

                          return false;

                        }
                        });





        }



            function onQtyChange(e) {


            var row = e.parentNode.parentNode.rowIndex;
            var precio_taller = document.getElementById('actualizar').rows[row].cells[4];
            var precio_publico = document.getElementById('actualizar').rows[row].cells[5];
            var proveedor = document.getElementById('actualizar').rows[row].cells[6];

            var prove = proveedor.innerText;

            var newQty = parseFloat(e.value);

            if(prove == 'permor'){

                var ptt = parseFloat((newQty * 1.024)/1.25);
                var pb = parseFloat(newQty * 1.024);

                precio_taller.innerText = ptt.toFixed(2);
                precio_publico.innerText = pb.toFixed(2);

            }else if(prove == 'Apymsa'){

                var ptt = parseFloat(((newQty * 1.35) * 1.16) * .8);
                var pb = parseFloat((newQty * 1.35) * 1.16);

                precio_taller.innerText = ptt.toFixed(2);
                precio_publico.innerText = pb.toFixed(2);

            }else if(prove == 'serva'){

                var ptt = parseFloat(((newQty * 1.8) * 1.16) * .8);
                var pb = parseFloat((newQty * 1.8) * 1.16);

                precio_taller.innerText = ptt.toFixed(2);
                precio_publico.innerText = pb.toFixed(2);

            }else if(prove == 'ciosa'){

                var ptt = parseFloat(((newQty * 1.8) * 1.16) * .8);
                var pb = parseFloat((newQty * 1.8) * 1.16);

                precio_taller.innerText = ptt.toFixed(2);
                precio_publico.innerText = pb.toFixed(2);

            }


            }


            $('#guardar').click(function(){

                var factura  = $("#factura").val();

            if(factura != ''){

                var id = [];
                var codigo = [];
                var producto = [];
                var cantidad = [];
                var precio_prove = [];
                var precio_taller = [];
                var precio_publico = [];
                var proveedor = [];




                $('.id').each(function(){
                 id.push($(this).val());
                });

                $('.codigo').each(function(){
                 codigo.push($(this).text());
                });

                $('.producto').each(function(){
                 producto.push($(this).text());
                });

                $('.cantidad').each(function(){
                 cantidad.push($(this).val());
                });

                $('.ppv').each(function(){
                 precio_prove.push($(this).val());
                });

                $('.pt').each(function(){
                 precio_taller.push($(this).text());
                });

                $('.ppb').each(function(){
                 precio_publico.push($(this).text());
                });

                $('.prov').each(function(){
                 proveedor.push($(this).text());
                });

                $.ajax({
                 url:"../Controlador/actualizar_prod.php",
                 method:"POST",
                 data:{id:id,codigo:codigo, producto:producto, cantidad:cantidad,precio_prove:precio_prove,precio_taller:precio_taller,precio_publico:precio_publico,proveedor:proveedor,factura:factura},

                 success:function(data){


                    var recibi = Number(data);
                   if(recibi == 1){

                         swal({
                         title:"Buen trabajo!",
                         text: "Se actualizaron productos con exito",
                         type: "success",
                         showCancelButton: false,
                         confirmButtonText: "Aceptar",
                         closeOnConfirm: true
                         },
                         function(){

                          location.reload();
                         });


                   }else if(recibi == 5 ){

                    swal({
                         title:"Error!",
                         text: "Error en el update de productos",
                         type: "error",
                         showCancelButton: false,
                         confirmButtonText: "Aceptar",
                         closeOnConfirm: true
                         },
                         function(){

                          location.reload();
                         });

                   }else if (recibi == 6 ){

                         swal({
                         title:"Error!",
                         text: "Error al momento de insertar en la tabla de compras.",
                         type: "error",
                         showCancelButton: false,
                         confirmButtonText: "Aceptar",
                         closeOnConfirm: true
                         },
                         function(){

                          location.reload();
                         });


                   }else if(recibi == 7){

                         swal({
                         title:"Error!",
                         text: "Error en el script campo vacio del formulario.",
                         type: "error",
                         showCancelButton: false,
                         confirmButtonText: "Aceptar",
                         closeOnConfirm: true
                         },
                         function(){

                          location.reload();
                         });


                   }else if(recibi == 8){

                         swal({
                         title:"Cuidado!",
                         text: "No ha seleccionado ningun articulo.",
                         type: "warning",
                         showCancelButton: false,
                         confirmButtonText: "Aceptar",
                         closeOnConfirm: true
                         },
                         function(){


                         });

                   }


                   //location.reload();


                 }

                 });



                  }else{


                      swal({
                         title:"Cuidado!",
                         text: "Rellene el capo de No.Factura.",
                         type: "warning",
                         showCancelButton: false,
                         confirmButtonText: "Aceptar",
                         closeOnConfirm: true
                         },
                         function(){


                         });
                 }



            });

    </script>
