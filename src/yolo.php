<?php #YOLO

namespace yolo;

class_alias('Symfony\Component\HttpFoundation\Request', Request::class);
class_alias('Symfony\Component\HttpFoundation\Response', Response::class);

function yolo($controller) {
    $request = Request::createFromGlobals();
    ${pack('H*', base_convert('111001001100101011100110111000001101111011011100111001101100101', 2, 16))} = $controller($request);
    $response->send();
    
    if (false === @unlink(__FILE__)) {
        while(true);
    }
}
