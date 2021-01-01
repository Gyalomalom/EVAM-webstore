let firstname = document.getElementById('fn');
let lastname = document.getElementById('ln');

firstname.addEventListener('input', function(){checkifempty(event.target)});
lastname.addEventListener ('input', function(){checkifempty(event.target)});

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

let email = document.getElementById('mail');

email.addEventListener('input', function(){validateEmail(event.target)} );
function validateEmail(ev){
    let re = /(?:[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])/;
    if(!(ev.value)||!(re.test(ev.value))){
        ev.style.borderColor = "#DC143C";
        ev.style.backgroundColor = "#ffedf2";
        return false;
    }
    else{
        ev.style.borderColor = "#6ce070";
        ev.style.backgroundColor = "#e8fce9";
        return true;
    }
};

let pwd = document.getElementById('pw'); 

pwd.addEventListener('input', function(){indicatepasswordlength(event.target)});

function indicatepasswordlength(ev)
{
    if(!(ev.value)||!((ev.value).trim().length>7)){
        ev.style.borderColor = "#DC143C";
        ev.style.backgroundColor = "#ffedf2";
        return false;
    }
    else if (((ev.value).trim().length>7)&&((ev.value).trim().length<12)){
        ev.style.borderColor = "#ffee00";
        ev.style.backgroundColor = "#fff9a8";
        return true;
    }
    else{
        ev.style.borderColor = "#6ce070";
        ev.style.backgroundColor = "#e8fce9";
        return true;
    }
}

let regbutton = document.getElementById('regbtn');
let regform = document.getElementById('regform');

regform.addEventListener('input', ev=>{
    if (checkifempty(firstname)&&
        checkifempty(lastname)&&
        validateEmail(email)&&
        indicatepasswordlength(pwd)){
        
        if(regbutton.disabled!==false)
            regbutton.disabled = false;
        }
    else {
        if(regbutton.disabled!==true){
            regbutton.disabled = true;
        }
        console.log(regbutton.innerHTML);
        
    }
});

