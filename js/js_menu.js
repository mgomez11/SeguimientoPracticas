
function toggle(id){
  if(document.getElementById(id).style.height == "30px" || document.getElementById(id).style.height == ""  ){
    document.getElementById(id).style.height = "90px";
    document.getElementById(id).style.backgroundColor = "#3d474f";
    document.getElementById(id).getElementsByTagName("span")[0].style.transform = "rotate(-90deg)";
  }
    else{
    document.getElementById(id).style.height = "30px";
    document.getElementById(id).style.backgroundColor = "#23282C";
    document.getElementById(id).getElementsByTagName("span")[0].style.transform = "rotate(0deg)";
    }

}