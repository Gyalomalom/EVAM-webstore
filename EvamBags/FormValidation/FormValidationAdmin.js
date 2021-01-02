let addfile = document.getElementById("addfile");
let additemname = document.getElementById("additemname");
let addprice= document.getElementById("addprice");
let addcollection = document.getElementById("addcollection");
let btnaddsubmit = document.getElementById("addsubmit");

let removeID = document.getElementById("removeID");
let btnremove= document.getElementById("btnremove");

let updateID = document.getElementById("updateID");
let updatename= document.getElementById("updatename");
let updateprice = document.getElementById("updateprice");
let updatecollection = document.getElementById("updatecollection");
let btnupdate = document.getElementById("btnupdate");

let add = document.getElementById("cntadd");
let remove = document.getElementById("cntrmv");
let update = document.getElementById("cntupt")

//returns true if string is not empty
function checkifempty(information){
    if(!(information.value)||(information.value).trim().length===0){
        return false;
    }
    else{
        return true;
    }
};



add.addEventListener('input', ev=>{
    if ((addfile.files.length > 0) &&
    checkifempty(additemname) &&
    (checkifempty(addprice) && (!isNaN(addprice.value))) && 
    checkifempty(addcollection)){
        btnaddsubmit.disabled = false;
    }else{
        btnaddsubmit.disabled = true;
    }
});


remove.addEventListener('input', ev=>{
    if (
    checkifempty(removeID)&& (!isNaN(removeID.value))){
        btnremove.disabled = false;
    }else{
        btnremove.disabled = true;
    }
});

update.addEventListener('input', ev=>{
    if ((checkifempty(updateID)&& (!isNaN(updateID.value)))&&
    checkifempty(updatename) &&
    (checkifempty(updateprice) && (!isNaN(updateprice.value))) && 
    checkifempty(updatecollection)){
        btnupdate.disabled = false;
    }else{
        btnupdate.disabled = true;
    }
});