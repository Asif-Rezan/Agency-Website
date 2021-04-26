var x=document.querySelector(".title-text");
var y=document.querySelector(".navbar-collapse");
const hideShow=()=>{

  millisecondsToWait = 0; 
setTimeout(function() { 

  if (x.style.display === "none") {
    x.style.display = "block";
    y.style.display="none";
  } else {
    x.style.display = "none";
    y.style.display="block";
  }
    
}, millisecondsToWait);
 
}



const hideShow2=()=>{

 millisecondsToWait = 0; 
 setTimeout(function() { 

  if (y.style.display === "block") {
    y.style.display="none";
  } else {
   
    y.style.display="block";
  }
    
}, millisecondsToWait);
 
}

document.getElementById("contact-titleID").style.marginTop = "70px";



const openContact=()=>{
  console.log("Button clicked");
}
