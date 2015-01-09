<!DOCTYPE html>
<html>
<head>
  <title><?php print $title; ?></title>


</head>

<body>
   
    <div class="topbar">
       
        <?php print render($page['topbar']); ?>
            <div class="container">
                  <a class="logo" href="#">VOJO-BR</a>
                  
                     
                         
                               <div class="menu">
                                    <?php if($main_menu): ?>

                                    <?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('id' => 'main-menu', 'class' => array('links', 'inline', 'clearfix')))); ?>


                          


                          <?php endif?>     

            </div>
    
     </div>

<div class="main-container">
 
  <div class="carrossel">
    
    <?php print render($page['carrossel']); ?>
    </div>
  
  <div class="lista-historias">

            <?php print render($page['listahistoria']);?>
    <div class="historia">
      <a href="#">
        <img src="img/historias.png" width="100%">
        <br>
        Lorem ipsum dolor sit amet
      </a>
    </div>
    <div class="historia">
      <a href="#">
        <img src="img/historias2.png" width="100%">
        <br>
        Proin volutpat, urna sit amet vestibulum
      </a>
    </div>
    <div class="historia">
      <a href="#">
        <img src="img/historias.png" width="100%">
        <br>
        Lorem ipsum dolor sit amet
      </a>
    </div>
    <div class="historia">
      <a href="#">
        <img src="img/historias2.png" width="100%">
        <br>
        Proin volutpat, urna sit amet vestibulum
      </a>
    </div>
    <div class="historia">
      <a href="#">
        <img src="img/historias.png" width="100%">
        <br>
        Lorem ipsum dolor sit amet
      </a>
    </div>
  </div>

  <div class="leaderboard">
<?php print render($page['leaderboard']);?>

  Leaderboard<br>722x90</div>

</div>

<div class="actionbar">

<?php print render($page['actionbar']);?>
  
  <input type="text" placeholder="E-mail">
  <input type="text" placeholder="Senha">

  <div class="box-share">
  <?php print render($page['boxshare']); ?>
    <a href="#" class="youtube" title="YouTube"></a>
    <a href="#" class="google-plus" title="Google Plus"></a>
    <a href="#" class="twitter" title="Twitter"></a>
    <a href="#" class="facebook" title="Facebook"></a>
  </div>
  <input type="text" placeholder="Procure" class="search">

</div>

<div class="footer">

  <br>
  <a href="#">Creative Commons</a>
</div>
</body>

</html> 