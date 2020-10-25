<?php
$elementos1 = ['H','.','.','.','.','.','.','.','.','.','.','.','.','.','.','.','.','He'];
$elementos2 = ['Li','Be','.','.','.','.','.','.','.','.','.','.','B','C','N','O','F','Ne'];
$elementos3 = ['Na','Mg','.','.','.','.','.','.','.','.','.','.','Al','Si','P','S','Cl','Ar'];
$elementos4 = ['K','Ca','Sc','Ti','V','Cr','Mn','Fe','Co','Ni','Cu','Zn','Ga','Ge','As','Se','Br','Kr'];
$elementos5 = ['Rb','Sr','Y','Zr','Nb','Mo','Tc','Ru','Rh','Pd','Ag','Cd','In','Sn','Sb','Te','I','Xe'];
$elementos6 = ['Cs','Ba','La-Lu','Hf','Ta','W','Re','Os','Ir','Pt','Au','Hg','Tl','Pb','Bi','Po','At','Rn'];
$elementos7 = ['Fr','Ra','Ac-Lr','Rf','Db','Sg','Bh','Hs','Mt','Ds','Rg','Cn','Nh','Fl','Mc','Lv','Ts','Og'];
$elementos8 = ['La','Ce','Pr','Nd','Pm','Sm','Eu','Gd','Tb','Dy','Ho','Er','Tm','Yb','Lu'];
$elementos9 = ['Ac','Th','Pa','U','Np','Pu','Am','Cm','Bk','Cf','Es','Fm','Md','No','Lr'];
$elementosMorados = ['Li','Na','K','Rb','Cs','Fr'];
$elementosMorados2 = ['Be','Mg','Ca','Sr','Ba','Ra'];
$elementosVerdes = ['H','C','N','O','P','S','Se'];
$elementosVerdes2 = ['B','Si','Ge','As','Sb','Te','Po'];
$elementosAzules = ['F','Cl','Br','I','At','Ts'];
$elementosAzules2 = ['He','Ne','Ar','Kr','Xe','Rn','Og'];
$elementosAmarillos = ['Al','Ga','In','Tl','Nh','Sn','Pb','Fl','Bi','Mc','Lv'];
$elementosNaranja = ['Sc','Ti','V','Cr','Mn','Fe','Co','Ni','Cu','Zn','Y','Zr','Nb','Mo','Tc','Ru','Rh','Pd','Ag','Cd',
                     'Hf','Ta','W','Re','Os','Ir','Pt','Au','Hg','Rf','Db','Sg','Bh','Hs','Mt','Ds','Rg','Cn'];
$elementosNaranja2 = ['La-Lu','La','Ce','Pr','Nd','Pm','Sm','Eu','Gd','Tb','Dy','Ho','Er','Tm','Yb','Lu'];
$elementosRosadito= ['Ac-Lr','Ac','Th','Pa','U','Np','Pu','Am','Cm','Bk','Cf','Es','Fm','Md','No','Lr'];
$fueraPuntos = ['.'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Document</title>
</head>
<body>
 <div class="centrar">
   
<?php foreach ($elementos1 as $Elementos1): ?>
          <?php if (in_array($Elementos1,$elementosVerdes)):?> 
          <div class= "columnas colorVerde"><?php echo "<span> {$Elementos1} </span>"?> </div>
          <?php elseif (in_array($Elementos1,$elementosAzules2)):?>
          <div class= "columnas colorAzul2"><?php echo "<span> {$Elementos1} </span>"?> </div>
          <?php elseif (in_array($Elementos1,$fueraPuntos)):?>
          <div class= "columnas fueraPuntos"><?php echo "<span> {$Elementos1} </span>"?> </div>
          <?php else:?>
          <div class= "columnas"><?php echo "<span> {$Elementos1} </span>"?> </div> 
          <?php endif ?>
<?php endforeach ?>
<div></div>

<?php foreach ($elementos2 as $Elementos2): ?>
          <?php if (in_array($Elementos2,$elementosMorados)):?>
          <div class= "columnas colorMorado"><?php echo "<span> {$Elementos2} </span>"?> </div>
          <?php elseif (in_array($Elementos2,$elementosMorados2)):?>
          <div class= "columnas colorMorado2"><?php echo "<span> {$Elementos2} </span>"?> </div>
          <?php elseif (in_array($Elementos2,$elementosVerdes)):?>
          <div class= "columnas colorVerde"><?php echo "<span> {$Elementos2} </span>"?> </div>
          <?php elseif (in_array($Elementos2,$elementosVerdes2)):?>
          <div class= "columnas colorVerde2"><?php echo "<span> {$Elementos2} </span>"?> </div>
          <?php elseif (in_array($Elementos2,$elementosAzules)):?>
          <div class= "columnas colorAzul"><?php echo "<span> {$Elementos2} </span>"?> </div>
          <?php elseif (in_array($Elementos2,$elementosAzules2)):?>
          <div class= "columnas colorAzul2"><?php echo "<span> {$Elementos2} </span>"?> </div>
          <?php elseif (in_array($Elementos2,$fueraPuntos)):?>
          <div class= "columnas fueraPuntos"><?php echo "<span> {$Elementos2} </span>"?> </div> 
          <?php else:?>
          <div class= "columnas"><?php echo "<span> {$Elementos2} </span>"?> </div> 
          <?php endif ?>
<?php endforeach ?>   
<div></div>


<?php foreach ($elementos3 as $Elementos3): ?>  
          <?php if (in_array($Elementos3,$elementosMorados)):?>
          <div class= "columnas colorMorado"><?php echo "<span> {$Elementos3} </span>"?> </div>
          <?php elseif (in_array($Elementos3,$elementosMorados2)):?>
          <div class= "columnas colorMorado2"><?php echo "<span> {$Elementos3} </span>"?> </div>
          <?php elseif (in_array($Elementos3,$elementosAmarillos)):?>
          <div class= "columnas colorAmarillo"><?php echo "<span> {$Elementos3} </span>"?> </div>
          <?php elseif (in_array($Elementos3,$elementosVerdes)):?>
          <div class= "columnas colorVerde"><?php echo "<span> {$Elementos3} </span>"?> </div>
          <?php elseif (in_array($Elementos3,$elementosVerdes2)):?>
          <div class= "columnas colorVerde2"><?php echo "<span> {$Elementos3} </span>"?> </div>
          <?php elseif (in_array($Elementos3,$elementosAzules)):?>
          <div class= "columnas colorAzul"><?php echo "<span> {$Elementos3} </span>"?> </div>
          <?php elseif (in_array($Elementos3,$elementosAzules2)):?>
          <div class= "columnas colorAzul2"><?php echo "<span> {$Elementos3} </span>"?> </div> 
          <?php elseif (in_array($Elementos3,$fueraPuntos)):?>
          <div class= "columnas fueraPuntos"><?php echo "<span> {$Elementos3} </span>"?> </div>
          <?php else:?>
          <div class= "columnas"><?php echo "<span> {$Elementos3} </span>"?> </div> 
          <?php endif ?>
<?php endforeach ?>
<div></div>


<?php foreach ($elementos4 as $Elementos4): ?>  
          <?php if (in_array($Elementos4,$elementosMorados)):?>
          <div class= "columnas colorMorado"><?php echo "<span> {$Elementos4} </span>"?> </div>
          <?php elseif (in_array($Elementos4,$elementosMorados2)):?>
          <div class= "columnas colorMorado2"><?php echo "<span> {$Elementos4} </span>"?> </div>
          <?php elseif (in_array($Elementos4,$elementosNaranja)):?>
          <div class= "columnas colorNaranja"><?php echo "<span> {$Elementos4} </span>"?> </div>
          <?php elseif (in_array($Elementos4,$elementosAmarillos)):?>
          <div class= "columnas colorAmarillo"><?php echo "<span> {$Elementos4} </span>"?> </div>
          <?php elseif (in_array($Elementos4,$elementosVerdes)):?>
          <div class= "columnas colorVerde"><?php echo "<span> {$Elementos4} </span>"?> </div>
          <?php elseif (in_array($Elementos4,$elementosVerdes2)):?>
          <div class= "columnas colorVerde2"><?php echo "<span> {$Elementos4} </span>"?> </div>
          <?php elseif (in_array($Elementos4,$elementosAzules)):?>
          <div class= "columnas colorAzul"><?php echo "<span> {$Elementos4} </span>"?> </div>
          <?php elseif (in_array($Elementos4,$elementosAzules2)):?>
          <div class= "columnas colorAzul2"><?php echo "<span> {$Elementos4} </span>"?> </div> 
          <?php else:?>
          <div class= "columnas"><?php echo "<span> {$Elementos4} </span>"?> </div> 
          <?php endif ?>
<?php endforeach ?>
<div></div>


<?php foreach ($elementos5 as $Elementos5): ?>  
          <?php if (in_array($Elementos5,$elementosMorados)):?>
          <div class= "columnas colorMorado"><?php echo "<span> {$Elementos5} </span>"?> </div>
          <?php elseif (in_array($Elementos5,$elementosMorados2)):?>
          <div class= "columnas colorMorado2"><?php echo "<span> {$Elementos5} </span>"?> </div>
          <?php elseif (in_array($Elementos5,$elementosNaranja)):?>
          <div class= "columnas colorNaranja"><?php echo "<span> {$Elementos5} </span>"?> </div>
          <?php elseif (in_array($Elementos5,$elementosAmarillos)):?>
          <div class= "columnas colorAmarillo"><?php echo "<span> {$Elementos5} </span>"?> </div>
          <?php elseif (in_array($Elementos5,$elementosVerdes)):?>
          <div class= "columnas colorVerde"><?php echo "<span> {$Elementos5} </span>"?> </div>
          <?php elseif (in_array($Elementos5,$elementosVerdes2)):?>
          <div class= "columnas colorVerde2"><?php echo "<span> {$Elementos5} </span>"?> </div>
          <?php elseif (in_array($Elementos5,$elementosAzules)):?>
          <div class= "columnas colorAzul"><?php echo "<span> {$Elementos5} </span>"?> </div>
          <?php elseif (in_array($Elementos5,$elementosAzules2)):?>
          <div class= "columnas colorAzul2"><?php echo "<span> {$Elementos5} </span>"?> </div> 
          <?php else:?>
          <div class= "columnas"><?php echo "<span> {$Elementos5} </span>"?> </div> 
          <?php endif ?>
<?php endforeach ?>
<div></div>


<?php foreach ($elementos6 as $Elementos6): ?>  
          <?php if (in_array($Elementos6,$elementosMorados)):?>
          <div class= "columnas colorMorado"><?php echo "<span> {$Elementos6} </span>"?> </div>
          <?php elseif (in_array($Elementos6,$elementosMorados2)):?>
          <div class= "columnas colorMorado2"><?php echo "<span> {$Elementos6} </span>"?> </div>
          <?php elseif (in_array($Elementos6,$elementosNaranja)):?>
          <div class= "columnas colorNaranja"><?php echo "<span> {$Elementos6} </span>"?> </div>
          <?php elseif (in_array($Elementos6,$elementosAmarillos)):?>
          <div class= "columnas colorAmarillo"><?php echo "<span> {$Elementos6} </span>"?> </div>
          <?php elseif (in_array($Elementos6,$elementosVerdes)):?>
          <div class= "columnas colorVerde"><?php echo "<span> {$Elementos6} </span>"?> </div>
          <?php elseif (in_array($Elementos6,$elementosVerdes2)):?>
          <div class= "columnas colorVerde2"><?php echo "<span> {$Elementos6} </span>"?> </div>
          <?php elseif (in_array($Elementos6,$elementosAzules)):?>
          <div class= "columnas colorAzul"><?php echo "<span> {$Elementos6} </span>"?> </div>
          <?php elseif (in_array($Elementos6,$elementosAzules2)):?>
          <div class= "columnas colorAzul2"><?php echo "<span> {$Elementos6} </span>"?> </div> 
          <?php elseif (in_array($Elementos6,$elementosNaranja2)):?>
          <div class= "columnas colorNaranja2"><?php echo "<span> {$Elementos6} </span>"?> </div> 
          <?php else:?>
          <div class= "columnas"><?php echo "<span> {$Elementos6} </span>"?> </div> 
          <?php endif ?>
<?php endforeach ?>
<div></div>


<?php foreach ($elementos7 as $Elementos7): ?>  
          <?php if (in_array($Elementos7,$elementosMorados)):?>
          <div class= "columnas colorMorado"><?php echo "<span> {$Elementos7} </span>"?> </div>
          <?php elseif (in_array($Elementos7,$elementosMorados2)):?>
          <div class= "columnas colorMorado2"><?php echo "<span> {$Elementos7} </span>"?> </div>
          <?php elseif (in_array($Elementos7,$elementosNaranja)):?>
          <div class= "columnas colorNaranja"><?php echo "<span> {$Elementos7} </span>"?> </div>
          <?php elseif (in_array($Elementos7,$elementosAmarillos)):?>
          <div class= "columnas colorAmarillo"><?php echo "<span> {$Elementos7} </span>"?> </div>
          <?php elseif (in_array($Elementos7,$elementosVerdes)):?>
          <div class= "columnas colorVerde"><?php echo "<span> {$Elementos7} </span>"?> </div>
          <?php elseif (in_array($Elementos7,$elementosVerdes2)):?>
          <div class= "columnas colorVerde2"><?php echo "<span> {$Elementos7} </span>"?> </div>
          <?php elseif (in_array($Elementos7,$elementosAzules)):?>
          <div class= "columnas colorAzul"><?php echo "<span> {$Elementos7} </span>"?> </div>
          <?php elseif (in_array($Elementos7,$elementosAzules2)):?>
          <div class= "columnas colorAzul2"><?php echo "<span> {$Elementos7} </span>"?> </div> 
          <?php elseif (in_array($Elementos7,$elementosNaranja2)):?>
          <div class= "columnas colorNaranja2"><?php echo "<span> {$Elementos7} </span>"?> </div> 
          <?php elseif (in_array($Elementos7,$elementosRosadito)):?>
          <div class= "columnas colorRosadito"><?php echo "<span> {$Elementos7} </span>"?> </div> 
          <?php else:?>
          <div class= "columnas"><?php echo "<span> {$Elementos7} </span>"?> </div> 
          <?php endif ?>
<?php endforeach ?>
<div></div>

<div class="filasEsp">
<?php foreach ($elementos8 as $Elementos8): ?>  
          <?php if (in_array($Elementos8,$elementosNaranja2)):?>
          <div class= "columnas colorNaranja2"><?php echo "<span> {$Elementos8} </span>"?> </div>
          <?php elseif (in_array($Elementos8,$elementosRosadito)):?>
          <div class= "columnas colorRosadito"><?php echo "<span> {$Elementos8} </span>"?> </div>
          <?php else:?>
          <div class= "columnas"><?php echo "<span> {$Elementos8} </span>"?> </div> 
          <?php endif ?>
<?php endforeach ?>
<div></div>

<?php foreach ($elementos9 as $Elementos9): ?>  
  <?php if (in_array($Elementos9,$elementosNaranja2)):?>
          <div class= "columnas colorNaranja2"><?php echo "<span> {$Elementos9} </span>"?> </div>
          <?php elseif (in_array($Elementos9,$elementosRosadito)):?>
          <div class= "columnas colorRosadito"><?php echo "<span> {$Elementos9} </span>"?> </div>
          <?php else:?>
          <div class= "columnas"><?php echo "<span> {$Elementos9} </span>"?> </div> 
          <?php endif ?>
<?php endforeach ?>
</div>


<div class='Fix pt-5 contenedor' style=" display: inline-block;">
<div class='table'>
<table style="width:100%; border: 0px solid; border-radius: 5px;">
  <tr>
    <th colspan="6" style="background-color:LightGray; text-align: center;">Metales</th>
  </tr>
  <tr>
    <td style="background-color:MediumPurple;font-size: 10px; font-weight: bolder;">Alcalinos</td>
    <td style="background-color:MediumOrchid;font-size: 10px; font-weight: bolder;">Alcalinoterreos</td>
    <td style="background-color:Orange;font-size: 10px; font-weight: bolder;">Metales de Transicion/Bloque D</td>
    <td style="background-color:OrangeRed;font-size: 10px; font-weight: bolder;">Lantanidos</td>
    <td style="background-color:Coral;font-size: 10px; font-weight: bolder;">Actinidos</td>
    <td style="background-color:rgb(202, 205, 50);font-size: 10px; font-weight: bolder;">Otros Metales</td>
  </tr>
</table>
</div>

<div class='table '>
 <table style="width:100%; border: 0px solid; border-radius: 5px;">
  <tr>
    <th style="background-color:YellowGreen; text-align: center;">Metaloides</th>
  </tr>
 </table>
</div>

<div class='table'>
<table style="width:100%; border: 0px solid; border-radius: 5px;">
  <tr>
    <th colspan="3" style="background-color:LightGray; text-align: center; ">No Metales</th>
  </tr>
  <tr>
    <td style="background-color:MediumPurple;font-size: 10px; font-weight: bolder;">Otros No Metales</td>
    <td style="background-color:MediumOrchid;font-size: 10px; font-weight: bolder;">Halogenos</td>
    <td style="background-color:Orange;font-size: 10px; font-weight: bolder;">Gases Nobles</td>
   </tr>
</table>
</div>
</div>




<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</div>
</body>
</html>