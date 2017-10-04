{include file="header.tpl"}
<div class="container">
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <h1>Modificar Categoria</h1>
      <form action = "updateCategory?id={{categor}}">
        <div class="form-group">
          <label for="category-name">Nombre de Categoria:</label>
          <input type="text" class="form-control" id="category-name" name = 'nombre' value="" placeholder="Nombre de la categoria">
        </div>
        <button type="submit" class="btn btn-default">Editar Categoria</button>
      </form>
    </div>
  </div>
</div>

{include file="footer.tpl"}
