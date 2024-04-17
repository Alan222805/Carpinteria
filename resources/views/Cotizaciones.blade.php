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
            <form action="{{ route('cotizacion.store') }}" method="POST">
                @csrf
                <div class="categoria_muebles">
                    <label for="opciones_categorias">Indica la categoría de tu mueble</label>
                    <input style="padding: 0 4px;" name="categoriaMueble" placeholder="Cocina, Habitacion, etc" type="text">
                </div>

                <div class="contenedor_dimensiones_mueble">
                    <label for="alto">Define las dimensiones (metros)</label>
                    <div class="dimensiones_muebles">
                        <input name="altoMueble" class="dimensiones" type="number" placeholder="Alto" id="alto" min="0">
                        <input name="anchoMueble" class="dimensiones" type="number" placeholder="Ancho" min="0">
                        <input name="largoMueble" class="dimensiones" type="number" placeholder="Largo" min="0">
                    </div>
                </div>

                <div class="material">
                    <label for="materialMueble">Indica el material de tu mueble</label>
                    <input name="materialMueble" type="text">
                </div>

                <div class="colores">
                    <label for="colorMueble">Indica el color de tu mueble</label>
                    <input name="colorMueble" type="text" id="colorMueble">
                </div>

                <div class="descripcion">
                    <label for="descripcion_mueble">Descripción</label>
                    <textarea name="descripcionMueble" id="descripcion_mueble" cols="30" rows="10"
                        placeholder="Describe tu mueble deseado "></textarea>
                </div>

                
                <br>
                <hr>
                <h4>Información personal</h4>
                <label for="nombre">Nombre(s)</label>
                <input name="nombreCliente" class="txt_personal" type="text" id="nombre">

                <label for="paterno">Apellido paterno</label>
                <input name="paterno" class="txt_personal" type="text" id="paterno">

                <label for="materno">Apellido materno</label>
                <input name="materno" class="txt_personal" type="text" id="materno">
                
                <label for="correo">Correo</label>
                <input name="correo" class="txt_personal" type="email" id="correo">

                <label for="telefono">Teléfono</label>
                <input name="telefono" class="txt_personal" type="tel" id="telefono">
                <br>

                <div class="contenedor_btn_enviar">
                    <button type="submit" class="btn_Enviar"  ><span>Enviar</span></button>
                </div>
            </form>
        </section>
    </main>
@endsection