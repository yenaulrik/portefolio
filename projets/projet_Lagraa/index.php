<?php
$load = 'home.phtml';
if(isset($_GET['page'])){
    switch($_GET['page']){
        case 'home' : $load = 'home.phtml';
        break;
        case 'about' : $load = 'about.phtml';
        break;
        case 'carros' : $load = 'carros.phtml';
        break;
        case 'meca' : $load = 'meca.phtml';
        break;
        case 'Resto' : $load = 'Resto.phtml';
        break;
        case 'contact' : $load = 'contact.phtml';
        break;
    }
}

include 'layout.phtml';