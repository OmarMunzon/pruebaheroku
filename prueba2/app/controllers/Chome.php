<?php

    require_once 'views/Vhome.php';

    class Chome
    {
        private Vhome $vista;

        function __construct()
        {
            $this->vista=new Vhome();
        }

        function renderpage():void
        {
            $this->vista->pagehome();
        }
    }

?>