let name = document.getElementById('unm');
let pass = document.getElementById('pwd');

name.addEventListener('input', function(){checkifempty(event.target)});
pass.addEventListener ('input', function(){checkifempty(event.target)});

function checkifempty(information){
    if(!(information.value)||(information.value).trim().length===0){
        information.style.borderColor = "#DC143C";
        information.style.backgroundColor = "#ffedf2";
        return false;
    }
    else{
        information.style.borderColor = "#6ce070";
        information.style.backgroundColor = "#e8fce9";
        return true;
    }
};

let logform = document.getElementById("logform");
let logbutton = document.getElementById("btnlogin");
 logform.addEventListener('input', ev=>{
    if (checkifempty(name)&&
        (checkifempty(pass))){
        
        if(logbutton.disabled!==false)
            logbutton.disabled = false;
        }
    else {
        if(logbutton.disabled!==true){
            logbutton.disabled = true;
        }
        console.log(logbutton.innerHTML);
        
    }
});