const btnAll = document.getElementById("link1");
const btnRecord = document.getElementById("link2");
const btnLink = document.getElementById("link3");
const myContent = document.getElementById("myContent");


btnAll.addEventListener('click',(e)=>{
    const url = "notas/all";
    loadRegistros(url);

});

btnRecord.addEventListener('click',(e)=>{
    const url = "notas/record";
    loadRegistros(url);

});

btnLink.addEventListener('click',(e)=>{
    const url = "notas/link";
    loadRegistros(url);
});

window.addEventListener("load", async (e) => {
    const url = "notas/all";
    loadRegistros(url);
  
  });

  const loadRegistros = async ( dir) => {
    try {
      const response = await axios.get(dir);
      switch (response.status) {
        case 200:
          let notas = response.data;
          console.log(notas)
          draw(notas);
          break;
        case 201:
          console.log("no se encontro info");
          break;
        case 404:
          break;
  
        default:
          break;
      }
    } catch (error) {
      console.log(error);
    }
  };

const draw = (data) => {
    myContent.innerHTML = "";
    const container = document.createElement("div")
    data.forEach((nota) => {
      const comicHTML = `
      <div class="contentCard ${nota['type']}">
            <div class="contentCard__title">
                <h2>${nota['title']}</h2>
            </div>
            <section class="contentCard__body">
                <p>${nota['description']}</p>
            </section>
            <div class="contentCard__footer">
                <p>${ moment(nota['updated_at'] ).format('DD/MM/YYYY')}</p>
                <div class="link-subMenu">
                    <nav class="content-options">
                        <ul class="main-options">
                            <li class="main-options__item"><a href="notas/${nota['id']}/edit" class="main-options__item-link"><i
                                        class="fas fa-pen"></i></a></li>
                            <li class="main-options__item"><a href=" notas/${nota['id']}/arch" class="main-options__item-link"><i
                                        class="fas fa-archive"></i></a></li>
                        </ul>
                    </nav>
                    <i class="fas fa-ellipsis-h"></i>
                </div>
            </div>
        </div>
      `;
      container.insertAdjacentHTML("beforeend", comicHTML);
      container.classList.add('contentNotes');
    });
    myContent.appendChild(container);
  };

