//guardamos todos los elementos que tengan la clase FormulariosAjax
const formularios_ajax = document.querySelectorAll(".FormularioAjax")

function enviar_formulario_ajax(e) {

  //prevenir el evento por Default y no se redirige al los archivos
  e.preventDefault()

  let enviar = confirm("¿Quieres enviar el formulario...?");

  if (enviar == true) {

    let data = new FormData(this) // todos los datos del formulario
    let method = this.getAttribute("method") // guarda el metodo del formulario, true or false
    let action = this.getAttribute("action") // 

    // el encabezado neceario para la API de javascript
    let encabezados = new Headers()

    // configuracion del metodo
    let config = {
      method: method,
      headers: encabezados,
      mode: 'cors',
      cache: 'no-cache',
      body: data
    }

    // la API fetch de javacript
    fetch(action, config)
      .then(respuesta => respuesta.text())
      .then(respuesta => {
        let contenedor = document.querySelector(".form-rest")
        contenedor.innerHTML = respuesta
      })
  }

}

// recorremos todos los formularios uno a uno
// cuando un formulario tenga esta funcion
formularios_ajax.forEach(formularios => {
  formularios.addEventListener("submit", enviar_formulario_ajax)
})
