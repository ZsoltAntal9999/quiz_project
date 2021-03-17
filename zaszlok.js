flags=[]

kontinens=$('#kontinens').text()
console.log('kontinens='+kontinens)

 //When the page has loaded.
 $( document ).ready(function(){
    $.ajax({
        url : "getFlags.php",
        type : "POST",
        data : 'kontinens=' + kontinens ,
        success : function(data) {
            //console.log(data)
            flags=JSON.parse(data)
            showPhoto(0)
        },
    error: function() {
        console.log('hiba:Ajaxnál')
    }         
    });                  
});

//felíratkozás az eseményekre:
$(()=>{
    $('.next').on('click',()=>{
        let src= $('#foto').attr('src')
        if(getIndex(src)<flags.length-1 && $('#eredmeny').text()=='OK'){
            showPhoto(getIndex(src)+1)
            $('label').css('color','black')
            $('input[type=radio]').prop('checked', false);
            $('#eredmeny').text('') //az előző törlése
        }
    else if(getIndex(src)==flags.length-1 && $('#eredmeny').text()=='OK'){
            console.log("végeredmény")
            vegeredmeny()
    }
    })
    $('.back').on('click',()=>{
        let src= $('#foto').attr('src')
        if(getIndex(src)>0){
            showPhoto(getIndex(src)-1)
            $('#eredmeny').text('')//az előző törlése
        }
    })
}) 

const getIndex=(photoName)=>{
    let index = flags.findIndex(x => x.foto == photoName); 
    return index
}
function showPhoto(i){
    $('#foto').attr('src',`${flags[i].foto}`)
    $('#kitalalando_id').val(`${flags[i].orszag_id}`)
     return
}

function vegeredmeny(){
        let kontinensidj=document.getElementById("kontinens_id").innerHTML
        let rosszj=document.getElementById("rossz").innerHTML
        console.log("Rossz: "+rossz)
        let kontinensj=document.getElementById("kontinens").innerHTML
        $.ajax({
            url : "vegeredmeny.php",
            type : "POST",
            data : 'kontinensj=' + kontinensj + '&rosszj='+rosszj+'&kontinensidj='+kontinensidj,
            success : function(data) {
                console.log(data)
                $('#foto').attr("src","")
                $('#jatek_eredmeny').html(data)
                console.log("Szoveg: "+data.indexOf("Gratulálunk!"))
                let index=parseInt(data.indexOf("Gratulálunk!"));
                if(index>-1){
                    let input = document.createElement("input");
                    input.type = "text";
                    input.placeholder="Adj meg egy nevet!";
                    let obj=document.getElementById("jatek_eredmeny")
                    obj.appendChild(input);
                    let btn=document.createElement("button");
                    let btn_szoveg = document.createTextNode("Mentés");
                    btn.setAttribute("style","color:red;font-size:23px");
                    btn.appendChild(btn_szoveg);
                    btn.onclick = function () {
                        alert("blabla");
                      }
                    obj.appendChild(btn);
                }
            },
        error: function() {
            console.log('hiba:Ajaxnál')
        }         
        });                  
}

