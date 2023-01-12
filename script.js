const btn = document.querySelector(".checkbtn");
const icon = document.querySelector(".fa-bars");

btn.onclick = function(){
    if(icon.classList.contains("fa-bars")){
        icon.classList.replace("fa-bars", "fa-times");
    }
    else{
        icon.classList.replace("fa-times", "fa-bars");
    }
}