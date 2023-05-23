<div class="campo">
    <label for="nombre">Name</label>
    <input 
        type="text"
        id="nombre"
        name="nombre"
        placeholder="service name"
        value="<?php echo $servicio->nombre; ?>"
    >
</div>

<div class="campo">
    <label for="precio">Price</label>
    <input 
        type="number"
        id="precio"
        name="precio"
        placeholder="price"
        value="<?php echo $servicio->precio; ?>"
    >
</div>