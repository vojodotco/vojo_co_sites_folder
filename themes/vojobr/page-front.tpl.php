<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- Acrescentamos aqui o idioma da pagina e a direção do texto do idioma -->
<html xmlns="http://www.w3.org/1999/xhtml"
xml:lang="<?php print $language->language?>"
lang="<?php print $language->language?>" dir="<?php print $language->dir?>">
<head>
  <title><?php print $head_title; ?></title>
<?php print $styles?>
<?php print $head?>

<?php print $scripts; ?>
</head>

<body>
<?php print $header; ?>
   
<div class="topbar">

       <?php if ($topbar):?>
          <?php print $topbar; ?>
       <?php endif;?>
            <div class="container">
                  <a class="logo" href="http://localhost/drupal-6.28/">VOJO-BR</a>
                  
                     
                         
                              <div class="menu">
                                <?php if(isset($primary_links)) : ?>
                                <?php print theme('links', $primary_links, array('class' =>'links primary-links'))?>
                                <?php endif; ?> 
                              </div> 

            </div>
   
                           
</div>








<div class="main-container">
 
  <div class="carrossel"><?php if ($carrossel):?><?php print $carrossel; ?><?php endif;?></div>

   <div clas="lista-historias">
      <div class="historia">
           <?php print $listahistoria; ?>
      </div>
   </div>



  <div class="leaderboard"><?php if($leaderboard):?><?php print $leaderboard;?><?php endif;?></div>


</div>

<div class="actionbar">
<?php if($actionbar):?>
<?php print $actionbar;?>
<?php endif;?>
  
  <input type="text" placeholder="E-mail">
  <input type="text" placeholder="Senha">

  <div class="box-share">
  <?php if($boxshare):?>
  <?php print $boxshare; ?>
<?php endif;?>
    <a href="#" class="youtube" title="YouTube"></a>
    <a href="#" class="google-plus" title="Google Plus"></a>
    <a href="#" class="twitter" title="Twitter"></a>
    <a href="#" class="facebook" title="Facebook"></a>
  </div>

  <?php if ($search_box): ?>
  <input type="text" placeholder="Procure"  class="search" value="">
  
  <?php endif; ?>
<!--ajustar antes de subir-->
</div>

<div class="footer">
      <?php if(isset($secondary_links)) : ?>
      <?php print theme('links', $secondary_links, array('class' =>'links secondary-links'))?>
      <?php endif; ?>
  <br>
  <a class="last-child" href="#">Creative Commons</a>
</div>
</body>

</html> 