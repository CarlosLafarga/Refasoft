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
                    var tipo_precio = document.getElementById("precio").value;
                    prod = data.Descripcion;

                    if(tipo_precio == "precio_publico"){

                        precio = data.PB;
                        total = data.PB;

                    }else if(tipo_precio == "precio_taller"){

                        precio = data.PT;
                        total = data.PT;
                    }

                   
                    contador++;


                    //console.log(data);
                    
                        var fila = "<tr><td>"+prod+"</td><td><input type='number' value='1' name='cantidad' id='cantidad' class='form-control' onchange='onQtyChange(this);' min='1' ></td><td id='precios'>"+precio+"</td><td class='subtotal'>"+total+"</td><td><button onclick='deleteRow(this)' type='button' class='btn-sm btn-danger'>Eliminar</button></td></tr>";

                   

                   


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
          
            if (confirm('¿Desea eliminar el producto de la venta    '+i+' ?')) { 

                    var total_ventas = document.getElementById('ventas').rows[i].cells[3];
                    var total_input = document.getElementById("total").value;
                    chuy = total_ventas.innerHTML;

                    console.log(chuy  + "   Este es el total de la coulmna total");
                    console.log(total_input + "   Este es el total que esta en el input");


                    var preciofinalrow =  parseFloat(total_input) - parseFloat(chuy);
                    console.log(preciofinalrow + "    Este es precio final que queremos poner en el input ");
                    contador = contador -1;

                    document.getElementById("total").value = preciofinalrow.toFixed(2);
                    document.getElementById("num_prod").innerHTML = contador;
                    document.getElementById("ventas").deleteRow(i);
                    
                    
                    

                    }
                     

           
        }


            function onQtyChange(e) {

            var row = e.parentNode.parentNode.rowIndex;
            var total_ventas = document.getElementById('ventas').rows[row].cells[3];
            var precio_articulo = document.getElementById('ventas').rows[row].cells[2];





            var newQty = parseFloat(e.value);
            var precio_art = parseFloat(precio_articulo.innerText);

            
            var total = precio_art * newQty;
            total_ventas.innerText = total.toFixed(2);

            var data = [];
            $("td.subtotal").each(function(){
                 data.push(parseFloat($(this).text()));
                 });
            var suma = data.reduce(function(a,b){ return a+b; },0);


            document.getElementById("total").value = suma.toFixed(2);
            console.log(suma);
            console.log(data);
            console.log(total_ventas.innerHTML);

            }


    </script>