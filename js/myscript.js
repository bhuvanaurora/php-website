
//For left side dropdown navigation bar
window.onload = initAll;

function initAll(){
    //alert("1");
    var allLinks = document.getElementsByTagName("a");
    //alert(allLinks.length);    
    for (var i=0; i<allLinks.length; i++){
        if (allLinks[i].className.indexOf("menuLink")>-1){
                allLinks[i].onclick = toggleMenu;
            }
    }
}
function toggleMenu(){

    var startMenu = this.href.lastIndexOf("/")+1;
    var stopMenu = this.href.lastIndexOf(".");
    //alert(this.href);

    var thisMenuName = this.href.substring(startMenu, stopMenu);
    //alert(thisMenuName);
    var thisMenu = document.getElementById(thisMenuName).style;


    if(thisMenu.display === "block"){
        thisMenu.display = "none";
    }
    else{
        thisMenu.display = "block";
    }
    return false;
}
//For left side dropdown navigation bar

//Accordian Question representation

if (document.getElementById) {
 document.write('<style type="text/css">.texter {display:none; border-left:white 20px solid; color:#404040; font-family:verdana,arial,helvetica,sans-serif; font-size:9pt} @media print {.texter {display:block;}}</style>') }

 var divNum = new Array("a1","a2","a3");  // at the left you should add a1, a2 etc. for each header you wish to include
                                          // so if you want 4 headers you should add a1, a2, a3, a4 in the format shown
                                          // enclosed in double quotes
function openClose(theID) {
 for(var i=0; i < divNum.length; i++) {
  if (divNum[i] == theID) {
   if (document.getElementById(divNum[i]).style.display == "block") { document.getElementById(divNum[i]).style.display = "none" }
   else { document.getElementById(divNum[i]).style.display = "block" }
  }
  else { document.getElementById(divNum[i]).style.display = "none"; }
 }
}

function openAll() {
 for(var i=0; i < divNum.length; i++) {
   document.getElementById(divNum[i]).style.display = "block";
 }
}

function closeAll() {
 for(var i=0; i < divNum.length; i++) {
   document.getElementById(divNum[i]).style.display = "none";
 }
}
//Accordian Question representation

//CAT-GMAT Link: On mouse hovering
var timeout = 500;
var closetimer  = 0;
var ddmenuitem  = 0;

// open hidden layer
function mopen(id)
{ 
  // cancel close timer
  mcancelclosetime();

  // close old layer
  if(ddmenuitem) ddmenuitem.style.visibility = 'hidden';

  // get new layer and show it
  ddmenuitem = document.getElementById(id);
  ddmenuitem.style.visibility = 'visible';

}
// close showed layer
function mclose()
{
  if(ddmenuitem) ddmenuitem.style.visibility = 'hidden';
}

// go close timer
function mclosetime()
{
  closetimer = window.setTimeout(mclose, timeout);
}

// cancel close timer
function mcancelclosetime()
{
  if(closetimer)
  {
    window.clearTimeout(closetimer);
    closetimer = null;
  }
}
// close layer when click-out
document.onclick = mclose; 
//CAT-GMAT Link: On mouse hovering