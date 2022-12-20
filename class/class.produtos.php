<?php
function return_colour($image, $colour){
    return array(
        "colour" => $colour,
        "image" => $image
        
    );
}
// espaco vai ser substituido por + que nem no google
function valueFormat($string_no_format){
    return str_replace(' ','+',$string_no_format);
}

$lista_produtos = array(
    array(
        "nome" => "coberdron sherpa",
        "tipo" => "Cama",
        "desc" => "Edredom Coberdrom Sherpa Cobertor Casal Queen Grosso Cores
        COBERDROM/EDREDOM MANTA E SHERPA (IMITA PELE DE CARNEIRO) SOFT FELPUDOContém:01 Edredom Dupla Face Casal Queen 2,40m x 2,20mEste Coberdrom (mistura de edredom e cobertor) contém uma face cobertor de manta e outra em tecido de Sherpa macio peludo que imita pele de CarneiroÉ um produto que alia os conceitos de cobertor e edredom, trazendo o melhor de cada um deles em uma única peça, super versátil, o lado superior é feito em tecido dos cobertores de manta macio, trazendo conforto e maciez extrema. Já o lado inferior é feito em um tecido em manta extremamente macio e suave. A composição de cores torna essa peça perfeita para deixar seu quarto muito mais bonito, elegante e sofisticado. Em tamanho único, é compatível com camas em tamanho Casal e Queen. Ideal para tornar sua cama ainda mais aconchegante e aquecida em noites de frio mais intenso.",
        "default_image" => "resource/img/sherpha (1).jpeg",
        "cores" => array(
            return_colour("resource/img/sherpha (2).jpeg", "fc2003"), 
            return_colour("resource/img/sherpha (3).jpeg", "035efc"), 
            return_colour("resource/img/sherpha (4).jpeg", "270d63")
        )
    ),
    array(
        "nome" => "Colcha petwork ultra-sonic",
        "tipo" => "Cama",
        "desc" => "Realce Premium Reunindo o que há de mais belo e sofisticado para vestir seu quarto com muito requinte e bom gosto. A diversidade dos temas busca trazer ao ambiente uma combinação elegante de cores e estampas. Fabricado em tecido microfibra oferece muita maciez e conforto. Contém: 01 - Colcha Casal Patchwork Ultrasonic 02 - Porta Travesseiros * Dupla Face * Acabamento com Viés Ondulado Medidas: Colcha: 2,20m x 2,40m Porta Travesseiro: 70cm x 50cm Composição: 100% Poliéster Linha: Realce Premium Marca: Sultan Instruções de lavagem: Lavar à temperatura máxima de 30°C Não usar alvejante à base de cloro Proibido usar secadora Pendurar na vertical sem torcer Passar à temperatura máxima de 110°C Não limpar à seco Limpeza a úmido profissional em processo suave.",
        "default_image" => "resource/img/petwork (1).jpeg",
        "cores" => array(
            return_colour("resource/img/petwork (1).jpeg", "4a050d"), 
            return_colour("resource/img/petwork 2.jpg", "127fa1"), 
            return_colour("resource/img/petwork (3).jpeg", "ad7636"), 
            return_colour("resource/img/petwork 4 (1).jpg", "ada7a0")
        )
    ),
    array(
        "nome" => "Edredom 2 Fronhas- Casal, Queen e King",
        "tipo" => "Cama",
        "desc" => "Composto por:
        1 Cobre-leito Bouti de Microfibra Ultrasonic Casal - 2,20x2,40m
        2 Porta-travesseiros com abas 50x70cm
        Essa colcha é matelada com a tecnologia Ultrasonic aonde o matelassado é feito através do calor e não através de costuras/linhas.
        Cobre-leito é um Edredom Fino Matelassado.
        Produzido em Tecido 100% Microfibra de Poliéster - Enchimento 100% Poliéster - Produto com a assinatura da marca Dui Design",
        "default_image" => "resource/img/colcha (1).jpeg",
        "cores" => array(
            return_colour("resource/img/colcha (1).jpeg", "193abf"), 
            return_colour("resource/img/colcha (2).jpeg", "4b4d54"), 
            return_colour("resource/img/colcha (3).jpeg", "24c775"),
            return_colour("resource/img/colcha (4).jpeg", "f0faf5")
        )
    ),
    array(
        "nome" => "Colcha Edredom com Fronha Solteiro",
        "tipo" => "Cama",
        "desc" => "Colcha edredom micro percal peletizado 180 fios 2 peças dinossauro 180x240cm - sonhare top   o micro percal toque 180 fios é um tecido extremamente macio, possui toque peletizado e cores vibrantes. Não necessitam passar e são de fácil lavagem. Não desbotam",
        "default_image" => "resource/img/colcha_edredom_solteiro (1).jpeg",
        "cores" => array(
            return_colour("resource/img/colcha_edredom_solteiro (1).jpeg", "808a83"), 
            return_colour("resource/img/colcha_edredom_solteiro (2).jpeg", "035efc"), 
            return_colour("resource/img/colcha_edredom_solteiro (3).jpeg", "c40808"),
            return_colour("resource/img/colcha_edredom_solteiro (4).jpeg", "25e668")
        )
    ),
    array(
        "nome" => "Jogo de Banheiro",
        "tipo" => "Banheiro",
        "desc" => "Jogo de Tapete para Banheiro Classic 3 Peças Nomad Oasis   O conjunto de tapetes para banheiro linha Classic da Oasis é o jogo que estava faltando no seu banheiro. Charme, sofisticação, maciez e um toque de cor é tudo o que seu banheiro estava precisando para dar aquele toque de elegância e delicadeza, mesmo obtendo cores no seu tecido, traz a modernidade e simplicidade para seu ambiente.   Por que o jogo de banheiro da linha Classic é ideal para meu banhe.",
        "default_image" => "resource/img/jogo_de_banheiro (1).jpeg",
        "cores" => array(
            return_colour("resource/img/jogo_de_banheiro (1).jpeg", "52290a"), 
            return_colour("resource/img/jogo_de_banheiro (2).jpeg", "969da8"), 
            return_colour("resource/img/jogo_banheiro.jpg", "d1c082"),
            return_colour("resource/img/jogo_de_banheiro (4).jpeg", "800006")
        )
    ),
    array(
        "nome" => "Jogo de tapete para cozinha",
        "tipo" => "Tapete",
        "desc" => "Lindos e úteis tapetes confeccionados com fio de algodão em tear, podem ser usados nos mais variados ambientes, separados ou juntos. Estampas com cores lindas e elegantes deixarão sua cozinha maravilhosa. Escolha qual combina mais com sua decoração e dê um toque a mais para sua casa!",
        "default_image" => "resource/img/tapete_cozinha (2).jpeg",
        "cores" => array(
            return_colour("resource/img/tapete_cozinha (1).jpeg", "343536"), 
            return_colour("resource/img/tapete_cozinha (3).jpeg", "7a7c7d"), 
            return_colour("resource/img/tapete_cozinha (4).jpeg", "cc081b"),
            return_colour("resource/img/tapete_cozinha (5).jpeg", "966b0c") 
        )
    ),
    array(
        "nome" => "BULE N12 T.V",
        "tipo" => "Cozinha",
        "desc" => "Bule com Tampa de Vidro 12cm Preto Craqueado Panelar
        Para deixar sua cozinha mais moderna e estilosa a Panelar traz tradição e beleza em alumínio polido e colorido.
        Feitas com material de alta qualidade elas são perfeita para você que procura a combinação de estilo e praticidade.",
        "default_image" => "resource/img/bule.jpeg",
        "cores" => array(
            return_colour("resource/img/Bule_Pink.jpg", "d914b8"), 
            return_colour("resource/img/Bule_Verde.jpg", "14d99e"),
            return_colour("resource/img/vermelho.jpg", "c40808"),
            return_colour("resource/img/Bule_Craqueado.jpg", "292727") 
        )
    ),
    array(
        "nome" => "CHALEIRA BOLA N14 T.V ",
        "tipo" => "Cozinha",
        "desc" => "Chaleira com Tampa de Vidro 14cm Vermelho Panelar
        Para deixar sua cozinha mais moderna e estilosa a Panelar traz tradição e beleza em alumínio polido e colorido.
        Feitas com material de alta qualidade elas são perfeita para você que procura a combinação de estilo e praticidade",
        "default_image" => "resource/img/chaleira.jpeg",
        "cores" => array(
            return_colour("resource/img/Chaleira_Craqueada.jpg", "292727"), 
            return_colour("resource/img/Chaleira_Pink2.jpg", "d914b8"),
            return_colour("resource/img/Chaleira_Verde.jpg", "14d99e"),
            return_colour("resource/img/Chaleira_Vermelha.jpg", "c40808") 
        )
    ),
    array(
        "nome" => "FRIGIDEIRA NO24",
        "tipo" => "Cozinha",
        "desc" => "Frigideira de Alumínio Alta com Tampa de Vidro feita com alumínio reforçado.Panela WOK é revestida com antiaderente interna e externa, de última geração, mais resistente e fácil de limpar.Cabo de baquelite resistente ao calor.Tampa de vidro temperado, com saída para o vapor, assim você pode ver e preparar seus alimentos, escolhendo o ponto ideal de sua receita preferida.
        Ideal para Yakisoba, Moquecas, Ensopados, Farofas e frituras em geral,etc...",
        "default_image" => "resource/img/frigideira1.jpg",
        "cores" => array(
            return_colour("resource/img/frigideira_cava (1).jpeg", "d10820"), 
            return_colour("resource/img/frigideira_cava (2).jpeg", "6e6768"),
            return_colour("resource/img/frigideira_cava (3).jpeg", "8a6a2c"),
            return_colour("resource/img/FRIGIDEIRA_TV_POLIDA.jpg", "faf5f6") 
        )
    ),
    array(
        "nome" => "Cortina para cozinha",
        "tipo" => "Cortina",
        "desc" => "A modernidade, estilo e o bom gosto estão presentes nessa cortina. A Linha de Cortinas Day By Day possuem estampas que são perfeitas para deixar seu ambiente alegre, sofisticado e muito bonito. Além de sua ótima qualidade de seu tecido feito em 100% poliéster, ela é dividida em 2 partes que permite um leve e lindo franzimento.
        Contém:
        01 Cortina Day By Day
        Características Gerais:
        Altura: 1,20 m
        Largura 2,00 m
        Dividida em 2 painéis de 1,20 m
        Composição: 100% Poliéster
        lavável em máquina",
        "default_image" => "resource/img/cortina-cozinha.jpeg",
        "cores" => array(
            return_colour("resource/img/cortina-cozinha (1).jpg", "023b17"), 
            return_colour("resource/img/cortina-cozinha (2).jpg", "141414"), 
            return_colour("resource/img/cortina-cozinha (3).jpg", "990606"),
            return_colour("resource/img/cortina-cozinha (4).jpg", "634018"),
            return_colour("resource/img/cortina-cozinha (5).jpg", "061599")
        )
    ),
    array(
        "nome" => "Kit 12 Panos de Prato",
        "tipo" => "Cozinha",
        "desc" => "Jogo Kit Pano de Prato Guardanapo Grande Tecido 12 peças Estampado Cozinha
        Jogo Kit Pano de Copa Prato Guardanapo 45x80cm Algodão Estampado Grande
        
        Os Pano de Copa Prato são utencilíos indispensaveis na cozinha, estampados com diversos desenhos o kit não repetem estampas.
        3o foto do anúncio mostra a estampa que vai para o cliente.
        
        Contém: 12 unidades",
        "default_image" => "resource/img/pano de prato (2).jpeg",
        "cores" => array(
            return_colour("resource/img/pano.webp", "e3d8d8"), 
            return_colour("resource/img/pano de prato (2).jpeg", "f0e9e9"), 
            return_colour("resource/img/pano.jpg", "ffffff")
        )
    ),
    array(
        "nome" => "RISOTEIRA N32 T.V",
        "tipo" => "Cozinha",
        "desc" => "Prepare seu alimento em um caldeirão de excelente qualidade.
        Com tampa de vidro temperado que possibilita melhor visualização do cozimento.
        Material: Alumínio Grosso; Capacidade: 10 litros; Altura: 17cm;Diâmetro: 32cm; Tampa: de vidro Temperado;
        Base do Fundo: Levemente Arredondada;
        Alças: em alumínio.",
        "default_image" => "resource/img/panelao 32 (1).jpeg",
        "cores" => array(
            return_colour("resource/img/panelao 32 (1).jpeg", "0c0b0d"), 
            return_colour("resource/img/panelao 32 (2).jpeg", "b80404")
        )
    ),
    array(
        "nome" => "Tapete Sisal Sala 1.5x2.0",
        "tipo" => "Tapete",
        "desc" => "PRODUTO COMPOSTO POR
        01 TAPETE SISAL 1,50M X 2,00M
        87% POLIPROPILENO 13% POLIÉSTER
        EXCELENTE CUSTO BENEFÍCIO
        CANTONEIRAS DE AÇO
        BASE ANTIDERRAPANTE
        FÁCIL DE LAVAR
        ",
        "default_image" => "resource/img/tapete-cizal-sala (1).jpeg",
        "cores" => array(
            return_colour("resource/img/tapete-cizal-sala (1).jpeg", "4a4545"), 
            return_colour("resource/img/tapete-cizal-sala (2).jpeg", "706b6b"), 
            return_colour("resource/img/tapete-cizal-sala (3).jpeg", "5c3606")
        )
    ),
    array(
        "nome" => "Jogo De Panelas Grossa",
        "tipo" => "cozinha",
        "desc" => "As panelas em alumínio fundido cava possuem excelente qualidade, durabilidade e tem aquecimento rápido. São práticas, fáceis de manusear e limpar, além de seu design moderno. Sua alta tecnologia assegura distribuição uniforme de cal...",
        "default_image" => "resource/img/panela-cava (1).jpeg",
        "cores" => array(
            return_colour("resource/img/panela-cava (2).jpeg", "fa1125"), 
            return_colour("resource/img/panela-cava (3).jpeg", "786d6e"), 
            return_colour("resource/img/panela-cava.jpg", "634306")
        )
    ),
    array(
        "nome" => "Tapete Mink",
        "tipo" => "Tapete",
        "desc" => "Tapete Mink 1,00 x 1,50 metros é macio e possui estampas bonitas e elegantes que são perfeitas para deixar o ambiente mais aconchegante, requintado e estiloso.

        Qualidade e beleza que conferem aquele toque especial para a decoração da sua casa.
        
        Escolha o seu agora!
        ",
        "default_image" => "resource/img/mink (1).jpeg",
        "cores" => array(
            return_colour("resource/img/mink (1).jpeg", "7a0202"), 
            return_colour("resource/img/mink (2).jpeg", "e0d2ca"), 
            return_colour("resource/img/mink (3).jpeg", "663216")
        )
    ),
    array(
        "nome" => "Jogo de Lençol 4 peças",
        "tipo" => "Cama",
        "desc" => "A nova coleção de Jogo de Lençóis Casal da linha Realce Top da Sultan chegou para impressionar.
        Tecido calandrado de 180 fios, composto por 65% algodão e 35% poliéster traz conforto, aconchego e sensação de maciez proporcionando noites de sono mais tranquilas e confortáveis. Suas cores vibrantes e estampa floral deixa seu ambiente mais alegre com um toque de modernidade.",
        "default_image" => "resource/img/jogo_de_lençol (1).jpeg",
        "cores" => array(
            return_colour("resource/img/jogo_de_lençol (1).jpeg", "87070d"), 
            return_colour("resource/img/jogo_de_lençol (2).jpeg", "736b6b"), 
            return_colour("resource/img/jogo_de_lençol (3).jpeg", "c9085c")
        )
    ),
    array(
        "nome" => "Jogo de banho 5 peças",
        "tipo" => "Banho",
        "desc" => "Jogo de toalhas com toque macio e excelente absorção.
        Com cores neutras e vibrantes, deixando o seu ambiente mais elegante e sofisticado.
        Mais conforto e qualidade para o seu dia!
        
        Este jogo contém 5 peças:
        
        01 Toalha Piso (45cm x 65cm)
        02 Toalhas Rosto (49cm x 70cm)
        02 Toalhas Banho (67cm x 135cm)
        
        Rosto/Banho Características:
        
        - Alta maciez e conforto
        - Corpo liso
        - Acabamento Cotton
        - Antipilling
        - Fio Open End
        - Ótima absorção
        - Toque macio
        
        Gramatura das toalhas: 360g/m\'b2
        Tecido: 99% Algodão 1% Poliéster",
        "default_image" => "resource/img/jogo_banho.jpeg",
        "cores" => array(
            return_colour("resource/img/jogo.webp", "dbd9d9"), 
            return_colour("resource/img/joguinho (1).jpg", "801944"), 
            return_colour("resource/img/joguinho (2).jpg", "590327")
        )
    ),
    array(
        "nome" => "Fronha travesseiro",
        "tipo" => "Cama",
        "desc" => "Inove a decoração do seu quarto,com os porta travesseiros de matelassê sortidos, alegres ou sutis. Para deixar seu ambiente ainda mais charmoso e aconchegante. Esse porta travesseiro macio proporciona ao ambiente a qualidade, o conforto e variedade de cores para decorar a sua cama.Tipo: Porta Travesseiro.
        Material: Microfibra.
        Composição: 100% Poliéster.",
        "default_image" => "resource/img/fronha (1).jpg",
        "cores" => array(
            return_colour("resource/img/fronha (1).jpg", "690707"), 
            return_colour("resource/img/fronha (2).jpg", "a30f40"), 
            return_colour("resource/img/fronha (3).jpg", "e0c29b"),
            return_colour("resource/img/fronha (4).jpg", "090459")
        )
    ),
    array(
        "nome" => "Faqueiro Tramontina",
        "tipo" => "Cozinha",
        "desc" => "Encante seus amigos e familiares com o Faqueiro Tramontina Búzios em Aço Inox com Detalhe 24 Peças! Produzido totalmente em aço inox, o faqueiro além de ser resistente e durável, deixa a composição da sua mesa ainda mais especial, pois as peças que compõem o jogo possuem um lindo acabamento, garantindo um charme a mais para a refeição. As peças ainda são fáceis de limpar e podem ser lavadas na máquina de lavar louças. A escolha perfeita para saborear as melhores receitas!",
        "default_image" => "resource/img/faqueiro.jpeg",
        "cores" => array(
            return_colour("resource/img/faqueiro.jpeg", "757273"), 
            return_colour("resource/img/faqueiro.jpg", "969595") 
        )
    ),
    array(
        "nome" => "Manta para Sofá",
        "tipo" => "Sofá",
        "desc" => "Além de proteger seu sofá, a manta tem a função de decorar e trazer requinte e sofisticação a seu ambiente, nossas mantas feitas em 100% algodão é o que há de melhor no mercado, trazendo diversas opções de cores para você escolher o que melhor combina com seu sofá ou até mesmo sua cama, já que possui um tamanho de cama casal 2,20x1,80 e podendo assim ser usado como colcha.
        .",
        "default_image" => "resource/img/manta-sofá (3).jpg",
        "cores" => array(
            return_colour("resource/img/manta.jpg", "630a10"), 
            return_colour("resource/img/manta-sofá (2).jpeg", "854f09"), 
            return_colour("resource/img/manta-sofá (4).jpeg", "ebe3da")
        )
    ),
    array(
        "nome" => "Frigideira Panquequeira",
        "tipo" => "Cozinha",
        "desc" => "Essa panquequeira N ° 22 é perfeita para o preparo de deliciosas panquecas e tapiocas. Para cozinhar sempre melhor e com mais qualidade e praticidade. Uma linha completa com os melhores produtos antiaderentes, para seus alimentos não grudarem, assim facilita a limpeza e reduz o uso de gordura. Possui alças em baquelite que não aquecem, para o melhor conforto no manuseamento. Também pode ser utilizada como frigideira.
        MATERIAL: ALUMINIO
        Revestimento:  Antiaderente
        Diâmetro: 22 cm.",
        "default_image" => "resource/img/panquequeira.jpeg",
        "cores" => array(
            return_colour("resource/img/panquequeira.jpeg", "1a1818"), 
            return_colour("resource/img/panquequeira (1).jpg", "171212"), 
            return_colour("resource/img/panquequeira (2).jpg", "1a1919")
        )
    ),

);