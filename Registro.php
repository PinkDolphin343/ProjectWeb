
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TecWeb</title>
    <link rel="preload" href="css/normalize.css" as="style">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="preload" href="css/style.css" as='style'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/normalize.css" rel="stylesheet">
    <script src="jquery-3.6.0.min.js"></script>
    <script src="js/validar.js"></script>
</head>

<body>

    <header class="header">
        <h1>Tecnologias para la web <span>2CM12</span></h1>
    </header>

    <div class=" nav-bg">
        <nav class="navegacion contenedor">
            <a href="index.html">Inicio</a>
            <a href="us.html">Nosotros</a>
            <a href="#">Ayuda</a>
            <a href="TipoLogin.html">Login</a>
        </nav>
    </div>


    <div class="hero">
        <div class="contenido-hero">
            <h2>Instituto Politecnico Nacional</h2>
            <p><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-map-pin" width="88"
                    height="88" viewBox="0 0 24 24" stroke-width="1.5" stroke="#FFC107" fill="none"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" />
                    <circle cx="12" cy="11" r="3" />
                    <path d="M17.657 16.657L13.414 20.9a1.998 1.998 0 0 1 -2.827 0l-4.244-4.243a8 8 0 1 1 11.314 0z" />
                </svg>CDMX, Zacatenco</p>

            <a class="boton" href="#contacto">Contactar</a>
        </div>
    </div>

    <div class="contenedor sombra">





        <div id="contacto" class="contacto">
            <h2>Contacto</h2>
            <form class="formulario" id="frmajax" action="usinfo.php" method="post" onsubmit="return validar();">
                <fieldset>


                    <legend>Identidad</legend>

                    <div class="contenedor-campos">
                        <div class="campo">
                            <label for="boleta">No. de boleta</label>

                            <input type="text" name="boleta" placeholder="Numero de boleta" id="boleta">
                        </div>
                        <div class="campo">
                            <label for="nombre">Nombre</label>

                            <input type="text" name="nombre" placeholder="Nombre" id="nombre">
                        </div>
                        <div class="campo">
                            <label for="apellidop">Apellido paterno</label>

                            <input type="text" name="apellidop" placeholder="Apellido paterno" id="apellidop">
                        </div>
                        <div class="campo">
                            <label for="apellidom">Apellido materno</label>

                            <input type="text" name="apellidom" placeholder="Apellido paterno" id="apellidom">
                        </div>
                        <div class="campo">
                            <label for="fechanac">Fecha de nacimiento</label>

                            <input type="date" name="fechanac" id="fechanac">
                        </div>
                        <div class="campo w-100">
                            <label for="curp">CURP</label>

                            <input type="text" name="curp" placeholder="CURP" id="curp">
                        </div>

                    </div>
                    <!--.contenedor-campos-->
                </fieldset>
                <fieldset>
                    <legend>Contacto</legend>

                    <div class="contenedor-campos">
                        <div class="campo">
                            <label for="Calle">Calle</label>

                            <input type="text" name="Calle" placeholder="Calle" id="Calle">
                        </div>
                        <div class="campo">
                            <label for="numcalle">Numero</label>

                            <input type="tel" name="numcalle" placeholder="Numero de Calle" id="numcalle">
                        </div>
                        <div class="campo">
                            <label for="col">Colonia</label>

                            <input type="text" name="col" placeholder="Colonia" id="col">
                        </div>
                        <div class="campo">
                            <label for="alcaldia">Alcaldia</label>

                            <select id="alcaldia" name="alcaldia" placeholder="alcaldia">
                                <option value="">Selecciona una opcion </option>

                                <option>Alvaro Obregon </option>
                                <option>Azcapotzalco</option>
                                <option>Benito Juarez</option>
                                <option>Coyoacan</option>
                                <option>Cuajimalpa de Morelos</option>
                                <option>Cuauhtemoc</option>
                                <option>Gustavo A. Madero</option>
                                <option>Iztacalco</option>
                                <option>Iztapalapa</option>
                                <option>Magdalena Contreras</option>
                                <option>Miguel Hidalgo</option>
                                <option>Milpa Alta</option>
                                <option>Tlhuac</option>
                                <option>Tlalpan</option>
                                <option>Xochimilco</option>


                            </select>
                        </div>
                        <div class="campo">
                            <label for="cp">Codigo Postal</label>

                            <input type="tel" name="cp" placeholder="CP" id="cp">
                        </div>
                        <div class="campo">
                            <label for="tel">Telefono</label>

                            <input type="tel" name="tel" placeholder="Telefono" id="tel">
                        </div>
                        <div class="campo w-100">
                            <label for="mail">Email</label>

                            <input type="mail" name="email" placeholder="Email" id="email">
                        </div>


                </fieldset>

                <fieldset>
                    <legend>Procedencia</legend>

                    <div class="contenedor-campos">
                        <div class="campo w-100">
                            <label for="esc">Escuela Procedencia</label>

                            <select id="esc" name="esc" placeholder="Escuela">
                                <option value="">Selecciona una opcion </option>
                                <option value="CECyT NUM. 1 GONZALO VAZQUEZ VELA">CECyT NÚM. 1 “GONZALO VÁZQUEZ VELA”</option>
                                <option value="CECyT NÚM. 2 MIGUEL BERNARD PERALES">CECyT NÚM. 2 "MIGUEL BERNARD PERALES"</option>
                                <option value="CECyT NÚM. 3 ESTANISLAO RAMÍREZ RUIZ">CECyT NÚM. 3 "ESTANISLAO RAMÍREZ RUIZ"</option>
                                <option value="CECyT NÚM. 4 LAZARO CARDENAS DEL RIO">CECyT NÚM. 4 "LÁZARO CÁRDENAS DEL RÍO"</option>
                                <option value="CECyT NÚM. 5 BENITO JUAREZ GARCIA">CECyT NÚM. 5 "BENITO JUÁREZ GARCÍA"</option>
                                <option value="CECyT NÚM. 6 MIGUEL OTHÓN DE MENDIZABAL">CECyT NÚM. 6 "MIGUEL OTHÓN DE MENDIZÁBAL"</option>
                                <option value="CECyT NÚM. 7 CUAUHTEMOC">CECyT NÚM. 7 "CUAUHTÉMOC"</option>
                                <option value="CECyT NÚM. 8 NARCISO BASSOLS GARCIA">CECyT NÚM. 8 "NARCISO BASSOLS GARCÍA"</option>
                                <option value="CECyT NÚM. 9 JUAN DE DIOS BATIZ PAREDES">CECyT NÚM. 9 "JUAN DE DIOS BÁTIZ PAREDES"</option>
                                <option value="CECyT NÚM. 10 CARLOS VALLEJO MARQUEZ">CECyT NÚM. 10 “CARLOS VALLEJO MÁRQUEZ”</option>
                                <option value="CECyT NÚM. 11 WILFRIDO MASSIEU PEREZ">CECyT NÚM. 11 "WILFRIDO MASSIEU PÉREZ"</option>
                                <option value="CECyT NÚM. 12 JOSE MA. MORELOS Y PAVON">CECyT NÚM. 12 "JOSÉ MA. MORELOS Y PAVÓN"</option>
                                <option value="CECyT NÚM. 13 RICARDO FLORES MAGON">CECyT NÚM. 13 "RICARDO FLORES MAGÓN"</option>
                                <option value="CECyT NÚM. 14 LUIS ENRIQUE ERRO SOLER">CECyT NÚM. 14 "LUIS ENRIQUE ERRO SOLER"</option>
                                <option value="CECyT NÚM. 15 DIODORO ANTUNEZ ECHEGARAY">CECyT NÚM. 15 "DIÓDORO ANTÚNEZ ECHEGARAY"</option>
                                <option value="CET 1 Walter Cross Buchanan">CET 1 "Walter Cross Buchanan"</option>
                                <option value="OTRO">OTRO</option>
                            </select>
                        </div>
                        <div class="campo">
                            <label for="estadoR">Entidad federativa</label>

                            <select id="estadoR" name="estadoR" placeholder="Estado de la Republica">
                                <option value="Aguascalientes">Aguascalientes</option>
                                <option value="Baja California">Baja California</option>
                                <option value="Baja California Sur">Baja California Sur</option>
                                <option value="Campeche">Campeche</option>
                                <option value="Coahuila">Coahuila</option>
                                <option value="Colima">Colima</option>
                                <option value="Chiapas">Chiapas</option>
                                <option value="Chihuahua">Chihuahua</option>
                                <option value="Ciudad de Mexico">Ciudad de Mexico</option>
                                <option value="Durango">Durango</option>
                                <option value="Estado de Mexico">Estado de Mexico</option>
                                <option value="Guanajuato">Guanajuato</option>
                                <option value="Guerrero">Guerrero</option>
                                <option value="Hidalgo">Hidalgo</option>
                                <option value="Jalisco">Jalisco</option>
                                <option value="Michoacan">Michoacan</option>
                                <option value="Morelos">Morelos</option>
                                <option value="Nayarit">Nayarit</option>
                                <option value="Nuevo Leon">Nuevo León</option>
                                <option value="Oaxaca">Oaxaca</option>
                                <option value="Puebla">Puebla</option>
                                <option value="Queretaro">Querétaro</option>
                                <option value="Quintana Roo">Quintana Roo</option>
                                <option value="San Luis Potosi">San Luis Potosí</option>
                                <option value="Sinaloa">Sinaloa</option>
                                <option value="Sonora">Sonora</option>
                                <option value="Tabasco">Tabasco</option>
                                <option value="Tamaulipas">Tamaulipas</option>
                                <option value="Tlaxcala">Tlaxcala</option>
                                <option value="Veracruz">Veracruz</option>
                                <option value="Yucatan">Yucatán</option>
                                <option value="Zacatecas">Zacatecas</option>
                            </select>
                        </div>
                        <div class="campo">
                            <span id="a2" ><label for="nomesc">Nombre de la escuela</label>

                            <input type="text" name="nomesc" placeholder="Nombre de la escuela de procedencia"
                                id="nomesc"></span>
                        </div>
                        <div class="campo">
                            <label for="prom">Promedio</label>

                            <input type="number" name="prom" placeholder="Promedio" id="prom" min="0" max="10" value="0"
                                step="0.1">
                        </div>

                </fieldset>
                <div class="final">


                    <div class="enviar">
                        <input  id="btnguardar" class="boton" type="submit"  value="Enviar">
                    </div>
                    <div class="enviar">
                        <input class="boton" type="reset" value="Borrar">
                    </div>
                </div>

            </form>
        </div>
    </div>

    <footer class="footer">
        <p>Todos los derechos reservados.Equipo 9 Tecnologias para la web 2CM12</p>
    </footer>

</body>


<script>
    let span =document.getElementById("a2");
    span.style.display = "none";
    let valor = document.getElementById("esc");
    valor.addEventListener("change",mostrar);
        function mostrar(){
            let valor2 = valor.value;
            if (valor2 != "OTRO"){
                span.style.display = "none";

            }
            else{
                span.style.display = "block"
            }
        }

</script>

</html>
