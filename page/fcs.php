<?php

use function Sodium\increment;

function pageMenu($menuData){
    foreach ($menuData as $menuName => $fileName){
        $link = 'index.php';
        if($fileName != 'index'){
            $link .= '?leht='.$fileName;
        }
        echo '<a href="'.$link.'">'.$menuName.'</a>&nbsp;&nbsp;';
    }
}

    function control($pageName, $menuData){
        if(strlen($pageName) > 0 and array_search($pageName, $menuData)){
            return true;
        }
        return false;
    }

    function pageContent($pageName, $menuData) {
        if(control($pageName, $menuData)) {
            include($pageName.'.php');
        } else {
            echo '<h2>Pöördusid vale lehe poole!</h2>';
        }
    }