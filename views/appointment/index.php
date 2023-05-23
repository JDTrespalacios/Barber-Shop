<h1 class="nombre-pagina">Set Up A New Appointment</h1>
<p class="descripcion-pagina">Select your services & enter your information</p>

<?php 
    include_once __DIR__ . '/../templates/barra.php'; 
?>

<div id="app"> 
    <nav class="tabs">
        <button class="actual" type="button" data-paso="1">Services</button>
        <button type="button" data-paso="2">Information</button>
        <button type="button" data-paso="3">Summary</button>
    </nav>


    <div id="paso-1" class="seccion">
        <h2>Services</h2>
        <p class="text-center">Select your services</p>
        <div id="servicios" class="listado-servicios"></div>
    </div>
    <div id="paso-2" class="seccion">
        <h2>Information & Appointment</h2>
        <p class="text-center">Enter your information & appointment date</p>

        <form class="formulario">
            <div class="campo">
                <label for="nombre">Name</label>
                <input 
                    id="nombre"
                    type="text"
                    placeholder="Your name"
                    value=" <?php echo $nombre; ?>"
                    disabled
                >
            </div>

            <div class="campo">
                <label for="fecha">Date</label>
                <input 
                    id="fecha"
                    type="date"
                    min="<?php echo date('Y-m-d'); ?>"
                >
            </div>

            <div class="campo">
                <label for="hora">Time</label>
                <input 
                    id="hora"
                    type="time"
                >
            </div>
            <input type="hidden" id="id" value="<?php echo $id; ?>">
        </form>
    </div>
    <div id="paso-3" class="seccion contenido-resumen">
        <h2>Summary</h2>
        <p class="text-center">Check the information of your appointment</p>
    </div>

    <div class="paginacion">
        <button
            id="anterior"
            class="boton"
        >&laquo; Previous</button>

        <button
            id="siguiente"
            class="boton"
        >Next &raquo;</button>
    </div>
</div>

<?php 
    $script = "
        <link href='https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css' rel='stylesheet'>
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js'></script>
        <script src='build/js/app.js'></script>
    ";
?>