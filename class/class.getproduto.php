<?php
include('class.produtos.php'); 

function getThisProduct($string_format, $list){ 
    $product = str_replace('+',' ',$string_format);
    $i = 0;
    while($i < count($list)-1){
        if($list[$i]['nome'] == $product){
            return $list[$i];
        }
        $i++;
    }
    return array(
        "nome" => "não encontrado",
        "tipo" => "Desconhecido",
        "desc" => "erro",
        "valor" => "0.0",
        "image1" => "resource/img/erro.jpg",
        "image2" => "resource/img/erro.jpg",
        "image3" => "resource/img/erro.jpg"
    );
}

function createHTML($this_produto){
    $html = "
        <div class='left-column'>
                <div>";
    $first = true;
    if (isset($this_produto["cores"])){
        foreach (array_reverse($this_produto['cores']) as $cor){
            $html .= '<img '. (!$first ? 'class="active"' : '').' data-image="'. $cor['colour'] .'" src="'. $cor['image'] .'" alt="">';
            $first = false;
        }
    }
    $html .= "  </div>
                </div>
                <div class='right-column'>
                    <div class='product-description'>
                        <span>{$this_produto['tipo']}</span>
                        <h1 class='text-capitalize' id='name_product'>{$this_produto['nome']}</h1>
                        <p>{$this_produto['desc']}</p>
                    </div>
                    <div class='product-configuration'>
                        <div class='product-color'>
                            <div class='color-choose'>";             
    if (isset($this_produto['cores'])) {
        foreach ($this_produto['cores'] as $cor) {
            $html .= '  <div>
                            <input data-image="' . $cor['colour'] . '" type="radio" id="' . $cor['colour'] . '" name="color" value="' . $cor['colour']  . '" checked>
                            <label  for="' . $cor['colour']  . '"><span style="background-color: #' . $cor['colour']  . '" ></span></label>
                        </div>';
        }
    }
    $html .= "  </div>
            </div>
            <div class='product-price'>
                <button type='button' class='cart-btn' data-bs-toggle='modal' data-bs-target='#exampleModal' data-bs-whatever='@mdo' onclick='modalFadein()'>Encomendar</button>
            </div>
        </div>
    </div>";
    return $html;
}

if(isset($_GET)){
    $product_name = htmlspecialchars($_GET['produto']);
    $this_product = getThisProduct($product_name, $lista_produtos);
    echo createHTML($this_product);
}