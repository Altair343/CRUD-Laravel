const todos = document.getElementById('link1');
const recordatorios = document.getElementById('link2');
const links = document.getElementById('link3');
const descripcion = document.getElementById('description');
const count = document.getElementById('count');
let auxiliar, tamano;
const limit = 200;

todos.addEventListener('click',(e)=>{
    todos.classList.add("select");
    recordatorios.classList.remove("select");
    links.classList.remove("select");
});

recordatorios.addEventListener('click',(e)=>{
    recordatorios.classList.add("select");
    todos.classList.remove("select");
    links.classList.remove("select");
});

links.addEventListener('click',(e)=>{
    links.classList.add("select");
    recordatorios.classList.remove("select");
    todos.classList.remove("select");
});

descripcion.addEventListener('keyup',(e)=>{
    tamano = descripcion.value.length;
    if(tamano < limit){
        auxiliar = limit - tamano;
    }else{
        console.log(tamano);
        auxiliar = `<div style="color: #f00;">limite</div>`
    }
    drawCount(auxiliar);
});

const drawCount = (dato)=>{
    count.innerHTML = dato;
};
