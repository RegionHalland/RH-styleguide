<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


function box($t, $w = null){
    if($w=="100%"){$w="width: 100%;";}
    else{$w="width: 400px;";}

  echo "
  <a name=\"".$t."\"></a>
<div class=\"display-table\" style=\"padding-top:3em;\"><h2><i>$t</i></h2></div>
<!-- KOPIERA KODEN/CLASS NEDAN  ####  ".$t." ############ -->
<section class=\"rh-box__container\" style=\"".$w."\">\n";
}

function box_end() {echo "</section><!-- END KOD --->\n";}

$lib_folder = "design-lib";
$js_folder = "javascript";
$version = "?v=".date("YmdHis");
?>

<h2>tailwin utility</h2> -
rh.utility.css https://tailwindcss.com/
<!-- tailwin styleguide https://unpkg.com/@regionhalland/styleguide-v2@0.8.2/dist/css/main.min.css-->
<link rel='stylesheet' href='rh.utility.css?<?php echo $version;?>' type='text/css' media='all' />

<h2> rh komponenter scss RH-styleguide</h2> - rh.comp.css
<!-- rh scss RH-styleguide-->
<link rel='stylesheet' href='rh.comp.css?<?php echo $version;?>' type='text/css' media='all' />
<h2>rh javascript</h2> - rh-java.js
<script type='text/javascript' src='rh-java.js?<?php echo $version;?>'></script>
<h2>feather icons</h2> - feather.js
<script type='text/javascript' src='feather.min.js'></script>
<!-- end script-->

<style>

</style>


<?php box("On Page Navigation / rh-nav-onpage__container");?>
<nav style="width:300px;">
	<h2>Sidans innehåll</h2>
	<ul class="rh-nav-list">
			 <li class="rh-nav-onpage__item--active"><a href="#" class="rh-nav-onpage__item--link">Lorem ipsum href</a></li>
		<?php
			$r="";
			while($r<4){  $r++;?>
			 <li class="rh-nav-onpage__item"><a href="#" class="rh-nav-onpage__item--link" title="Lorem ipsum href">Lorem ipsum href</a></li>
		<?php }?>
	</ul>
</nav>
<?php box_end();?>

<?php box("rh-article__box","100%");?>


        <div class="w-full mx-auto">
              <ul class="flex flex-wrap items-stretch -mx-4 list-reset">

                      <li class="w-full sm:w-6/12 lg:w-4/12 xl:w-3/12 px-2 mb-8">
                              <article class="rh-article__box " title="Articles information">
                                  <div class="rh-article__box--media"><img src="http://regionhalland.se/PageFiles/37615/yrken300-150.jpg" width="100%"></div>
                                  <div class="rh-article__box--title">Articles information</div>
                                  <div class="rh-article__box--content">
                                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ut enim ad minim veniam, quis nostrud exercitation ullmaco laboris nisi ut aliquap ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolor eu fugiat nulla pariatur.
                                  </div>
                              </article>
                      </li>

                      <li class="w-full sm:w-6/12 lg:w-4/12 xl:w-3/12 px-2 mb-8">
                              <article class="rh-article__box " title="Articles information">
                                <div class="rh-article__box--media"><img src="http://regionhalland.se/PageFiles/37615/yrken300-150.jpg" width="100%"></div>
                                <div class="rh-article__box--title">Articles information</div>
                                  <div class="rh-article__box--content">
                                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ut enim ad minim veniam, quis nostrud exercitation ullmaco laboris nisi ut aliquap ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolor eu fugiat nulla pariatur.
                                  </div>
                              </article>
                      </li>

                      <li class="w-full sm:w-6/12 lg:w-4/12 xl:w-3/12 px-2 mb-8">
                            <article class="rh-article__box " title="Articles information">
                                <div class="rh-article__box--title">Articles information</div>
                                <div class="rh-article__box--content">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ut enim ad minim veniam, quis nostrud exercitation ullmaco laboris nisi ut aliquap ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolor eu fugiat nulla pariatur.
                                </div>
                            </article>
                      </li>
             </ul>
        </div>
<?php box_end();?>



<?php box("rh-button__goback");?>
<div class="rh-button__goback" title="Tillbaka">
  <a href="#">
    <div class="rh-icon-left rh-icon-bg"><i class="rh-icon-size-standard" data-feather="arrow-left"></i></div>
    <div class="rh-button__goback--title">Tillbaka</div>
  </a>
</div>
<?php box_end();?>



<?php box("rh-nav-subheader","100%");?>
      <ul class="rh-flex">
<?php
$r="";
while($r<5){
  $r++;
  if($r==2){$active="rh-nav__subheader--item--active";}else{$active="rh-nav__subheader--item";}
  ?> <li class="<?php echo $active;?>"> <?php echo $r;?>. Linkitem </li><li class="pr4"></li>
<?php }#while ?>
      </ul>
<?php box_end();?>


<?php box("rh-card","100%");?>
	<div class="w-full mx-auto">
        <ul class="flex flex-wrap items-stretch -mx-4 list-reset">
<?php
$r="";
while($r<3){  $r++;?>
  <li class="w-full sm:w-6/12 lg:w-4/12 px-4 mb-8" title="Link to subpage">
                      <a href="#" class="rh-card">
                      <div class="rh-card-icon rh-icon-bg"><i class="rh-icon-size-standard" data-feather="arrow-right"></i></div>
                      <h2 class="rh-card-title">Link to subpage</h2>
                      <p class="rh-card-content">This text describes the content that can be found on the subpage</p>
                    </a>
          </li>
<?php }######## while ?>
  </ul>
</div>
<?php box_end();?>



<?php box("rh-nav_second-parent");?>
        <div style="width:400px;" class="rh-nav__second-parent" title="Secondary Navigation">
          <a href="#" class="rh-nav_second-parent-ahref">Navigation</a>
        </div>
<?php box_end();?>


<?php box("rh-nav__second-child");?>
        <div style="width:400px;" class="rh-nav__second-child" title="Navigation/Child">
           <a href="#">Navigation/Child 1</a>
        </div>
<?php box_end();?>



<?php box("rh-nav__second-child");?>
        <div style="width:400px;" class="rh-nav__second-child" title="Navigation/Child">
           <a href="#">Navigation/Child 2
           <div class="rh-nav__icon rh-icon__bg--circle"><i class="rh-icon-size-standard" data-feather="plus"></i></div>
           </a>
        </div>
<?php box_end();?>



<?php box("rh-nav__second-child--sublevel");?>
        <div style="width:400px;" class="rh-nav__second-child--sublevel" title="Navigation/Sublevel">
           <a href="#">Navigation/Sublevel</a>
        </div>
<?php box_end();?>



<i>rh-nav__second-child--active</i>
<div  style="width:400px;" class="rh-nav__second-child--active" title="Navigation/Child">
   <a href="#">Navigation/Child 1</a>
</div>

<i>rh-nav__second-child--active</i>
<div  style="width:400px;" class="rh-nav__second-child--active" title="Navigation/Child/Active">
   <a href="#">Navigation/Child/Active 2
   <div class="rh-nav__icon rh-icon__bg--circle bg-white"><i class="rh-icon-size-standard" data-feather="minus"></i></div>
   </a>
</div>


 <h2>Navigation</h2>
 <div style="width:400px;">

<div class="rh-nav__second-parent" title="Secondary Navigation">
   <a href="#">Navigation</a>
</div>
<div class="rh-nav__second-child" title="Navigation/Child">
   <a href="#">Navigation/Child
   <div class="rh-nav__icon rh-icon__bg--circle"><i class="rh-icon-size-standard" data-feather="plus"></i></div>
   </a>
</div>
<div class="rh-nav__second-child" title="Navigation/Child">
   <a href="#">Navigation/Child</a>
</div>
<div class="rh-nav__second-child" title="Navigation/Child">
   <a href="#">Navigation/Child</a>
</div>
<div class="rh-nav__second-child--active" title="Navigation/Child/Active">
   <a href="#">Navigation/Child/Active
   <div class="rh-nav__icon rh-icon__bg--circle bg-white"><i class="rh-icon-size-standard" data-feather="minus"></i></div>
   </a>
</div>
<div class="rh-nav__second-child--sublevel" title="Navigation/Sublevel">
   <a href="#">Navigation/Sublevel</a>
</div>
<div class="rh-nav__second-child--sublevel" title="Navigation/Sublevel">
   <a href="#">Navigation/Sublevel</a>
</div>
<div class="rh-nav__second-child--sublevel" title="Navigation/Sublevel">
   <a href="#">Navigation/Sublevel</a>
</div>
<div class="rh-nav__second-child" title="Navigation/Child">
   <a href="#">Navigation/Child</a>
</div>


</div>






<?php box("Navigation / Mobile fällbar box / rh-nav__box--normal"); $obj_id = 1; ?>
<div class="rh-nav-mob__box--container">
      <div class="rh-nav-mob__box--normal pointer" title="Navigation / Mobile fällbar box"   onclick="RH_showhide_shs('inbox-<?php echo $obj_id;?>','icon-normal-<?php echo $obj_id;?>','icon-active-<?php echo $obj_id;?>');return false">
            Box with the content of the title
            <div class="rh-icon-right rh-icon-bg-circle rh-bg-white">
              <i  id="icon-normal-<?php echo $obj_id;?>" class="rh-icon-size-standard rh-color-havsbla-base" data-feather="plus"></i>
              <i  id="icon-active-<?php echo $obj_id;?>" class="rh-icon-size-standard rh-color-havsbla-base rh-hidden" data-feather="minus"></i>
            </div>
      </div>
      <p id="inbox-<?php echo $obj_id;?>" class="rh-nav-mob__box--content rh-hidden">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
              Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
             fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa
             qui officia deserunt mollit anim id est laborum.
          <br>
          <button class="rh-button color-havsbla-base"  onclick="RH_showhide_shs('inbox-<?php echo $obj_id;?>','icon-normal-<?php echo $obj_id;?>','icon-active-<?php echo $obj_id;?>');return false">Fäll ihop <i data-feather="chevron-up"></i></button>
      </p>
</div>
<?php box_end();?>


<?php box("rh-nav-mob__box--active"); $obj_id = 2; ?>
<div class="rh-nav-mob__box--container">
        <div class="rh-nav-mob__box--active pointer" title="Navigation / Mobile fällbar box" onclick="RH_showhide_shs('inbox-<?php echo $obj_id;?>','icon-normal-<?php echo $obj_id;?>','icon-active-<?php echo $obj_id;?>');return false">
           Box with the content of the title
           <div class="rh-icon-right rh-icon-bg-circle rh-bg-white rh-color-primary">
             <i  id="icon-normal-<?php echo $obj_id;?>" class="rh-icon-size-standard" data-feather="plus">x</i>
             <i  id="icon-active-<?php echo $obj_id;?>" class="rh-icon-size-standard rh-hidden" data-feather="minus">o</i>
           </div>
        </div>
            <p id="inbox-<?php echo $obj_id;?>" class="rh-nav-mob__box--content rh-hidden">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                  incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                  exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                   fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa
                   qui officia deserunt mollit anim id est laborum.
                <br>
                <button class="rh-button color-havsbla-base"  onclick="RH_showhide_shs('inbox-<?php echo $obj_id;?>','icon-normal-<?php echo $obj_id;?>','icon-active-<?php echo $obj_id;?>');return false">Fäll ihop <i data-feather="chevron-up"></i></button>
            </p>
</div>
<?php box_end();?>







<?php box("rh-nav-mob__subpage");?>
<ul>
    <li class="rh-nav-mob__subpage">
        <a href="#" onclick="RH_showobj_sh('rh-nav-mob__subpage-active-1','rh-nav-mob__subpage-normal-1');return false" class="rh-nav-mob__subpage--link">Link to subpage
        <div class="rh-nav-mob__subpage--icon">
          <i id="rh-nav-mob__subpage-normal-1" class="rh-icon__size-16" data-feather="chevron-right"></i>
          <i id="rh-nav-mob__subpage-active-1" class="rh-hidden  rh-icon__size-16" data-feather="chevron-down"></i>
        </div>
         </a>
    </li>
</ul>
<?php box_end();?>






<?php box("rh-footer__logo");?>
<div class="rh-footer__logo">
    <img src="/rh-cdn/logo/Logo-Region-Halland.png"  class="rh-trans">
    <img src="/rh-cdn/logo/Logo-Varberg.png"  class="rh-trans">
    <img src="/rh-cdn/logo/Logo-Laholm.png" width="100" class="rh-trans">
    <img src="/rh-cdn/logo/Logo-Hylte.png" width="100" class="rh-trans">
    <img src="/rh-cdn/logo/Logo-Halmstad.png" width="100" class="rh-trans">
    <img src="/rh-cdn/logo/Logo-Falkenberg.png" width="100" class="rh-trans">
    <img src="/rh-cdn/logo/Logo-Varberg.png" width="100" class="rh-trans">
</div>
<?php box_end();?>



<?php box("rh-loader");?>
  <div class="rh-loader"></div>
<?php box_end();?>




<hr><hr>
 feathericons<br>
<!-- example icon -->
<i data-feather="circle"></i>
<i data-feather="eye"></i>
<i data-feather="heart"></i>
<i data-feather="feather"></i>
