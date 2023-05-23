<h1 class="nombre-pagina">Create Account</h1>
<p class="descripcion-pagina">Fill Out the Form</p>

<?php 
    include_once __DIR__ . "/../templates/alertas.php";
?>

<form class="formulario" method="POST" action="/create-account">
    <div class="campo">
        <label for="nombre">Name</label>
        <input 
            type="text"
            id="nombre"
            name="nombre"
            placeholder="Your name"
            value="<?php echo s($usuario->nombre); ?>"
        >
    </div>

    <div class="campo">
        <label for="apellido">Last Name</label>
        <input 
            type="text"
            id="apellido"
            name="apellido"
            placeholder="Your last name"
            value="<?php echo s($usuario->apellido); ?>"
        >
    </div>

    <div class="campo">
        <label for="telefono">Phone</label>
        <input 
            type="tel"
            id="telefono"
            name="telefono"
            placeholder="Your phone number"
            value="<?php echo s($usuario->telefono); ?>"
        >
    </div>

    <div class="campo">
        <label for="email">E-mail</label>
        <input 
            type="email"
            id="email"
            name="email"
            placeholder="Your e-mail"
            value="<?php echo s($usuario->email); ?>"
        >
    </div>

    <div class="campo">
        <label for="password">Password</label>
        <input 
            type="password"
            id="password"
            name="password"
            placeholder="Your password"
        >
    </div>

    <input type="submit" class="boton" value="Create Account">
</form>

<div class="acciones">
    <a href="/">Already have an account? Login Now!</a>
    <a href="/forgot">Forgot your password?</a>
</div>