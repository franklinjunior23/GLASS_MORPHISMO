<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
</head>

<body>
    <div class="box">
        <header>
            <h2>VENTA DE ENTRADAS (TEATRO)</h2>
            <img src="https://conceptodefinicion.de/wp-content/uploads/2022/05/teatro_10.jpg" alt="">
        </header>
        
        <section>
            <?php 
            error_reporting(0);
            $comprador = $_POST['txtcomprador'];
            $fecha = $_POST ['txtfecha'];
            $nadultos = $_POST ['txtadulto'];
            $nniño = $_POST['txtniño'];
        
            $hoy = getdate(time());
            $ndia = $hoy ['weekday'];
        
            switch ($ndia) {
                case 'Monday': $cadultos=10; $cniño=5; break;
                case 'Tuesday': $cadultos = 8; $cniño = 5; break;
                case 'Wednesday':
                case 'Thursday':
                case 'Friday' : $cadultos = 16; $cniño = 8; break;
                case 'Saturday':
                case 'Sunday' : $cadultos = 50; $cniño =45; break;
                
                default: $cadultos = 0 ; $cniño = 45;break;
            }
            $adultos = $cadultos * $nadultos;
            $niño = $cniño * $nniño;
            ?>
            <form action="teatro.php" method="post">
                <table border="0">
        
                    <tr>
                        <td>Comprador</td>
                        <td>
                           <input type="text" name="txtcomprador" size="60">
                        </td>
                    </tr>
        
                    <tr>
                        <td>Fecha actual</td>
                        <td> 
                            <input type="text" name="txtfecha" readonly="true" value="<?php echo date('d/m/y')?>">
                        </td>
                    </tr>
        
                    <tr>
                        <td>N° entradas adultos</td>
                        <td>
                            <input type="text" name="txtadulto">
                        </td>
                    </tr>
        
                    <tr>
                        <td>N° entradas niños</td>    
                        <td>
                            <input type="text" name="txtniño" >
                        </td>
                    </tr>
        
                    <tr>
                        <td></td>
                        <td>
                            <input id="submit" type="submit" name="btnadiquirir" value="adquirir" id="">
                        </td>
                    </tr>
        
                </table>
                <?php if (isset($_POST ['txtcomprador'])){?>
                <table width ="600" border="1" cellspacing="0" cellpadding="0" >
                    <tr>
                        <td> <table border ="0" >
        
                
        
                    <tr>
                        <td width = "150">Comprador </td>
                        <td width="350"> <?php echo $comprador;?></td>
                    </tr>
        
                    <tr>
                        <td>Costo por adultos</td>
                        <td> <?php echo '$'.number_format($adultos,2,'.','.');?></td>
                    </tr>
        
                    <tr>
                        <td>Costo por niños</td>
                        <td>  <?php echo  '$'.number_format($niño,2,'.',''); ?> </td>
                    </tr>
        
                    <tr>
                        <td>Dia de promocion</td>
                        <td> <?php echo $ndia; ?></td>
                    </tr>
        
                    <tr>
                        <td>Monto total a pagar</td>
                        <td> <?php echo '$'.number_format($adultos + $niño,2,'.','');?> </td>
                    </tr>
        
                </table>
                <?php } ?>
                </table>
                </td></tr>
            </form>
        
        
        </section>
    </div>
    <div class="cuadro c1"></div>
    <div class="cuadro c2"></div>
    <div class="cuadro c3"></div>

</body>

</html>