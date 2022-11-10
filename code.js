function clockFunc(){
    const time = new Date();
    console.log("Ajemen!");
    console.log(time);
    document.getElementById("hrs").textContent = time.getHours();
    document.getElementById("min").textContent = time.getMinutes();
    document.getElementById("sec").textContent = time.getSeconds();
}
clockFunc();

var checker = 1;
const btn = document.getElementById("themebtn");
btn.addEventListener("click", changeTheme);



function changeTheme(){

    if (checker == 1){
    document.body.style.background = "linear-gradient(0deg, rgba(253,187,45,1) 0%, rgba(195,34,97,1) 100%)";
    btn.innerHTML = "sunrise";
    /*
    var stxt = document.getElementById("samueltext");
    var mtxt = document.getElementById("mikaelatext");
    stxt.classList.add("mono");
    mtxt.classList.add("mono");
    */
    document.body.style.fontFamily = "monospace";
    checker -= 1;
    }
    else{
    document.body.style.background = "linear-gradient(0deg, rgba(224,255,254,1) 0%, rgba(140,193,255,1) 100%)";
    btn.innerHTML ="sunset";
    document.body.style.fontFamily = "serif";
    /*
    var stxt = document.getElementById("samueltext");
    var mtxt = document.getElementById("mikaelatext");
    stxt.classList.remove("mono");
    mtxt.classList.remove("mono");
    */
    document.body.style.fontFamily = "serif";
    checker = 1;
    }
}