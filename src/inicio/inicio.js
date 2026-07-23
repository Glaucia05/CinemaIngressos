const modal = document.getElementById("modal");

document.getElementById("abrirLogin").onclick = () =>{
    modal.style.display = "flex";
}

modal.onclick = (e)=>{
    if(e.target === modal){
        modal.style.display = "none";
    }
}