const btnEnviar = document.querySelector('.formulario input[type=submit]');
console.log(btnEnviar);
btnEnviar.addEventListener('submit', function(evento) {
console.log(evento);
evento.preventDefault();
})
    
    const datos = {
        boleta: '',
        nombre: '',
        AP: '',
        AM: '',
        fechanac:'',
        curp: '',

        calle:'',
        numcalle:'',
        colonia:'',
        alcaldia:'',
        cp:'',
        tel: '',
        email: '',

        esc: '',
        estadoR: '',
        nomesc:'',
        prom:'',

    }
    
    // submit
    const formulario = document.querySelector('.formulario');
    
    formulario.addEventListener('submit',e=> {
        e.preventDefault();
    
        console.log(e);
    
        console.log('Di click y la página ya no recarga');
    
        console.log(datos);
    
        // Validar el Formulario...
    
        const { boleta ,nombre, AP, AM, fechanac,curp,calle,nunmcalle,colonia,alcaldia,cp,tel,email,esc,estadoR,nomesc,prom} = datos;
    
        if(boleta === '' || nombre === '' || AP==='' || AM==='' || fechanac==='' || curp==='' || calle==='' || nunmcalle || colonia==='' || alcaldia==='' || cp==='' || tel==='' || email==='' || esc==='' || estadoR==='' || nomesc==='' || prom===''  ) {
            console.log('Al menos un campo esta vacio');
            mostrarError('Todos los campos son obligatorios');
            return; // Detiene la ejecución de esta función
        }
    
        console.log('Todo bien...')
    
        mostrarMensaje('Mensaje enviado correctamente');
    });
    
    
    
    

    
    // Eventos de los Inputs...

    //Identidad//
    const boleta = document.querySelector('#boleta');
    const nombre = document.querySelector('#nombre');
    const AP = document.querySelector('#apellidop');
    const AM = document.querySelector('#apellidom');
    const fechanac = document.querySelector('#fechanac');
    const curp =document.querySelector('#curp');

    //Contacto//
    const calle = document.querySelector('#Calle');
    const numcalle = document.querySelector('#numcalle');
    const colonia = document.querySelector('#Col');
    const alcaldia = document.querySelector("alcaldia");
    const cp = document.querySelector('#cp');
    const tel = document.querySelector('#tel');
    const email = document.querySelector('#email');

    //Procedencia//
    const esc = document.querySelector('#esc');
    const estadoR = document.querySelector('#estadoR');
    const nomesc = document.querySelector('#nomesc');
    const prom = document.querySelector('#prom');
    
    
    nombre.addEventListener('input', leerTexto);
    email.addEventListener('input', leerTexto);
    
    
    function leerTexto(e) {
        // console.log(e);
        // console.log(e.target.value);
    
        datos[e.target.id] = e.target.value;
    
        console.log(datos);
    }
    
    