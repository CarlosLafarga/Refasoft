<?php




$link = mysqli_connect("localhost", "root", "", "refaccionaria");

if (isset($_POST["codigo"])) {
    

    $id       = $_POST['id'];
    $codigo   = $_POST["codigo"];
    $inv      = $_POST['invent'];
    $invbd      = $_POST['invbd'];
    $cantidad      = $_POST['cantidad'];

    $query  = '';
    $update = '';
    for ($count = 0; $count < count($codigo); $count++) {


        $id_clean   = mysqli_real_escape_string($link, $id[$count]);
        $codigo_clean   = mysqli_real_escape_string($link, $codigo[$count]);
        $inv_clean   = mysqli_real_escape_string($link, $inv[$count]);
        $invbd_clean   = mysqli_real_escape_string($link, $invbd[$count]);
        $cantidad_clean   = mysqli_real_escape_string($link, $cantidad[$count]);
      

        if ($codigo_clean != '' && $inv_clean != '' && $invbd_clean != '' && $cantidad_clean != '') {

           

               if($cantidad_clean >= 0){

                $nvo_inv= $inv_clean-$cantidad_clean;

                $update .= '
               UPDATE productos2 SET Inventario =' . $nvo_inv . ' WHERE Num_Producto = ' . $id_clean . ';
               ';

               }

               else{

                    $nvo_inv= $inv_clean+$cantidad_clean;

                    $update .= '
                   UPDATE productos2 SET Inventario =' . $nvo_inv . ' WHERE Num_Producto = ' . $id_clean . ';
                   ';

               }


                $update .= '
               UPDATE productos2 SET cantidad =' . $inv_clean . ' WHERE Num_Producto = ' . $id_clean . ';
               ';
        }

    }

  

    if ($update != '') {

       
        /*--------------------------------------------UPDATE -----------------------------------------------*/
        $link = mysqli_connect("localhost", "root", "", "refaccionaria");
        if (mysqli_multi_query($link, $update)) {
            # code...
            mysqli_close($link);

            echo "1";   

        } else {

            echo "5";
        }

    }
/*----------------------------------------------------------------------------------------------------*/
    }


