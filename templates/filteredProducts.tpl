<div class="row">
    <div class="col-md-12 product-shower ml-3 product-shower-separator">
        {$categoryName}
        {foreach from=$products item=product}
        <div class="product-box m-3 p-2">
            <h2>
                {$product["nombre"]}
            </h2>
            <div>
                <p>{$product["descripcion"]}</p>
            </div>
            <div>
                <span>Precio: {$product["precio"]}$</span>
            </div>
            {if {$product["descuento"] > 0}}
                <div>
                    <span>Descuento: {$product["descuento"]}%</span>
                </div>
            {/if}
            <div>
                {assign var="index" value=$product["id_categoria"]-1}
                <span>{$categories[$index]["nombre"]}</span>
            </div>
        </div>
            
        {/foreach}    
    </div>
</div>