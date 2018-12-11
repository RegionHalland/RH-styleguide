<?php 
$folder = "/rh-cdn/styleguide";


  // Returnera ikon
  function get_region_halland_icon($icon) {

    switch ($icon) {
      case 'search':
          $svgContent = "<path d='M15.7071 14.2922L11.7456 10.3244C12.56 9.21539 12.9991 7.87536 12.9989 6.49946C12.9989 4.7757 12.3142 3.12253 11.0953 1.90365C9.87639 0.684763 8.22323 0 6.49946 0C4.7757 0 3.12253 0.684763 1.90365 1.90365C0.684763 3.12253 0 4.7757 0 6.49946C-2.32077e-08 8.22319 0.684673 9.87632 1.90343 11.0953C3.12218 12.3142 4.77521 12.9992 6.49893 12.9995C7.87838 13.0002 9.22179 12.5591 10.3324 11.7408L14.2927 15.7065C14.4803 15.8941 14.7347 15.9995 14.9999 15.9995C15.2651 15.9995 15.5195 15.8941 15.7071 15.7065C15.8946 15.519 16 15.2646 16 14.9994C16 14.7341 15.8946 14.4798 15.7071 14.2922ZM1.99992 6.49946C1.99992 5.30611 2.47397 4.16163 3.3178 3.3178C4.16163 2.47398 5.30611 1.99992 6.49946 1.99992C7.69282 1.99992 8.83729 2.47398 9.68112 3.3178C10.525 4.16163 10.999 5.30611 10.999 6.49946C10.999 7.69282 10.525 8.8373 9.68112 9.68112C8.83729 10.525 7.69282 10.999 6.49946 10.999C5.30611 10.999 4.16163 10.525 3.3178 9.68112C2.47397 8.8373 1.99992 7.69282 1.99992 6.49946Z'/>";
          return $svgContent;
            
           case 'headphone':
          $svgContent = "<path d='M4 0C2.35 0 1 1.35 1 3v1H.5a.5.5 0 0 0-.5.5v2a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5V3c0-1.11.89-2 2-2 1.11 0 2 .89 2 2v3.5a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 0-.5-.5H7V3c0-1.65-1.35-3-3-3z'/>";
          return $svgContent;
             case 'monitor':
            $svgContent = "<path d='M.34 0A.5.5 0 0 0 0 .5v5a.5.5 0 0 0 .5.5H3v1H2c-.55 0-1 .45-1 1h6c0-.55-.45-1-1-1H5V6h2.5a.5.5 0 0 0 .5-.5v-5a.5.5 0 0 0-.5-.5h-7a.5.5 0 0 0-.09 0 .5.5 0 0 0-.06 0zM1 1h6v4H1V1z'/>";
          return $svgContent;
      case 'menu':
          $svgContent = "<path d='M15 4H1a1 1 0 1 1 0-2h14a1 1 0 0 1 0 2zm0 5H1a1 1 0 1 1 0-2h14a1 1 0 0 1 0 2zm0 5H1a1 1 0 0 1 0-2h14a1 1 0 0 1 0 2z'/>";
          return $svgContent;
      case 'x':
          $svgContent = "<path d='M1.41 0L0 1.41l.72.72L2.5 3.94.72 5.72 0 6.41l1.41 1.44.72-.72 1.81-1.81 1.78 1.81.69.72 1.44-1.44-.72-.69-1.81-1.78 1.81-1.81.72-.72L6.41 0l-.69.72L3.94 2.5 2.13.72 1.41 0z'/>";
            return $svgContent;
      case 'chevron-right':
          $svgContent = "<path d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z'/>";
          return $svgContent;
      case 'info':
          $svgContent = "<path d='M5 0c-.55 0-1 .45-1 1s.45 1 1 1 1-.45 1-1-.45-1-1-1zM3.5 2.5C2.67 2.5 2 3.17 2 4h1c0-.28.22-.5.5-.5s.5.22.5.5-1 1.64-1 2.5C3 7.36 3.67 8 4.5 8S6 7.33 6 6.5H5c0 .28-.22.5-.5.5S4 6.78 4 6.5C4 6.14 5 4.66 5 4c0-.81-.67-1.5-1.5-1.5z'/>";
          return $svgContent;
      default:
          $svgContent = "<path d='M4 0C2.35 0 1 1.35 1 3v1H.5a.5.5 0 0 0-.5.5v2a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5V3c0-1.11.89-2 2-2 1.11 0 2 .89 2 2v3.5a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 0-.5-.5H7V3c0-1.65-1.35-3-3-3z'/>";
        return $svgContent;
    } 

  }



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
<div class="col sm-col-3">

<div class="RH-nav__navigation-card" title="Link to subpage">
  <a href="#">
    <div class="RH-nav__navigation-card--icon RH-icon__roundbg rh-bg-icon-subpage"><i class="RH-icon__size-standard" data-feather="arrow-right"></i></div>
    <div class="RH-nav__navigation-card--title">Link to subpage</div>
    <div class="RH-nav__navigation-card--content">This text describes the content that can be found on the subpage</div>
  </a>
</div>

</div>

<div class="col sm-col-1" > &nbsp;  &nbsp;</div>

<div class="col sm-col-3">
  <div class="RH-nav__navigation-card" title="Link to subpage">
    <a href="#">
    <div class="RH-nav__navigation-card--icon RH-icon__roundbg rh-bg-icon-subpage"><i class="RH-icon__size-standard" data-feather="arrow-right"></i></div>
    <div class="RH-nav__navigation-card--title">Link to subpage</div>
    <div class="RH-nav__navigation-card--content">This text describes the content that can be found on the subpage</div>
    </a>
</div>

</div>

<div class="col sm-col-1" > &nbsp;  &nbsp;</div>

<div class="col sm-col-3">
  <div class="RH-nav__navigation-card" title="Link to subpage">
    <a href="#">
    <div class="RH-nav__navigation-card--icon RH-icon__roundbg rh-bg-icon-subpage"><i class="RH-icon__size-standard" data-feather="arrow-right"></i></div>
    <div class="RH-nav__navigation-card--title">Link to subpage</div>
    <div class="RH-nav__navigation-card--content">This text describes the content that can be found on the subpage</div>
    </a>
</div>

</div>

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
 

<br>
RH-icon-bg <br>
<div class="RH-icon-bg">123</div> 


 
<br><br><br><br>

</div> <!-- END top-->
</body>
</html>  










