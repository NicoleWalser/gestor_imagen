window.onload=()=>{

agregarEventoForm()
    
}
    function agregarEventoForm(){
        let formElemento = document.querySelector("#formuimagen");
        formElemento.onsumbit = (e)=>{
            e.preventDefault();
            enviarImagen(formElemento);
        }
    }
    async function enviarImagen(form){
        let formData = new FormData(form);
        let config = {
            method:"POST",
            body:formData
        }
        let url ="http://localhost/gestorimagen/back/controlador/controlador_imagen.php?function=agregar";
        await fetch(url,config);
        let imagenes = await obtenerimg();
        mostrarImg(imagenes);
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
     async function obtenerimg(){
        let url = "http://localhost/gestorimagen/back/controlador/controlador_imagen.php?function=obtener";
        let respuesta = await fetch(url);
        let imagenes = await respuesta.json();
        return imagenes;

    }
   





  