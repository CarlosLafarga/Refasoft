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
        var num=1;
        var uni;



            $(document).ready(function () {


               listar();

              

            });



            var listar = function(){


              var table = $("#inventario").DataTable({

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
                      {"data":"Inventario"},
                      {"data":"Proveedor"},
                      {"defaultContent": " <button type='button' class='agregar btn-sm btn-primary'><i class='fa fa-arrow-circle-right'><i></button>"}
                  ]
              });
              agregar_venta("#inventario",table);
            }

            

        var agregar_venta = function(tbody,table){

                    $(tbody).on("click", "button.agregar", function(){

                    var data = table.row($(this).parents("tr")).data();
                    prod = data.Descripcion;
                    cod = data.codigo;
                    id = data.Num_Producto;
                    uni = data.unidad;
                    inv=data.Inventario;
                    cant=data.cantidad;

                    contador++;

                        var fila = "<tr><input name='id' hidden id='id' class='id' value="+id+"><input name='invbd' hidden id='invbd' class='invbd' value="+inv+"><input hidden class='codigo' id='codigo' name='codigo' value="+cod+"><td id='producto' class='producto'>"+cod+"/"+prod+"</td><td class='unidad'>"+uni+"</td><td id='cantidad' class='cantidad'>"+cant+"</td><input type='number' value='1' name='invent' id='invent' class='invent form-control'  min='1'><td><button onclick='deleteRow(this)' type='button' class='btn-sm btn-danger'><i class='fa fa-trash-o' ></i></button></td></tr>";

                        


                    var btn = document.createElement("tr");
                    btn.innerHTML=fila;
                    document.getElementById("tablita").appendChild(btn);
                    document.getElementById("num_prod").innerHTML = contador;
                    acumulado = 2
                    preciofinal = 2
                   


                });




        }




        function deleteRow(r) {

                   var i = r.parentNode.parentNode.rowIndex;
                    swal({
                         title: "Estas Seguro?",
                         text: "¿Desea eliminar la actualizadion de INVENTARIO del producto: "+i+" ?",
                         type: "warning",
                         showCancelButton: true,
                         confirmButtonColor: '#DD6B55',
                         confirmButtonText: 'Si, Estoy seguro!',
                         cancelButtonText: "No, Cancelar!"

                         },
                         function (isConfirm) { /*Your Code Here*/

                          if (isConfirm){
                                                   contador = contador -1;
                          document.getElementById("num_prod").innerHTML = contador;
                          document.getElementById("ventas").deleteRow(i);

                        }else{

                          return false;

                        }
                        });





        }


            

        $('#save').click(function(){

              var codigo = [];
              var invent = [];
              var id = [];
              var invbd = [];
              var cantidad = [];
             
              $('.id').each(function(){
               id.push($(this).val());
              });
              $('.codigo').each(function(){
               codigo.push($(this).val());
              });
              
              $('.invent').each(function(){
              invent.push($(this).val());
              });

              $('.invbd').each(function(){
              invbd.push($(this).val());
              });

              $('.cantidad').each(function(){
               cantidad.push($(this).text());
               });
              


            

                  $.ajax({
                   url:"../Controlador/insertar_inventario.php",
                   method:"POST",
                   data:{id:id,invent:invent,codigo:codigo,invbd:invbd,cantidad:cantidad}
                   ,


                   success:function(data){
                      
                      var obj = JSON.parse(data);
                      var cambio = Number(data);
                    
                       if(data == 1){

                             swal({
                             title:"Buen trabajo!",
                             text: "Se guardo su INVENTARIO con exito",
                             type: "success",
                             showCancelButton: false,
                             confirmButtonText: "Aceptar",
                             closeOnConfirm: true
                             },
                              function(){
                                location.reload();
                              });

                     }

                 }
      });        
         });  


        $('#cancelar').click(function(){

                   swal({
                         title: "Estas Seguro?",
                         text: "¿Desea cancelar la actualizacion de INVENTARIO ?",
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
