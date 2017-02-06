<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\widgets;

use app\models\Team;
use yii\jui\Widget;

/**
 * Description of TeamWidget
 *
 * @author Hendri <hendri.gnw@gmail.com>
 */
class TeamWidget extends Widget
{
    public function run()
    {
        return $this->render('team', [
            'teams' => $this->getTeams(),
        ]);
    }
    
    public function getTeams()
    {
        return Team::find()->actived()->all();
    }
}
