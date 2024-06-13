window.onload=()=>{

    enviarImagen();
    
    }
    
        function enviarImagen(){
    
            let formElement = document.querySelector("#formuimagen");
            formElement.onsubmit = async (e) =>{
                e.preventDefault();
    
            let formData = new FormData(formElement);
    
            let url ="http://localhost/gestorimagen/back/controlador/controlador_imagen.php?function=agregarImagen";
       
    
            let config = {
                method:"POST",
                body:formData
            }
    
            let respuesta = await fetch(url, config);
            let datos = await respuesta.json();
            console.log(datos);
        }
    
    
        }


        

  