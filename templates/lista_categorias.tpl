<ul>
  {foreach from=$categories item=category}
      <li>{$category['nombre']}
        <a href="deleteCategory?id={$category['id']}" class="btn btn-danger">
          <span class="glyphicon glyphicon-trash"></span>
        </a>
      </li>
  {/foreach}
</ul>
