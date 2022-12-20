<?php 
    include('class/class.produtos.php'); 
    include('view/header.php');
    function get_image($item){
        if(array_key_exists('default_image', $item )){
            if($item['default_image'] != NULL){
                return $item['default_image'];
            }
        }
        if(array_key_exists('cores', $item)){
            if(count($item['cores']) > 0){
                if(array_key_exists('image', $item['cores'][0])){
                    return $item['cores'][0]['image'];
                }
            }
        }
        return "resource/img/erro.jpg";
    }
    function onclickConstruct($name){
        $name_format = valueFormat($name);
        $name_format = "ajaxProduct('".$name_format."')";
        $name_format = 'onclick="'.$name_format.'"';
        return $name_format;
    }
?>
<div class="container-fluid" id="lista_produtos">
    <div class="row centralizado">
        <div class="container-fluid">
            <div class="row mt-3 centralizado">
                <?php 
                    foreach ($lista_produtos as $item) {
                        $html = "<div class='col-md-4 mt-3 mb-3'>";
                        $html .= "<div class='panel panel-primary'>";
                        $html .= "<div class='panel-heading text-center text-capitalize'><h3>".$item['nome']."</h3></div>";
                        $html .= "<div class='panel-body'><img width='250' height='250' src='" . get_image($item) . "' class='rounded' class='img-responsive'";
                        $html .= "style='width:100%' alt='Image'></div>";
                        $html .= "<div class='panel-footer'>";
                        $html .= "<div class='d-grid gap-2'>";
                        $html .= "<a class='btn' style='font-size: 2rem; color: #780000' ".onclickConstruct($item['nome']).">DETALHES</a>";
                        $html .= "</div>";
                        $html .= "</div>";
                        $html .=  "</div>";
                        $html .= "</div>";
                        echo $html;
                    }
                ?>
            </div>
        </div>
        <br>
    </div>
</div>
<div class="container" id="this_produtos" style="display:none"></div>

<?php 
    include('view/components/thanks.php');
    include('view/components/modal.php');
?>


<div class="position-relative" id="loading" style="height:720px; display:none">
    <div class="position-absolute top-50 start-50 translate-middle">
        <div class="spinner-border text-danger " role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>
</div>
<?php
    include('view/components/includes.php');
    include('view/body.php');
?>