<?php

class ModuleTemplate extends Module {

    public function __construct() {

        parent::__construct();
    }

    public function callbackExample(){

        $data = "Hello from the callback";

        $tpl = new Template("example");
        $tpl->addPath(__DIR__ . "/templates");

        return $tpl->render(array("data" => $data));

    }
}