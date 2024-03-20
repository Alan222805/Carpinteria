@extends('Comun')

@section('estilos')
<link rel="stylesheet" href="/css/servicioCliente.css">
<link rel="stylesheet" href="C:\Users\Alanj\ArquitecturaDeSoftware\Proyecto_Carpinteria\Carpinteria\resources\views\Servicio_al_cliente.blade.php">
@endsection

@section('ContenidoPrincipal')
<main>
    <div class="container">
        <section id="customer-service">
            <h1>Atención al cliente</h1>
            <p>Estamos aquí para ayudarte. Si tienes preguntas o necesitas asistencia, contáctanos a través de WhatsApp para una respuesta rápida.</p>
            <h2>Horarios de atención:</h2>
            <p>Nuestro equipo está disponible para asistirte desde las 8:00 de la mañana hasta las 8:00 de la noche, todos los días.</p>
            <div class="whatsapp-container">
                <a href="https://wa.me/5652279919?text=Bienbenido al servicio al cliente" class="whatsapp-button">
                    Presiona aquí para recibir ayuda
                    <img src="/imagenes/wlogo.png" alt="WhatsApp" class="whatsapp-logo" />
                </a>
            </div>
        </section>
    </div>
</main>
@endsection