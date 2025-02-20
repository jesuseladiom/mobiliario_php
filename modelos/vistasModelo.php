<?php

    class vistasModelo {
        
        /*------------- modelo obtener vistas ------- */
        // depende de la ruta tecleada en la url
        // similar al router
        protected static function obtener_vistas_modelo($vistas) {
            // vistas validas
            $listaBlanca=["home","client-list","client-new","client-search","client-update","company","item-list","item-new","item-search",
                        "item-update","reservation-list","reservation-new","reservation-pending","reservation-reservation","reservation-search",
                        "reservation-update","user-list","user-new","user-search","user-update"];
            if (in_array($vistas, $listaBlanca)){
                if (is_file("./vistas/contenidos/".$vistas."-view.php")){
                    $contenido= "./vistas/contenidos/".$vistas."-view.php";
                }else {
                    $contenido="404";
                }
            }else if ($vistas=="login" || $vistas=="index"){
                $contenido= "login";
            } else {
                $contenido="404";
            }
            return $contenido;
        }
    }