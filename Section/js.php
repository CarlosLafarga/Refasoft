    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
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

        <script>
            $(document).ready(function () {
                $('.i-checks').iCheck({
                    checkboxClass: 'icheckbox_square-green',
                    radioClass: 'iradio_square-green',
                });

               listar();

            });



            var listar = function(){
            

            var table = $("#productos").DataTable({
                "destroy":true,
                "ajax":{
                    "method" : "POST",
                    "url": "../Section/listarprodController.php"
                },
                "columns":[
                    {"data":"Num_Producto"},
                    {"data":"codigo"},
                    {"data":"unidad"},
                    {"data":"Descripcion"},
                    {"data":"PT"},
                    {"data":"PB"},
                    {"data":"ppv"},
                    {"data":"Proveedor"},
                    {"data":"Grupo"},
                    {"defaultContent": " <button type='button' class='editar btn-sm btn-primary'><i class='fa fa-edit'></i></button><span>|</span><button type='button' class='eliminar btn-sm btn-danger'><i class='fa fa-trash'></i></button>"}
                    
                ]
            });


            obtener_serie("#productos",table);

        }

        var obtener_serie = function(tbody,table){
                $(tbody).on("click", "button.editar", function(){
                    var data = table.row($(this).parents("tr")).data();
                    location.href = "EditAlmacen.php?id="+data.Num_Producto+"";
                    console.log(data.Num_Producto);
                });

                  $(tbody).on("click", "button.eliminar", function(){
                    var data = table.row($(this).parents("tr")).data();
                     if (confirm('¿Desea eliminar el producto' +' ' + data.Num_Producto + '?')) { 
                    window.location.href = "../Modelo/funcionborrar.php?id="+data.Num_Producto+"";
                    console.log(data.Num_Producto);
                    }
                });


        }

        </script>
    <!-- script para listar los datos de las compras -->   

        <script>
            $(document).ready(function () {
                $('.i-checks').iCheck({
                    checkboxClass: 'icheckbox_square-green',
                    radioClass: 'iradio_square-green',
                });

               lista();

            });



            var lista = function(){
            

            var table = $("#compras").DataTable({
                "destroy":true,
                "ajax":{
                    "method" : "POST",
                    "url": "../Section/listarcompController.php"
                },
                "columns":[
                    {"data":"id_compra"},
                    {"data":"factura_compra"},
                    {"data":"codigo_compra"},
                    {"data":"cantidad_compra"},
                    {"data":"fechafac"},
                    {"data":"Proveedor_compra"},
                    {"data":"ppv_compra"},
                    {"defaultContent": " <center><button type='button' class='editar btn-sm btn-primary'><i class='fa fa-edit'></i>&nbsp;Editar</button><span>|</span><button type='button' class='eliminar btn-sm btn-danger'><i class='fa fa-trash'></i>&nbsp;Eliminar</button></center>"}
                    
                ]
            });


            obtener("#compras",table);

        }

        var obtener = function(tbody,table){
                $(tbody).on("click", "button.edita", function(){
                    var data = table.row($(this).parents("tr")).data();
                    location.href = "EditComp.php?id="+' '+data.id_compra+"";
                    console.log(data.id_compra);
                });

                  $(tbody).on("click", "button.eliminar", function(){
                    var data = table.row($(this).parents("tr")).data();
                     if (confirm('¿Desea eliminar la factura' +' ' + data.factura_compra + '?')) { 
                    window.location.href = "../Modelo/borrarComp.php?id="+data.id_compra+"";
                    console.log(data.id_compra);
                    }
                });


        }

        </script>  


    
    <!-- Validaciones -->
    <script type="text/javascript">
      
          function validaletra(e) { 
          tecla = (document.all) ? e.keyCode : e.which; 
          if (tecla==8) return true; 
          patron =/[A-Za-z\s]/; 
          te = String.fromCharCode(tecla); 
          return patron.test(te); 
          }
           function validacorreo(e) { 
          tecla = (document.all) ? e.keyCode : e.which; 
          if (tecla==8) return true; 
          patron =/^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i; 
          te = String.fromCharCode(tecla); 
          return patron.test(te); 
          }

          function validanum(e){
          tecla = (document.all) ? e.keyCode : e.which;

          if (tecla==8){
              return true;
          }
              patron =/^([0-9])/;
              tecla_final = String.fromCharCode(tecla);
              return patron.test(tecla_final);
          }

          function validaPiso(e){
          tecla = (document.all) ? e.keyCode : e.which;

          if (tecla==8){
              return true;
          }
              patron =/^([1-2])/;
              tecla_final = String.fromCharCode(tecla);
              return patron.test(tecla_final);
          }
           function validaPasillo(e){
          tecla = (document.all) ? e.keyCode : e.which;

          if (tecla==1){
              return true;
          }
              patron =/^([1-4])/;
              tecla_final = String.fromCharCode(tecla);
              return patron.test(tecla_final);
          }
          function validaEstantePeldaño(e){
          tecla = (document.all) ? e.keyCode : e.which;

          if (tecla==1){
              return true;
          }
              patron =/^([0-9])/;
              tecla_final = String.fromCharCode(tecla);
              return patron.test(tecla_final);
          }

          function validadecimal(e){
          tecla = (document.all) ? e.keyCode : e.which;

          if (tecla==8){
              return true;
          }
              patron =/^([0-9.]*$)/;
              tecla_final = String.fromCharCode(tecla);
              return patron.test(tecla_final);
          }

         $(document).ready(function() {
            //$('select').material_select();
         });     
      </script>


