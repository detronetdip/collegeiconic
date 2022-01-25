var all=document.querySelector("#filter")
all.addEventListener('change',e=>{
    var all=document.querySelectorAll(`[data-filter]`);
    all.forEach(node=>{
        if(node.attributes[1].value===e.target.value){
            node.style.display=""
        }else{
            node.style.display="none"
        }
    })
})