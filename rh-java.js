function RH_openpage(a){
window.location.href=a;
}

function RH_openpage_new(a){
window.location.href=a;
}

// visa/dölj
function RH_showhide(id){
    if(document.getElementById){
      var idDisplay = document.getElementById(id).style.display;
        if (idDisplay=="block"){
            document.getElementById(id).style.display="none";
        } else {
            document.getElementById(id).style.display="block";
        }
	   }
}


// visa objekt och byter class
function RH_showhide_shs(id,ida,idb){ // id, objektid som ska byta class, använd class, återgå id, återgå class
   if(document.getElementById){
     var idDisplay = document.getElementById(id).style.display;
       if (idDisplay=="block"){
           document.getElementById(id).style.display="none";
            document.getElementById(ida).style.display="block";
             document.getElementById(idb).style.display="none";
       } else {
           document.getElementById(id).style.display="block"
           document.getElementById(ida).style.display="none";
            document.getElementById(idb).style.display="block";
       }
   }
}

// andra ikon show/dold
function RH_showobj_sh(s,h){ // id, objektid som ska byta class, använd class, återgå id, återgå class
   if(document.getElementById){
     var idDisplay = document.getElementById(s).style.display;
       if (idDisplay=="block"){
           document.getElementById(s).style.display="none";
            document.getElementById(h).style.display="block";
       } else {
           document.getElementById(s).style.display="block"
           document.getElementById(h).style.display="none";
       }
   }
}



function RH_hide(id){
    if(document.getElementById){
var idDisplay = document.getElementById(id).style.display;
        document.getElementById(id).style.display="none";
	}
}


function RH_class(a,cl) {
 document.getElementById(a).className = cl;
  }


  function RH_icon(id,data) {// ändra feather ikon namn
    document.getElementById(id).setAttribute("data", data);
  }
