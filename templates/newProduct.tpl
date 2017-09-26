{include file="header.tpl"}
<div class="container">
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <h1>Agregar Producto</h1>
      <form>
        <div class="form-group">
          <label for="category-name">Nombre del Producto:</label>
          <input type="text" class="form-control" id="category-name" placeholder="Nombre del producto">
          <label for="category-name">Precio:</label>
          <input type="text" class="form-control" id="category-name" placeholder="$$$">
          <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Categoria
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
              <button class="dropdown-item" type="button">Articulos de Limpieza</button>
              <button class="dropdown-item" type="button">Comestibles</button>
              <button class="dropdown-item" type="button">Bebidas</button>
            </div>
          </div>
          <label for="category-name">Descuento?</label>
          <input type="text" class="form-control" id="category-name" placeholder="Aplique el descuento si este posee.">
        </div>
        <button type="submit" class="btn btn-default">Agregar Producto</button>
      </form>
    </div>
  </div>
</div>

{include file="footer.tpl"}
