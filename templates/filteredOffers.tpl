<div class="row">
    <div class="col-md-12 ml-3 mb-2  product-shower-separator ">
        <div class="row">
            <div class="col-md-3 ml-4 p-2 category-indicator">
                <span>{$categoryName}</span>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 product-shower ">  
            {foreach from=$products item=product}
            <div class="product-box m-3 p-2 ">
                <h2>
                    {$product["nombre"]}
                </h2>
                <div>
                    <p>{$product["descripcion"]}</p>
                </div>
                <div>
                    <span>Precio: {$product["precio"]}$</span>
                </div>
                    <div>
                        <span>Descuento: {$product["descuento"]}%</span>
                    </div>
                <div>
                    {assign var="index" value=$product["id_categoria"]-1}
                    <span>{$categories[$index]["nombre"]}</span>
                </div>
            </div>
            {/foreach}    
            </div>   
        </div>         
    </div>
</div>