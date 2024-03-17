@extends('Comun')

@section('estilos')
    <link rel="stylesheet" href="/css/cotizaciones_Style.css">
@endsection

@section('ContenidoPrincipal')
<main>
        <section class="superior">
            <h1>COTIZACIONES</h1>
            <p>Contesta el siguiente formulario para tener una cotización personalizada para tu mueble deseado.</p>
        </section>
        <section class="contenedor_formulario">
            <h4>Características del mueble</h4>
            <form action="">
                <div class="categoria_muebles">
                    <label for="opciones_categorias">Elige la categoría de tu mueble</label>
                    <Select id="opciones_categorias">
                        <option value="1">Sala</option>
                        <option value="2">Comedor</option>
                        <option value="3">Recamara</option>
                        <option value="4">Cocina</option>
                        <option value="5">Baño</option>
                        <option value="6">Oficina</option>
                    </Select>
                </div>

                <div class="contenedor_dimensiones_mueble">
                    <label for="alto">Define las dimensiones (metros)</label>
                    <div class="dimensiones_muebles">
                        <input class="dimensiones" type="number" placeholder="Alto" id="alto" min="0">
                        <input class="dimensiones" type="number" placeholder="Ancho" min="0">
                        <input class="dimensiones" type="number" placeholder="Largo" min="0">
                    </div>
                </div>

                <div class="material">
                    <label for="opciones_materiales">Elige el material de tu mueble</label>
                    <Select id="materiales_muebles">
                        <option value="1">Bambú</option>
                        <option value="2">Corcho</option>
                        <option value="3">Madera maciza</option>
                        <option value="4">Metal</option>
                        <option value="5">Plástico</option>
                    </Select>
                </div>

                <div class="colores">
                    <label for="opciones_colores">Elige el color de tu mueble</label>
                    <Select id="colores_muebles">
                        <option value="1">Blanco</option>
                        <option value="2">Negro</option>
                        <option value="3">Cáfe</option>
                        <option value="4">Gris</option>
                    </Select>
                </div>

                <div class="descripcion">
                    <label for="descripcion_mueble">Descripción</label>
                    <textarea name="" id="descripcion_mueble" cols="30" rows="10"
                        placeholder="Describe tu mueble deseado "></textarea>
                </div>

                <div class="imagen_referencia">
                    <label for="">Imágen de referencia</label>
                    <input type="file" id="referencia">
                </div>
                <br>
                <hr>
                <h4>Información personal</h4>
                <label for="nombre">Nombre(s)</label>
                <input class="txt_personal" type="text" id="nombre">

                <label for="paterno">Apellido paterno</label>
                <input class="txt_personal" type="text" id="paterno">

                <label for="materno">Apellido materno</label>
                <input class="txt_personal" type="text" id="materno">
                
                <label for="correo">Correo</label>
                <input class="txt_personal" type="email" id="correo">

                <label for="telefono">Teléfono</label>
                <input class="txt_personal" type="tel" id="telefono">
                <br>
                <hr>

                <!-- Espacio disponible en hogar -->
                <h4>Características del espacio</h4>
                <p>Defina las dimensiones del espacio en el que colocará su mueble</p>
                <input class="dimensiones" type="number" id="alto_espacio" min="0" placeholder="Alto">

                <input class="dimensiones" type="number" id="ancho_espacio" min="0" placeholder="Ancho">

                <input class="dimensiones" type="number" id="largo_espacio" min="0" placeholder="Largo">

                <label for="imagen_espacio">Imagen del espacio (espacio en el que colocarás tu mueble)</label> 
                <input class="img_espacio" type="file" id="img_espacio">

                <br>

                <div class="contenedor_btn_enviar">
                    <button class="btn_Enviar"  ><span>Enviar</span></button>
                </div>
            </form>
        </section>
    </main>
@endsection