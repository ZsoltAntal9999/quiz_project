document.getElementById("orszagok").addEventListener('change',vizsgal)

function vizsgal(e){
    document.getElementById("eredmeny").innerHTML="";
    console.log(e.target.value)
    let id=e.target.value
    let id_jo=document.getElementById("kitalalando_id").value
    if(id==id_jo){
        document.getElementById("eredmeny").innerHTML="OK"
        console.log('jó')
        document.querySelector("label[for='" + e.target.id + "']").style.color = "green";
    }
    else{
        console.log("hibas")
        //document.getElementById('foto').classList.add("hibas");
        //console.log('id='+e.target.id)
        let rossz_valaszok=parseInt(document.getElementById("rossz").innerHTML)
        document.getElementById("rossz").innerHTML=rossz_valaszok+1;
        document.querySelector("label[for='" + e.target.id + "']").style.color = "red";
        document.getElementById("eredmeny").innerHTML="Nem talált!"
        
    }
}

