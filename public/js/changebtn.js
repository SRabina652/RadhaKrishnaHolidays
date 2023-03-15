let btnchange =(message,bgcolor)=>{
    let msg=document.querySelector('#btnchange');
    msg.innerText= message;
    btnchange.style.backgroundColor=bgcolor;
}

let change= document.querySelector('#btnchange');
change.addEventListener('click',function(){
    change.innerText='Query Replied';
    change.style.backgroundColor = '#33691e' ; 
})