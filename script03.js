let deV01 = document.getElementById("play");

deV01.style.fontSize= "40px";

let div01 = document.getElementById("play");

let btn = document.getElementById("btn");
btn.addEventListener("click",()=>{

    if(div01.backgroundColor ===" rgb(91, 219, 219)"&&div01.style.backgroundColor != "black"){
    div01.style.backgroundColor="black";
div01.style.color="white"}
    else if(div01.backgroundColor ===" rgb(91, 219, 219)"&&div01.style.backgroundColor !="white"){
        div01.style.backgroundColor="white";
div01.style.color="black";
    }

    console.log("Eid Mubarak!!");

})