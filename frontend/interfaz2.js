window.onload = ()=>{
    obtenerImg();
}

function mostrarImg(imagenes){
    let listaimgElement = document.querySelector("#listaimagen");
    listaimgElement.innerHTML="";
    imagenes.forEach(imagen => {
        let imgSrc = `../back/img/${imagen.id}.${imagen.extension}`;
        console.log('Generando ruta de imagen:', imgSrc);

        listaimgElement.innerHTML+=`
        <div>
            <img src="${imgSrc}" alt="${imagen.nombre}">
        <p>${imagen.nombre}</p>

        </div>
        `
        
    });
}
 async function obtenerImg(){
    let url = "http://localhost/gestorimagen/back/controlador/controlador_imagen.php?function=obtenerImagen";
    try {
        let consulta = await fetch(url);
        let datos = await consulta.json();
        console.log('Datos recibidos:', datos);
        
        mostrarImg(datos);
    } catch (error) {
        console.error('Error al obtener imágenes:', error);
    }
}