function validar(){
    var nombre, apellidom, apellidop,  correo, telefono, curp, cp, expresiones;
    nombre = document.getElementsByName(nombre).value;
  apellidom = document.getElementsByName(nombre).value;
  apellidop = document.getElementsByName(nombre).value;
    correo= document.getElementsByName(nombre).value;
    telefono = document.getElementsByName(nombre).value;
    curp = document.getElementsByName(nombre).value;
    cp = document.getElementsByName(nombre).value;
    expresiones = /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/;


    
    if(nombre === "" || apellidom ==="" || apellidop ==="" || correo ==="" || telefono ==="" || curp ==="" || cp ===""){
        alert("Todos los campos son obligatorios");
        return false;
    }
    else if (nombre.length>30){
        alert ("El nombre es muy largo");
        return false;
    }
    else if (apellidom.length>30){
        alert ("El apellido materno es muy largo");
        return false;
    }
    else if (apellidop.length>30){
        alert ("El apellido paterno es muy largo");
        return false;
    }
    else if (correo.length>100){
        alert ("El correo es muy largo");
        return false;
    }
    
    else if (!expresiones.test(correo)){
        alert("El correo no es valido");
        return false;
        
    }

    else if (curp.length>18){
        alert ("El curp es invalido");
        return false;
    }
    else if (telefono.length>10){
        alert ("El telefono es muy largo");
        return false;}
        else if (cp.length>5){
            alert ("El CP es muy largo");
            return false;
        }
        else if (isNaN(telefono)){
            alert ("El telefono ingresado no es un numero");
            return false;}
            else if (isNaN(cp)){
                alert ("El telefono ingresado no es un numero");
                return false;}
    

}