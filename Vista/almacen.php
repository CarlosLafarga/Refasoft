<?php
session_start();

if (!isset($_SESSION["nombre"])) {
    header("location:../Vista/Login.php");
    exit();

}

?>
<!DOCTYPE html>
<html>
<head>
  <title>ALMACEN</title>
      <?PHP include "../Section/css.php";?>
          <?PHP include "../Section/js.php";?>
</head>
<body class="top-navigation">
  <div id="wrapper">
     <div id="page-wrapper" class="gray-bg">
                <?PHP include "../Section/menu.php";?>

                 <div class="wrapper wrapper-content">
                   <div class="container">
                    <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>AGREGAR PRODUCTO <small></small></h5>
                            <div class="ibox-tools">

                            </div>
                        </div>
                        <div class="ibox-content">
                            <form method="get" class="form-horizontal">


                                <div class="form-group">

                                  <div class="hr-line-dashed"></div>
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-md-4">
                                              <label class=" control-label">Codigo</label>
                                              <input type="text" placeholder="" class="form-control">
                                            </div>

                                            <div class="col-md-4">
                                              <label class=" control-label">Producto</label>
                                              <input type="text" placeholder="" class="form-control">
                                            </div>

                                            <div class="col-md-4">
                                               <label class=" control-label">Unidad</label>
                                               <select class="form-control">
                                                 <option></option>
                                               </select>
                                            </div>

                                             <div class="col-md-4">
                                               <label class=" control-label">Unidad</label>
                                              <input type="number" placeholder="" class="form-control">
                                            </div>

                                            <div class="col-md-4">
                                              <label class=" control-label">Unidad</label>
                                             <input type="number" placeholder="" class="form-control">
                                           </div>
                                        </div>
                                    </div>
                                </div>





                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <button class="btn btn-white" type="submit">Cancel</button>
                                        <button class="btn btn-primary" type="submit">Save changes</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                    </div>
                 </div>

                <?PHP include "../Section/footer.php";?>
      </div>
   </div>

</body>
