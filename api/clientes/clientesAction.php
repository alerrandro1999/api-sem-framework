<?php

namespace api\clientes;

use api\url\urlActions;

class clientesAction
{
    public function listGet()
    {
        if (urlActions::pathIsset() == 'clientes'){
            if (urlActions::methodRequestSet() == 'GET') {
                if(urlActions::pathAction() == '') {echo json_encode(["dados" => "Caminho não encontrado"]);};
                if (urlActions::pathAction() == 'lista') {
                    $array = [
                        [
                        "id" => 1,
                        "nome" => 'alerrandro',
                        'idade' => 23
                        ],
                        [
                        "id" => 2,
                        "nome" => 'kelem',
                        'idade' => 19
                        ]
                    ];
        
                    if ($array) {
                        echo json_encode(["dados" => $array]);
                    }else {
                        echo json_encode(["dados" => "Não existem dados para retornar"]);
                    }
                }
        
            }
        }
    }
}

// if ($api == 'clientes'){
//     if ($method == 'GET') {
//         if($acao == '') {echo json_encode(["dados" => "Caminho não encontrado"]);};
//         if ($acao == 'lista') {
//             $array = [
//                 [
//                 "id" => 1,
//                 "nome" => 'alerrandro',
//                 'idade' => 23
//                 ],
//                 [
//                 "id" => 2,
//                 "nome" => 'kelem',
//                 'idade' => 19
//                 ]
//             ];

//             if ($array) {
//                 echo json_encode(["dados" => $array]);
//             }else {
//                 echo json_encode(["dados" => "Não existem dados para retornar"]);
//             }
//         }

//     }
// }