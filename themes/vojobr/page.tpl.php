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
</head>

<body>
<?php print $header; ?>
   
<div class="topbar">

       
        <?php print $topbar; ?>
            <div class="container">
                  <a class="logo" href="http://vojo.co/pt-br/">VOJO-BR</a>
                  
                     
                         
                              <div class="menu">
                                <?php if(isset($primary_links)) : ?>
                                <?php print theme('links', $primary_links, array('class' =>'links primary-links'))?>
                                <?php endif; ?> 
                              </div> 

            </div>
    
                           
</div>








<div class="main-container">
 
  <div class="carrossel"><?php print $carrossel; ?></div>
   <div clas="lista-historias">
      <div class="historia">
         <div class="vojo-group-summary">
  <?php if (!empty($fields['field_group_logo_fid']->raw)): ?>
    <span class="group-logo-listing">
      <?php print $fields['field_group_logo_fid']->content; ?>
    </span>
  <?php endif; ?>
    <h3><?php print $fields['title']->content ?></h3>
    <small><?php print $fields['description']->content ?></small>
    <div class="vojo-group-posts"><?php print $fields['post_count']->content ?> <?php print t('stories'); ?></div>
    <div class="vojo-group-members"><?php print $fields['member_count']->content ?> <?php print t('members'); ?> </div>
</div>
      </div>
   </div>

  <div class="leaderboard"><?php print $leaderboard;?></div>


</div>

<div class="actionbar">

<?php print $actionbar;?>
  
  <input type="text" placeholder="E-mail">
  <input type="text" placeholder="Senha">

  <div class="box-share">
  <?php print $boxshare; ?>
    <a href="#" class="youtube" title="YouTube"></a>
    <a href="#" class="google-plus" title="Google Plus"></a>
    <a href="#" class="twitter" title="Twitter"></a>
    <a href="#" class="facebook" title="Facebook"></a>
  </div>

  <?php if($search_box): ?>
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