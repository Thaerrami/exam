setInterval(() => {
    var cd = new Date();
    document.getElementById('timenow').innerHTML=cd.getHours()+':'+cd.getMinutes()+':'+cd.getSeconds()     
}, 1000);

var rad=document.querySelectorAll('input[type=radio]');
for(var allradios of rad){
  allradios.addEventListener('click',()=>{
    for(var ele of rad){
        ele.parentElement.classList.remove('checked');
    }

    for(var ele of rad){
        if(ele.checked){
        ele.parentElement.classList.add('checked');
    }
    }
  })
}