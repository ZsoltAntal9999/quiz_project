document.getElementById("sendMessageButton").addEventListener("click",ellenor)

function ellenor(e){
    e.preventDefault();
    //console.log("oké")
    let uzenet=document.getElementById("message").value
    let nev=document.getElementById("name").value
    if(!teszt(nev)){
        e.preventDefault();
        alert("Nem adtad meg a neved!")
    }
    if(!teszt(uzenet)){
        e.preventDefault();
        alert("Nem írtál üzenetet nekünk!")
    }
}

function teszt(str){
    if(str.length<5){
        return false;
    }
    else{
        return true;
    }
}