<h1 class="nombre-pagina">Forgot Password</h1>
<p class="descripcion-pagina">Reset your password</p>

<?php 
    include_once __DIR__ . "/../templates/alertas.php";
?>

<form class="formulario" method="POST" action="/forgot">
    <div class="campo">
        <label for="email">Email</label>
        <input 
            type="email"
            id="email"
            name="email"
            placeholder="Your email"
        >
    </div>
    <input type="submit" class="boton" value="Send Instructions">
</form>

<div class="acciones">
    <a href="/create-account">Don't have an account? Sign Up Now!</a>
    <a href="/">Already have an account? Login Now!</a>
</div>