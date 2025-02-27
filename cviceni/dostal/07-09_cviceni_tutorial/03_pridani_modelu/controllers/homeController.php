<?php

class homeController extends baseController{

    /**
     * @return string - output html
     */
    public function indexAction($params) {
        // puvodne
        // extract($params);
        //return "Homepage - a: $a, b: $b";

        // nactu vsechny uzivatele z DB
        $uzivatele = $this->user->DBSelectAll("uzivatele", "*", "");
        //printr($uzivatele);

        // prihodit data do parametru
        $params["uzivatele"] = $uzivatele;

        // html si nactu z nejake mini-sablony
        $html = phpWrapperFromFile("php_templates/home.php", $params);
        //return $html;

        // menu - do sablony
        $menu = "Menu z homeControlleru";

        // vypis cele stranky
        $this->render($html, $menu);
    }
}
