let name = "<?php echo $name;?>";
let redirect = ((name)=>{
    setTimeout(()=>{
        window.location.href = `http://localhost/${name}.html`;
    }, 1000);
});

document.querySelector("#sendBtn").addEventListener('click', ()=>{
    redirect(name);
});