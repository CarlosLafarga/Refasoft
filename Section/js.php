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
    <script src="js/plugins/iCheck/icheck.min.js"></script>
        <script>
            $(document).ready(function () {
                $('.i-checks').iCheck({
                    checkboxClass: 'icheckbox_square-green',
                    radioClass: 'iradio_square-green',
                });
            });
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
            $('select').material_select();
         });     
      </script>


