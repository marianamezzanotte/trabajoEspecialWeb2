<ul>
  {foreach from=$categories item=category}
      <li>{$category['nombre']}
        <a href="deleteCategory?id={$category['id']}" class="btn-default">
          <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
        </a>
      </li>
  {/foreach}
</ul>
