<h1 class="nombre-pagina">Reset Password</h1>
<p class="descripcion-pagina">Please enter your new password in the fields below</p>

<?php 
    include_once __DIR__ . "/../templates/alertas.php";
?>

<?php if($error) return; ?>

<form class="formulario" method="POST">
    <div class="campo">
        <label for="password">Password</label>
        <input 
            type="password"
            id="password"
            name="password"
            placeholder="newpassword"
        >
    </div>
    <input type="submit" class="boton" value="Submit">

</form>

<div class="acciones">
    <a href="/">Already have an account? Login Now!</a>
    <a href="/create-account">Don't have an account? Sign Up Now!</a>
</div>