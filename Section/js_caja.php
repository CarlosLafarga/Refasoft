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
    <script src="../Include/js/plugins/sweetalert/sweetalert.min.js"></script>


    <script type="text/javascript">


        var contador = 0;
        var cantidad = 0;
        var prod = "";
        var precio = 0;
        var total= 0;
        var valores = "";
        var acumulado  = 0;
        var preciofinal = 0;



            $(document).ready(function () {


               listar();

               $.ajax({
                    type:"POST",
                    url: "../Controlador/listar_clientes.php",
                    success: function(response){

                      $('#clientes').html(response).fadeIn();
                    }
                    });

            });



            var listar = function(){


            var table = $("#productos").DataTable({
                "destroy":true,
                "ajax":{
                    "method" : "POST",
                    "url": "../Controlador/listar_productos.php"
                },
                "columns":[
                    {"data":"Num_Producto"},
                    {"data":"codigo"},
                    {"data":"Descripcion"},
                    {"data":"cantidad"},
                    {"data":"PT"},
                    {"data":"PB"},
                    {"data":"Proveedor"},
                    {"defaultContent": " <button type='button' class='agregar btn-sm btn-primary'>Agregar</button>"}

                ]
            });


            agregar_venta("#productos",table);

        }

        var agregar_venta = function(tbody,table){

                    $(tbody).on("click", "button.agregar", function(){

                    var data = table.row($(this).parents("tr")).data();
                    var tipo_precio = document.getElementById("tipo_cliente").value;
                    prod = data.Descripcion;
                    cod = data.codigo;
                    id = data.Num_Producto;

                    if(tipo_precio == "precio_publico"){

                        precio = data.PB;
                        total = data.PB;

                    }else if(tipo_precio == "precio_taller"){

                        precio = data.PT;
                        total = data.PT;
                    }


                    contador++;


                    //console.log(data);

                        var fila = "<tr>                                                                                                    <input name='id' hidden id='id' class='id' value="+id+"><input hidden class='codigo' id='codigo' name='codigo' value="+cod+"><td id='producto' class='producto'>"+cod+"/-"+prod+"</td><td><input type='number' value='1' name='cantidad' id='cantidad"+contador+"' class='cantidad form-control' onchange='onQtyChange(this);' min='1' ></td><td ><input type='number' class='precios form-control' min= '0'id='precios"+contador+"' onchange='preciocambio(this);' value='"+precio+"'></td><td id='totals' class='subtotal'>"+total+"</td><td><button onclick='deleteRow(this)' type='button' class='btn-sm btn-danger'><i class='fa fa-trash-o' ></i></button></td></tr>";






                    var btn = document.createElement("tr");
                    btn.innerHTML=fila;
                    document.getElementById("tablita").appendChild(btn);
                    document.getElementById("num_prod").innerHTML = contador;
                    acumulado = document.getElementById("total").value;
                    preciofinal = parseFloat(total) + parseFloat(acumulado);

                    document.getElementById("total").value = preciofinal.toFixed(2);


                });




        }




        function deleteRow(r) {

                   var i = r.parentNode.parentNode.rowIndex;



                    swal({
                         title: "Estas Seguro?",
                         text: "¿Desea eliminar el producto de la venta   "+i+" ?",
                         type: "warning",
                         showCancelButton: true,
                         confirmButtonColor: '#DD6B55',
                         confirmButtonText: 'Si, Estoy seguro!',
                         cancelButtonText: "No, Cancelar!"

                         },
                         function (isConfirm) { /*Your Code Here*/

                          if (isConfirm){
                          var total_ventas = document.getElementById('ventas').rows[i].cells[3];
                          var total_input = document.getElementById("total").value;
                          chuy = total_ventas.innerHTML;
                          var preciofinalrow =  parseFloat(total_input) - parseFloat(chuy);
                          contador = contador -1;

                          document.getElementById("total").value = preciofinalrow.toFixed(2);
                          document.getElementById("num_prod").innerHTML = contador;
                          document.getElementById("ventas").deleteRow(i);
                        }else{

                          return false;

                        }
                        });





        }


            function onQtyChange(e) {

            var row = e.parentNode.parentNode.rowIndex;
            var total_ventas = document.getElementById('ventas').rows[row].cells[3];
            var precio_articulo = document.getElementById('ventas').rows[row].cells[2];
            var precio_input1 = $("#precios"+row+"").val();
            var chuy = precio_articulo.value = Number(precio_input1);





            var newQty = parseFloat(e.value);
            var precio_art = parseFloat(chuy);


            var total = precio_art * newQty;
            total_ventas.innerText = total.toFixed(2);

            var data = [];
            $("td.subtotal").each(function(){
                 data.push(parseFloat($(this).text()));
             });
            var suma = data.reduce(function(a,b){ return a+b; },0);


            document.getElementById("total").value = suma.toFixed(2);
            //console.log(suma);
            //console.log(data);
            //console.log(total_ventas.innerHTML);

            }


            function preciocambio(e){

               var row = e.parentNode.parentNode.rowIndex;
               var total_ventas = document.getElementById('ventas').rows[row].cells[3];
               var precio_input = parseFloat(e.value);
               var cantidad = document.getElementById('ventas').rows[row].cells[1];
               var nomas = $("#cantidad"+row+"").val();
               var chuy = cantidad.innerHTML.value = nomas;

               var mult = chuy * precio_input;

               total_ventas.innerText = mult.toFixed(2);

               var data = [];
            $("td.subtotal").each(function(){
                 data.push(parseFloat($(this).text()));
             });
            var suma = data.reduce(function(a,b){ return a+b; },0);


            document.getElementById("total").value = suma.toFixed(2);



            }




        $('#save').click(function(){

              var codigo = [];
              var producto = [];
              var cantidad = [];
              var precios = [];
              var totals = [];
              var id = [];

              var pago_con = $("#pagocon").val();
              var total_total = $("#total").val();
              var tipo_pago = $("#pago").val();
              var nombre_usuario = $("#name").val();
              var tipo_cliente = $("#tipo_cliente").val();
              var nombre_credito = $("#clientes").val();


          $('.id').each(function(){
           id.push($(this).val());
          });
          $('.codigo').each(function(){
           codigo.push($(this).val());
          });
          $('.producto').each(function(){
           producto.push($(this).text());
          });
          $('.cantidad').each(function(){
           cantidad.push($(this).val());
          });
          $('.precios').each(function(){
           precios.push($(this).val());
          });
          $('.subtotal').each(function(){
           totals.push($(this).text());
          });


          if(tipo_pago == 'credito'){

              if(nombre_credito != ''){

                 $.ajax({
                 url:"../Controlador/insertar_Ventas.php",
                 method:"POST",
                 data:{id:id,codigo:codigo, producto:producto, cantidad:cantidad, precios:precios,totals:totals,pago_con:pago_con,total_total:total_total,tipo_pago:tipo_pago,nombre_usuario:nombre_usuario,tipo_cliente:tipo_cliente,nombre_credito:nombre_credito},

                 success:function(data){

                  console.log(data);
                  var obj = JSON.parse(data);
                  console.log("Este es el  objeto"+obj.numero);
                  var cambio = Number(data);
                  console.log("Este es el ticket"+obj.no_tiket);
                  var devolucion = parseFloat(pago_con-total_total);

                   if(obj.numero == 1){

                         swal({
                         title:"Buen trabajo!",
                         text: "Se guardo venta con exito \n No.ticket:"+obj.no_tiket+" .",
                         type: "success",
                         showCancelButton: false,
                         confirmButtonText: "Aceptar",
                         closeOnConfirm: true
                         },
                         function(){

                          window.open("ticket.php?no_ticket="+obj.no_tiket+"", "Ticket", "width=600, height=800");
                          location.reload();
                         });


                   }else if(cambio == 4){


                        swal({
                             title: "Error!",
                             text: "Error en la tabla de ventas",
                             type: "error",
                             showCancelButton: false,
                             confirmButtonText: "Aceptar",
                             closeOnConfirm: true
                             },
                             function(){

                              location.reload();

                             });

                   }else if(cambio == 5){

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


                   }else if (cambio == 6 ){

                         swal({
                         title:"Error!",
                         text: "Error al momento de insertar en la tabla de ventas.",
                         type: "error",
                         showCancelButton: false,
                         confirmButtonText: "Aceptar",
                         closeOnConfirm: true
                         },
                         function(){

                          location.reload();
                         });


                   }else if(cambio == 7){

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


                   }else if(cambio == 8){

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
                         text: "Rellene el campo cliente.",
                         type: "error",
                         showCancelButton: false,
                         confirmButtonText: "Aceptar",
                         closeOnConfirm: true
                         },
                         function(){


                         });

              }


          }else{

            if(pago_con == ''){

                 swal({
                         title:"Cuidado!",
                         text: "Ingrese el monto en el campo pago con.",
                         type: "warning",
                         showCancelButton: false,
                         confirmButtonText: "Aceptar",
                         closeOnConfirm: true
                         },
                         function(){


                         });

            }else{

              if(Number(pago_con) < total_total){

                  swal({
                         title:"Cuidado!",
                         text: "El pago es menor al total de su venta.",
                         type: "error",
                         showCancelButton: false,
                         confirmButtonText: "Aceptar",
                         closeOnConfirm: true
                         },
                         function(){


                         });

              }else{

                  $.ajax({
                 url:"../Controlador/insertar_Ventas.php",
                 method:"POST",
                 data:{id:id,codigo:codigo, producto:producto, cantidad:cantidad, precios:precios,totals:totals,pago_con:pago_con,total_total:total_total,tipo_pago:tipo_pago,nombre_usuario:nombre_usuario,tipo_cliente:tipo_cliente,nombre_credito:nombre_credito},

                 success:function(data){

                  var obj = JSON.parse(data);
                  var cambio = Number(data);
                  var devolucion = parseFloat(pago_con-total_total);

                   if(obj.numero == 1){

                         swal({
                         title:"Buen trabajo!",
                         text: "Se guardo venta con exito. \n  Su cambio es de:    "+devolucion.toFixed(2)+"\n  No.Ticket: "+obj.no_tiket+"",
                         type: "success",
                         showCancelButton: false,
                         confirmButtonText: "Aceptar",
                         closeOnConfirm: true
                         },
                         function(){

                          window.open("ticket.php?no_ticket="+obj.no_tiket+"", "Ticket", "width=600, height=800");
                          location.reload();

                         });


                   }else if(cambio == 4){


                        swal({
                             title: "Error!",
                             text: "Error en la tabla de ventas",
                             type: "error",
                             showCancelButton: false,
                             confirmButtonText: "Aceptar",
                             closeOnConfirm: true
                             },
                             function(){

                              location.reload();

                             });

                   }else if(cambio == 5){

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


                   }else if (cambio == 6 ){

                         swal({
                         title:"Error!",
                         text: "Error al momento de insertar en la tabla de ventas.",
                         type: "error",
                         showCancelButton: false,
                         confirmButtonText: "Aceptar",
                         closeOnConfirm: true
                         },
                         function(){

                          location.reload();
                         });


                   }else if(cambio == 7){

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


                   }else if(cambio == 8){

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


              }


            }

          }











         });

        $('#cancelar').click(function(){

                   swal({
                         title: "Estas Seguro?",
                         text: "¿Desea cancelar la venta ?",
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


         function mostrar(sel) {

         if  (sel.value == "credito"){
              AM = document.getElementById("clientediv");
              AM.style.display = "";

         }else {

              AM = document.getElementById("clientediv");
              AM.style.display = "none";

          }
         }






    </script>
