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
  	<link rel='stylesheet' href='<?php echo $folder;?>/temp.css<?php echo "?v=".date("YmdHis");?>' type='text/css' media='all' />  
    <script type='text/javascript' src='/rh-cdn/javascript/rh-java.js<?php echo "?v=".date("YmdHis");?>'></script>


 

<style>
body{ font-family: Arial; }
textarea {width: 100%; height: 100px; 
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  font-size: 0.6em;
  background-color: #FFFFCC;
}

i {font-size: 0.8em;}

</style>

</head>
	<body>


<div style="width:70%;margin: auto;"> <!-- TOP -->




<center><h2>RH-Komponenter</h2></center>

 


	<a href='<?php echo $folder;?>/main.min.css'/><?php echo $folder;?>/main.min.css<?php echo "?v=".date("YmdHis");?></a>
	<hr>
  	<a href='<?php echo $folder;?>/temp.css'/><?php echo $folder;?>/temp.css<?php echo "?v=".date("YmdHis");?></a>  "Används för test"
  	<hr>
    <a href='/rh-cdn/javascript/rh-java.js'>/rh-cdn/javascript/rh-java.js<?php echo "?v=".date("YmdHis");?></a>
<hr>
 <hr>
<br><br>

<i>RH-nav-subheader</i>
      <div class="hidden md:block container mx-auto px4 overflow-auto scrolling-touch">
      <ul class="list-reset flex flex-wrap -mx-4">
        <?php 
$r="";
while($r<5){
  $r++;
  if($r==2){$active="RH-nav__subheader--item--active";}else{$active="RH-nav__subheader--item";}
  ?> <li class="<?php echo $active;?>"> <?php echo $r;?>. Linkitem </li><li class="px2"></li>
    
<?php }#while ?>

      </ul>
    </div>


<textarea><div class="RH-nav__subheader--item">Linkitem</div>
  <div class="RH-nav__subheader--item--active">LinkitemAktiv</div>
</textarea>


<hr>
<i>RH-nav-subheader</i>
<nav class="RH-nav__navigation-card" title="Link to subpage">
  <a href="#">
    <div class="RH-nav__navigation-card--icon"><label class="RH-icon-bg"><div class="RH-icon-point-r "></div></label></div>
    <div class="RH-nav__navigation-card--title">Link to subpage</div>
    <div class="RH-nav__navigation-card--content">This text describes the content that can be found on the subpage</div>
  </a>
</nav>

<textarea> 
</textarea>


<hr>
RH-icon-search
<div class="RH-icon-search"></div>

RH-icon-point-r
<div class="RH-icon-point-r"></div>

RH-icon-streck
<div class="RH-icon-streck"></div>

RH-icon-bg <br>
<div class="RH-icon-bg">123</div>

 


<hr>
<hr>
PHP PLUGIN SVG PATH
<svg class="icon-badge icon-badge--md mr1" style="fill: red;" viewBox="0 0 8 8">
    <path d='M5 0c-.55 0-1 .45-1 1s.45 1 1 1 1-.45 1-1-.45-1-1-1zM3.5 2.5C2.67 2.5 2 3.17 2 4h1c0-.28.22-.5.5-.5s.5.22.5.5-1 1.64-1 2.5C3 7.36 3.67 8 4.5 8S6 7.33 6 6.5H5c0 .28-.22.5-.5.5S4 6.78 4 6.5C4 6.14 5 4.66 5 4c0-.81-.67-1.5-1.5-1.5z'/>
</svg>


<svg class="icon-badge icon-badge--md mr1" style="fill: red;" viewBox="0 0 8 8">
 <?php echo get_region_halland_icon("monitor");?>
</svg>

search
<svg class="icon-badge icon-badge--md mr1" style="fill: red;" viewBox="0 0 8 8">
 <?php echo get_region_halland_icon("search");?>
</svg>

<br><br><br><br>

</div> <!-- END top-->
</body>
</html>  










