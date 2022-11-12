let botonEnviar = document.getElementById('botonEnviar')

botonEnviar.addEventListener('click', function(e){
    e.preventDefault()
    let nombre = document.querySelector('#nombre')

    if (nombre.value == ""){
        alert("Digite el nombre")
        return false
    }
})