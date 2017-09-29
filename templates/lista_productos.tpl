<ul>
  {foreach from=$products item=product}
      <li>{$product['nombre']}
        <a href="deleteProduct?id={$product['id']}" class="btn btn-danger">
          <span class="glyphicon glyphicon-trash"></span>
        </a>
      </li>
  {/foreach}
</ul>
