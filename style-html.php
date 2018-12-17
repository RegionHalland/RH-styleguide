<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



function box($t, $w = null){
    if($w=="100%"){$w="width: 100%;";}
    else{$w="width: 400px;";}

  echo "
<div class=\"display-table\" style=\"padding-top:3em;\"><h2><i>$t</i></h2></div>
<!-- KOPIERA KODEN/CLASS NEDAN  ####  ".$t." ############ -->
<div class=\"rh-box__container\" style=\"".$w."\">\n";

}

function box_end() {echo "</div><!-- END KOD --->\n";}

?>



<?php box("rh-nav-subheader","100%");?>
      <ul class="flex">
<?php
$r="";
while($r<5){
  $r++;
  if($r==2){$active="rh-nav__subheader--item--active";}else{$active="rh-nav__subheader--item";}
  ?> <li class="<?php echo $active;?>"> <?php echo $r;?>. Linkitem </li><li class="pr4"></li>
<?php }#while ?>
      </ul>
<?php box_end();?>


<?php box("rh-nav__navigation-card","100%");?>

<?php
$r="";
while($r<3){  $r++;?>
          <div class="col sm-col-3">
                <div class="rh-nav__navigation-card" title="Link to subpage">
                    <a href="#">
                      <div class="rh-nav__navigation-card--icon rh-icon__bg--circle rh-bg-icon-subpage"><i class="rh-icon__size-standard" data-feather="arrow-right"></i></div>
                      <h2 class="rh-nav__navigation-card--title">Link to subpage</h2>
                      <p class="rh-nav__navigation-card--content">This text describes the content that can be found on the subpage</p>
                    </a>
                </div>
          </div>
            <div class="col sm-col-1" > &nbsp;  &nbsp;</div>
<?php }######## while ?>
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
           <div class="rh-nav__icon rh-icon__bg--circle"><i class="rh-icon__size-standard" data-feather="plus"></i></div>
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
   <div class="rh-nav__icon rh-icon__bg--circle bg-white"><i class="rh-icon__size-standard" data-feather="minus"></i></div>
   </a>
</div>


 <hr>
 <h2>Navigation</h2>
 <div style="width:400px;">

<div class="rh-nav__second-parent" title="Secondary Navigation">
   <a href="#">Navigation</a>
</div>
<div class="rh-nav__second-child" title="Navigation/Child">
   <a href="#">Navigation/Child
   <div class="rh-nav__icon rh-icon__bg--circle"><i class="rh-icon__size-standard" data-feather="plus"></i></div>
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
   <div class="rh-nav__icon rh-icon__bg--circle bg-white"><i class="rh-icon__size-standard" data-feather="minus"></i></div>
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






<?php box("Navigation / Mobile fällbar box / rh-nav__box--normal");?>
<div class="rh-nav-mob__box--container">
      <div class="rh-nav-mob__box--normal" title="Navigation / Mobile fällbar box(">
           <a href="#">Box with the content of the title
              <div class="rh-nav-mob__icon rh-icon__bg--circle"><i class="color-havsbla-base " data-feather="plus-circle"></i></div>
           </a>
      </div>
</div>
<?php box_end();?>


<?php box("rh-nav-mob__box--active");?>
<div class="rh-nav-mob__box--container">
        <div class="rh-nav-mob__box--active" title="Navigation / Mobile fällbar box(">
           <a href="#">Box with the content of the title</a>
        </div>
          <div class="rh-nav__icon rh-icon__bgcircle bg-white"><i class="color-havsbla-base rh-icon__size-standard" data-feather="minus"></i></div>
             <p class="rh-nav-mob__box--content">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                  incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                  exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                   fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa
                   qui officia deserunt mollit anim id est laborum.
                <br>
                <a href="#" class="color-havsbla-base">Fäll ihop <i data-feather="chevron-up"></i></a>
             </p>
</div>
<?php box_end();?>




<?php box("rh-nav-mob__subpage");?>
<div class="rh-nav-mob__subpage">
    <a href="#" class="rh-nav-mob__subpage--link">Link to subpage</a>
</div>
<?php box_end();?>



<?php box("On Page Navigation / rh-nav-onpage__container");?>
<nav class="rh-nav-onpage__container" style="width:300px;">
	<h2 class="h4">Sidans innehåll</h2>
	<ul>
			 <li class="rh-nav-onpage__item--active"><a href="#" class="rh-nav-onpage__item--link">Lorem ipsum href</a></li>
		<?php
			$r="";
			while($r<4){  $r++;?>
			 <li class="rh-nav-onpage__item"><a href="#" class="rh-nav-onpage__item--link">Lorem ipsum href</a></li>
		<?php }?>
	</ul>
</nav>
<?php box_end();?>



<hr><hr>
 feathericons<br>
<!-- example icon -->
<i data-feather="circle"></i>
<i data-feather="eye"></i>
<i data-feather="heart"></i>
<i data-feather="feather"></i>
