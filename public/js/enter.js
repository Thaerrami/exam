var form = document.getElementById("form");
    form.addEventListener("submit", function(event){
        event.preventDefault();

        var tex=document.querySelectorAll('input[type=text].ss');
        var rad=document.querySelectorAll('input[type=radio]');

        // for(var inp of tex ){

        // }

        tex.forEach((elem, index) => {
            if(elem.value==''){
            elem.parentNode.removeChild(elem);
            rad[index].parentNode.removeChild(rad[index]);
    }

        });
        this.submit();
});



       var qadd =document.getElementById('addbutton');
       var qcont=document.getElementById('questionfeald');
       var i=0;
       var formContainer= document.createElement("div");

       var cl=document.getElementById('copylink');
       cl.addEventListener('click',(e)=>{

        document.querySelector('#codelink').select();
        document.execCommand('copy');
        console.log(cl);
        var toast=document.getElementById('toast');
        toast.classList.add('show');
        setTimeout(()=>{
            toast.classList.remove('show');
        },1000)
        });

       qadd.addEventListener('click',()=>{
        

        var cont=document.createElement('div');
            cont.classList.add('formblock');
            cont.id='quesblock'+i;
            

        var node = document.createElement("input");
            node.type='text';
            node.name=`qestions[${i}][name]`;
            node.placeholder='Enter Qestion';
            node.classList.add('form-control');

        var qesindex=document.createElement('div');
        qesindex.appendChild(document.createTextNode('Quistion ('+(i+1)+')'));
        qesindex.classList.add('qindex');
        cont.appendChild(qesindex);
        cont.appendChild(node);
        
        for(let op=0;op<6;op++){

            var check=document.createElement('input');
            check.type='radio';
            check.name=`qestions[${i}][check]`;
            check.value=op;

            var options=document.createElement('input');
            options.type='text';
            options.name=`qestions[${i}][options][${op}]`;
            options.placeholder='options '+(op+1);
            options.classList.add('input-control');
            options.classList.add('ss');

            cont.appendChild(options);
            cont.appendChild(check);
        }
        qcont.appendChild(cont);
        i++;
       });

       function makeid(length) {
   var result           = '';
   var characters       = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
   var charactersLength = characters.length;
   for ( var i = 0; i < length; i++ ) {
      result += characters.charAt(Math.floor(Math.random() * charactersLength));
   }
   return result;
}

var id=makeid(7);

document.querySelector('#codelink').value='http://localhost:8000/Expage/'+id;
document.querySelector('#realcode').value=id;

       
