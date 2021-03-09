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


