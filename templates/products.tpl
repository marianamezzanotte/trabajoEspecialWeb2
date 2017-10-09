
    <div class="row">
        <div class="col-md-3">       
            {foreach from=$categories item=category}
            <div class="row">
                <div class="col-md-12 mb-2">
                    <button class="btn btn-default bg-danger js-category-buttons" id="{$category['id_categoria']}">
                        {$category["nombre"]}
                    </button>
                </div>
            </div>
            {/foreach}    
        </div>
        <div class="col-md-9 js-product-list">
            
        </div>
    </div>
