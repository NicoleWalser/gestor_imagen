window.onload=()=>{
    obtenerimagen()
   

    }
    function mostrarImg(imagenes){
        let listaimgEleement = document.querySelector("#listaimagen");
        listaimgEleement.innerHTML="";
        imagenes.forEach(imagen => {
            listaimgEleement.innerHTML+=`
            <div>
            <p>${imagen.nombre}</p>
            <img src"../../../backend/imagenes/${imagen.id}.${imagen.extension}">
            </div>
            `
        });
    }
     async function obtenerimagen(){
        let url = "http://localhost/Gestor_-De_Imagen/backend/controlador/controlador.php?request=obtenerimg";
        let respuesta = await fetch(url);
        let imagenes = await respuesta.json();
        return imagenes;
    }


  