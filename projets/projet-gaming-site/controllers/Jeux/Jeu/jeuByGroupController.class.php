<?php
require_once '../../../program/Database.class.php';
require_once '../../../models/groupModel.php';
require_once '../../../models/jeuxModel.php';


class JeuByGroup{
    private $jeuxModel;
    private $groupModel;

    public function __construct()
    {
        $this->jeuxModel = new Jeux();
        $this->groupModel = new Group();
    }
    
    public function run(){
        $list_groupByGame = $this->groupModel->findByGame($_POST['game_id']);
        $group_rate = $this->groupModel->findByRate();
        $jeu_img = $this->jeuxModel->findOne($_POST['game_id']);
        
        return [
            'groups' => $list_groupByGame,
            'group_rate' => $group_rate,
            'jeu_img' => $jeu_img
        ];
        
    }// RUN

}


$jeu = new JeuByGroup();

extract($jeu->run());
include 'jeuByGroup.phtml';