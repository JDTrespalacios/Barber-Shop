<div class="barra">
    <p>Hi! <?php echo $nombre ?? ''; ?></p>
    <a class="boton" href="/logout">Log Out</a>
</div>

<?php if(isset($_SESSION['admin'])){ ?>
    <div class="barra-servicios">
        <a href="/admin" class="boton">View Appointments</a>
        <a href="/servicios" class="boton">View Services</a>
        <a href="/servicios/crear" class="boton">New Service</a>
    </div>
<?php } ?>
