function validar (){

    var n1,boletan,app,amm,curp, tele, correo, expresion,boletaxs,curpsx, cpn,coln,callen,callenum,letra,esc;
   //identidad
   n1 = document.getElementById("nombre").value;
   boletan = document.getElementById("boleta").value;
   app = document.getElementById("apellidop").value;
   amm = document.getElementById("apellidom").value;
   curp= document.getElementById("curp").value;
    //contacto
    tele = document.getElementById("tel").value;
    correo = document.getElementById("email").value;
    expresion = /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+.[a-zA-Z0-9-.]+$/;
    boletaxs = /^[PP-PE-pp-pe0-9]+\d{8}$/;
    curpsx= /^[A-Z]{4}\d{6}(H|M)[A-Z]{2}[A-Z0-9]{5}$/;
    cpn = document.getElementById("cp").value;
    coln = document.getElementById("col").value;
    
    callen = document.getElementById("Calle").value;
    callenum = document.getElementById("numcalle").value;
    letra =  /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
    //Procedencia
    esc = document.getElementById("nomesc").value;
    //login
    //usuario = document.getElementById("user").value;
   //password = document.getElementById("pass").value;




//identidad
    if (n1.length<=1){
        alert("el nombre es muy corto");
        return false;
    
    }
    else if(boletan.length>11){
        alert("El boleta es muy largo o no existe");
        return false;
    } 
    else if (!boletaxs.test(boletan)){
        alert("la boleta no es valido");
        return false;
    }
   else if (app.length<=1)
   {
       alert("El apellido Paterno es muy Corto");
       return false;
   }
   else if (amm.length<=1)
   {
       alert("El apellido Materno es muy Corto");
       return false;
   }
   else if (!curpsx.test(curp))
   {
       alert("El curp no tiene formato");
       return false;
   }
   

   //Contacto//
    else if(tele.length>14){
        alert("El telefono es muy largo o no existe");
        return false;
    } 
    else if (isNaN(tele)){
        alert("El telefono ingresado no es un numero");
        return false;
    }
    else if(correo.length>50){
        alert("Correo muy largo");
        return false;

    }
    else if (!expresion.test(correo)){
        alert("el correo no es valido");
        return false;
    }
    else if(cpn.length>5){
        alert("El CP es muy largo o no existe");
        return false;
    } 
    
    else if (isNaN(cpn)){
        alert("El telefono ingresado no es un numero");
        return false;
    }
    else if(callen.length>70){
        alert("La calle es muy largo o no existe");
        return false;
    } 
    else if(coln.length>60){
        alert("La colonia es muy largo o no existe");
        return false;
    } 
    else if (isNaN(callenum)){
        alert("El numero de calle ingresado no es un numero");
        return false;
    }
    else if (!letra.test(callen)){
        alert("La calle no es  valida");
        return false;
    }
    else if (!letra.test(coln)){
        alert("La colonia no es valido");
        return false;
    }



    //Procedencia//
    else if (!letra.test(esc)){
        alert("La escuela no es valido");
        return false;
    } 
    else if(esc.length>80){
        alert("La escuela es muy largo o no existe");
        return false;
    } 
    //login
    


}






const btnEnviar = document.querySelector('.formulario input[type=submit]');
console.log(btnEnviar);
btnEnviar.addEventListener('submit', function(evento) {
console.log(evento);
evento.preventDefault();
console.log("Enviando Formulario");
})

const expresiones = {
    nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
}

    
    const datos = {
        boleta: '',
        nombre: '',
        apellidop: '',
        apellidom: '',
        fechanac:'',
        curp: '',

        Calle:'',
        numcalle:'',
        col:'',
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
    
        const { boleta ,nombre, apellidop, apellidom, fechanac,curp,Calle,nunmcalle,col,alcaldia,cp,tel,email,esc,estadoR,nomesc,prom} = datos;
    
        if(boleta === '' || nombre === '' || apellidop==='' || apellidom==='' || fechanac==='' || curp==='' || Calle==='' || nunmcalle || col==='' || alcaldia==='' || cp==='' || tel==='' || email==='' || esc==='' || estadoR==='' || nomesc==='' || prom==='' ) {
            console.log('Al menos un campo esta vacio');
            mostrarError('Todos los campos son obligatorios');
            return; // Detiene la ejecución de esta función
        }
        console.log('Todo bien...');
        
        
        var datos2 = $('#frmajax').serialize();
            alert(datos2);
            $.ajax({
                type: "POST",
                url: "insertar.php",
                data: datos2,
                success: function (r) {
                    if (r == 1) {
                        alert("Agregado con exito");
                    } else if (r == 2) {
                        alert("Esta boleta ya está registrada");
                    } else {
                        alert("Fallo el server");
                    } 
                }
            });

            return false;
    });







    // FUNCIONES /////////////////////////////////////
    function mostrarError(mensaje) {
        const alerta = document.createElement('p');
        alerta.textContent = mensaje;
        alerta.classList.add('error');

        formulario.appendChild(alerta);

        setTimeout(() => {
            alerta.remove();
        }, 3000);
    }
    
    function mostrarMensaje(mensaje) {
        const alerta = document.createElement('p');
        alerta.textContent = mensaje;
        alerta.classList.add('correcto');
        formulario.appendChild(alerta);
    
        setTimeout(() => {
            alerta.remove();
        }, 3000);
    }
    ///////////////////////////////////////

    
    // Eventos de los Inputs...

    //Identidad//
    const boleta = document.querySelector('#boleta');
    const nombre = document.querySelector('#nombre');
    const apellidop = document.querySelector('#apellidop');
    const apellidom= document.querySelector('#apellidom');
    const fechanac = document.querySelector('#fechanac');
    const curp =document.querySelector('#curp');

    //Contacto//
    const Calle = document.querySelector('#Calle');
    const numcalle = document.querySelector('#numcalle');
    const col = document.querySelector('#col');
    const alcaldia = document.querySelector("#alcaldia");
    const cp = document.querySelector('#cp');
    const tel = document.querySelector('#tel');
    const email = document.querySelector('#email');

    //Procedencia//
    const esc = document.querySelector('#esc');
    const estadoR = document.querySelector('#estadoR');
    const nomesc = document.querySelector('#nomesc');
    const prom = document.querySelector('#prom');
    
    boleta.addEventListener('input',leerTexto);
    nombre.addEventListener('input', leerTexto);
    apellidop.addEventListener('input',leerTexto);
    apellidom.addEventListener('input',leerTexto);
    fechanac.addEventListener('input',leerTexto);
    curp.addEventListener('input',leerTexto);

    Calle.addEventListener('input',leerTexto);
    numcalle.addEventListener('input',leerTexto);
    col.addEventListener('input',leerTexto);
    alcaldia.addEventListener('input',leerTexto);
    cp.addEventListener('input',leerTexto);
    tel.addEventListener('input',leerTexto);
    email.addEventListener('input', leerTexto);

    esc.addEventListener('input',leerTexto);
    estadoR.addEventListener('input',leerTexto);
    nomesc.addEventListener('input',leerTexto);
    prom.addEventListener('input',leerTexto);
    
    
    function leerTexto(e) {
        // console.log(e);
        // console.log(e.target.value);
    
        datos[e.target.id] = e.target.value;
    
        console.log(datos);
    }
