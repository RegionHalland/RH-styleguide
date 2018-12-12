<?php 
$folder = "/rh-cdn/styleguide";
?>


<html lang="sv-SE">
	<head>
	<meta charset="utf-8" />
	<meta http-equiv="x-ua-compatible" content="ie=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="theme-color" content="#ffffff" />

	<link rel='stylesheet' href='<?php echo $folder;?>/main.min.css<?php echo "?v=".date("YmdHis");?>' type='text/css' media='all' />
  <script type='text/javascript' src='/rh-cdn/javascript/rh-java.js<?php echo "?v=".date("YmdHis");?>'></script>
 
 <!-- 
  https://feathericons.com/
https://github.com/feathericons/feather#feather
 <script src="https://unpkg.com/feather-icons"></script>
 ikoner
-->
 <script type='text/javascript' src='/rh-cdn/icons/feather.min.js'></script>


 
 

<style>
body{ font-family: Arial; }
textarea {width: 100%; height: 100px; 
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  font-size: 0.6em;
  color:#FFFFFF;
  background-color: #333333;
      opacity: 0.3;
    filter: Alpha(opacity=30); /* IE8 and earlier */
}
textarea:hover{
  opacity: 0.9;
    filter: Alpha(opacity=90); /* IE8 and earlier */}

i {font-size: 0.7em;}

</style>

</head>
	<body>


<div class="col-9" style=" margin: auto;"> <!-- TOP -->




<center><h2>RH-Komponenter</h2></center>



	<a href='<?php echo $folder;?>/main.min.css'/><?php echo $folder;?>/main.min.css<?php echo "?v=".date("YmdHis");?></a>
	<hr>
    <a href='/rh-cdn/icons/feather.min.js'/> /rh-cdn/icons/feather.min.js</a>
<hr>
    <a href='/rh-cdn/javascript/rh-java.js'>/rh-cdn/javascript/rh-java.js<?php echo "?v=".date("YmdHis");?></a>
<hr>
 <hr>
<br><br>

<i>RH-nav-subheader</i>
      <div class="">

      <ul class="list-reset flex">
        <?php 
$r="";
while($r<5){
  $r++;
  if($r==2){$active="RH-nav__subheader--item--active";}else{$active="RH-nav__subheader--item";}
  ?> <li class="<?php echo $active;?>"> <?php echo $r;?>. Linkitem </li><li class="pr4"></li>
    
<?php }#while ?>

      </ul>
    </div>

<textarea>
<div>
      <ul class="list-reset flex">
     <li> 
      <div class="RH-nav__subheader--item">Linkitem</div> 
      eller aktiv 
      <div class="RH-nav__subheader--item--active">LinkitemAktiv</div> 
    </li>
  </ul>
</div>
</textarea>


<hr>
<i>RH-nav__navigation-card</i>
<hr>
        <?php 
$r="";
while($r<3){
  $r++;?>
<div class="col sm-col-3">
      <div class="RH-nav__navigation-card" title="Link to subpage">
          <a href="#">
            <div class="RH-nav__navigation-card--icon RH-icon__roundbg rh-bg-icon-subpage"><i class="RH-icon__size-standard" data-feather="arrow-right"></i></div>
            <h2 class="RH-nav__navigation-card--title">Link to subpage</h2>
            <p class="RH-nav__navigation-card--content">This text describes the content that can be found on the subpage</p>
          </a>
      </div>
</div>
  <div class="col sm-col-1" > &nbsp;  &nbsp;</div>
<?php }######## while ?>

<textarea> 
<nav class="RH-nav__navigation-card" title="Link to subpage">
  <a href="#">
    <div class="RH-nav__navigation-card--icon RH-icon__roundbg rh-bg-icon-subpage"><i class="RH-icon__size-standard" data-feather="arrow-right"></i></div>
    <div class="RH-nav__navigation-card--title">Link to subpage</div>
    <div class="RH-nav__navigation-card--content">This text describes the content that can be found on the subpage</div>
  </a>
</nav>
</textarea>


<hr>
<i>RH-nav_second-parent</i>
<div style="width:400px;" class="RH-nav__second-parent" title="Secondary Navigation">
  <a href="#" class="RH-nav_second-parent-ahref">Navigation</a>
</div>
<textarea> 
<div class="RH-nav__second-parent" title="Secondary Navigation">
  <a href="#">Navigation</a>
</div>
</textarea>


<hr>
<i>RH-nav_second-parent</i>
<div style="width:400px;" class="RH-nav__second-parent" title="Secondary Navigation">
   <a href="#">Navigation</a>
</div>

<i>RH-nav__second-child</i>
<div style="width:400px;" class="RH-nav__second-child" title="Navigation/Child">
   <a href="#">Navigation/Child 1</a>
</div>


<i>RH-nav__second-child</i>
<div style="width:400px;" class="RH-nav__second-child" title="Navigation/Child">
   <a href="#">Navigation/Child 2
   <div class="RH-nav__icon RH-icon__roundbg"><i class="RH-icon__size-standard" data-feather="plus"></i></div>
   </a>
</div>

<i>RH-nav__second-child--sublevel</i>
<div style="width:400px;" class="RH-nav__second-child--sublevel" title="Navigation/Sublevel">
   <a href="#">Navigation/Sublevel</a>
</div>

<i>RH-nav__second-child--active</i>
<div  style="width:400px;" class="RH-nav__second-child--active" title="Navigation/Child">
   <a href="#">Navigation/Child 1</a>
</div>

<i>RH-nav__second-child--active</i>
<div  style="width:400px;" class="RH-nav__second-child--active" title="Navigation/Child/Active">
   <a href="#">Navigation/Child/Active 2
   <div class="RH-nav__icon RH-icon__roundbg bg-white"><i class="RH-icon__size-standard" data-feather="minus"></i></div>
   </a>
</div>

 
<textarea> </textarea>


 <hr>
 <h2>Navigation</h2>
 <div style="width:400px;">

<div class="RH-nav__second-parent" title="Secondary Navigation">
   <a href="#">Navigation</a>
</div>
<div class="RH-nav__second-child" title="Navigation/Child">
   <a href="#">Navigation/Child
   <div class="RH-nav__icon RH-icon__roundbg"><i class="RH-icon__size-standard" data-feather="plus"></i></div>
   </a>
</div>
<div class="RH-nav__second-child" title="Navigation/Child">
   <a href="#">Navigation/Child</a>
</div>
<div class="RH-nav__second-child" title="Navigation/Child">
   <a href="#">Navigation/Child</a>
</div>
<div class="RH-nav__second-child--active" title="Navigation/Child/Active">
   <a href="#">Navigation/Child/Active
   <div class="RH-nav__icon RH-icon__roundbg bg-white"><i class="RH-icon__size-standard" data-feather="minus"></i></div>
   </a>
</div>
<div class="RH-nav__second-child--sublevel" title="Navigation/Sublevel">
   <a href="#">Navigation/Sublevel</a>
</div>
<div class="RH-nav__second-child--sublevel" title="Navigation/Sublevel">
   <a href="#">Navigation/Sublevel</a>
</div>
<div class="RH-nav__second-child--sublevel" title="Navigation/Sublevel">
   <a href="#">Navigation/Sublevel</a>
</div>
<div class="RH-nav__second-child" title="Navigation/Child">
   <a href="#">Navigation/Child</a>
</div>


</div>

<textarea> 
<div class="RH-nav__second-parent" title="Secondary Navigation">
   <a href="#">Navigation</a>
</div>
<div class="RH-nav__second-child" title="Navigation/Child">
   <a href="#">Navigation/Child
   <div class="RH-nav__icon RH-icon__roundbg"><i class="RH-icon__size-standard" data-feather="plus"></i></div>
   </a>
</div>
<div class="RH-nav__second-child" title="Navigation/Child">
   <a href="#">Navigation/Child</a>
</div>
<div class="RH-nav__second-child" title="Navigation/Child">
   <a href="#">Navigation/Child</a>
</div>
<div class="RH-nav__second-child--active" title="Navigation/Child/Active">
   <a href="#">Navigation/Child/Active
   <div class="RH-nav__icon RH-icon__roundbg bg-white"><i class="RH-icon__size-standard" data-feather="minus"></i></div>
   </a>
</div>
<div class="RH-nav__second-child--sublevel" title="Navigation/Sublevel">
   <a href="#">Navigation/Sublevel</a>
</div>
<div class="RH-nav__second-child--sublevel" title="Navigation/Sublevel">
   <a href="#">Navigation/Sublevel</a>
</div>
<div class="RH-nav__second-child--sublevel" title="Navigation/Sublevel">
   <a href="#">Navigation/Sublevel</a>
</div>
<div class="RH-nav__second-child" title="Navigation/Child">
   <a href="#">Navigation/Child</a>
</div>
</textarea>














<h2>Navigation / Mobile fällbar box</h2>
<hr>
<i>RH-nav__box--normal</i>
<div class="RH-nav__box--normal" title="Navigation / Mobile fällbar box">
   <a href="#">Box with the content of the title</a>
     <div class="RH-nav__icon RH-icon__roundbg"><i class="color-havsbla-base " data-feather="plus-circle"></i></div>
</div>

<textarea><div class="RH-nav__box--normal" title="Navigation / Mobile fällbar box">
   <a href="#">Box with the content of the title</a>
     <div class="RH-nav__icon RH-icon__roundbg"><i class="color-havsbla-base " data-feather="plus-circle"></i></div>
</div> </textarea>



<i>RH-nav__box--active</i>
<div class="RH-nav__box--active" title="Navigation / Mobile fällbar box">
   <a href="#">Box with the content of the title</a>
   <div class="RH-nav__icon RH-icon__roundbg bg-white"><i class="color-havsbla-base RH-icon__size-standard" data-feather="minus"></i></div>
</div>
    <div class="RH-nav__box--content" id="contentbox-1">
    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
     <br>
     <a href="#" class="color-havsbla-base">Fäll ihop <i data-feather="chevron-up"></i></a>
    </div>

 <textarea> <div class="RH-nav__box--active" title="Navigation / Mobile fällbar box">
   <a href="#">Box with the content of the title</a>
   <div class="RH-nav__icon RH-icon__roundbg bg-white"><i class="color-havsbla-base RH-icon__size-standard" data-feather="minus"></i></div>
</div>
    <div class="RH-nav__box--content" id="contentbox-1">
    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
     <br>
     <a href="#" class="color-havsbla-base">Fäll ihop <i data-feather="chevron-up"></i></a>
    </div></textarea>



<hr>
 feathericons<br>
<!-- example icon -->
<i data-feather="circle"></i>  
<i data-feather="eye"></i>
<i data-feather="heart"></i>
<i data-feather="feather"></i>

    <script>
      feather.replace()
    </script>
 
 
<br><br><br><br>

</div> <!-- END top-->
</body>
</html>  










