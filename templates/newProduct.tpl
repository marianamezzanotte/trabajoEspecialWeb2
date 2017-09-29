{include file="header.tpl"}
<div class="container">
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <h1>Agregar Producto</h1>
      <form action = "addProduct1" method="post">
        <div class="form-group">
          <label for="category-name">Nombre del Producto:</label>
          <input type="text" class="form-control" id="category-name" name = 'nombre' placeholder="Nombre del producto">
          <label for="category-name">Precio:</label>
          <input type="text" class="form-control" id="category-name"  name = 'precio' placeholder="$$$">
          <div class="form-group">
            <label for="sel1">Categorias:</label>
            <select name = 'categoria'>
              {foreach from=$categories item=category}
                  <option value= {$category['id']}>{$category['nombre']}</option>
              {/foreach}
            </select>
          </div>
          <label for="category-name">Descuento?</label>
          <input type="text" class="form-control" id="category-name" name = 'descuento' placeholder="Aplique el descuento si este posee.">
        </div>
        <button type="submit" class="btn btn-default">Agregar Producto</button>
      </form>
    </div>
  </div>
</div>

{include file="footer.tpl"}
