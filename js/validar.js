const btnEnviar = document.querySelector('.formulario input[type=submit]');
console.log(btnEnviar);
btnEnviar.addEventListener('submit', function(evento) {
console.log(evento);
evento.preventDefault();
})
    
    const datos = {
        nombre: '',
        email: ''
    }
    
    // submit
    const formulario = document.querySelector('.formulario');
    
    formulario.addEventListener('submit',e=> {
        e.preventDefault();
    
        console.log(e);
    
        console.log('Di click y la página ya no recarga');
    
        console.log(datos);
    
        // Validar el Formulario...
    
        const { nombre, email } = datos;
    
        if(nombre === '' || email === ''  ) {
            console.log('Al menos un campo esta vacio');
            mostrarError('Todos los campos son obligatorios');
            return; // Detiene la ejecución de esta función
        }
    
        console.log('Todo bien...')
    
        mostrarMensaje('Mensaje enviado correctamente');
    });
    
    
    
    

    
    // Eventos de los Inputs...
    const nombre = document.querySelector('#nombre');
    const email = document.querySelector('#email');
    
    
    nombre.addEventListener('input', leerTexto);
    email.addEventListener('input', leerTexto);
    
    
    function leerTexto(e) {
        // console.log(e);
        // console.log(e.target.value);
    
        datos[e.target.id] = e.target.value;
    
        console.log(datos);
    }
    
    