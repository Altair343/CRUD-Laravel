const descripcion = document.getElementById('description');
const count = document.getElementById('count');
let auxiliar, tamano;
const limit = 200;

descripcion.addEventListener('keyup',(e)=>{
    todo();
});
window.addEventListener("load", async (e) => {
    todo();
  
  });


function todo(){
    tamano = descripcion.value.length;
    if(tamano < limit){
        auxiliar = limit - tamano;
    }else{
        console.log(tamano);
        auxiliar = `<div style="color: #f00;">limite</div>`
    }
    drawCount(auxiliar);
}

const drawCount = (dato)=>{
    count.innerHTML = dato;
};