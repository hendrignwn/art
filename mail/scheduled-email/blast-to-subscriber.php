<?php

use app\models\ScheduledEmail;
use app\models\Subscribe;
use yii\helpers\Url;

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/* @var $schedule ScheduledEmail */
/* @var $subscribe Subscribe */

$photoUrl = $schedule->getPhotoUrl() ? $schedule->getPhotoUrl() : Url::to('http://placehold.it/600x200&text=Hero+Image', true);

?>
<style>
	/* Shrink Wrap Layout Pattern CSS */
	@media only screen and (max-width: 599px) {
        td[class="hero"] img {
            width: 100%;
            height: auto !important;
        }
	    td[class="pattern"] td{
	        width: 100%;
	    }
	}
</style>

<table cellpadding="0" cellspacing="0">
    <tr>
        <td class="pattern" width="600">
            <table cellpadding="0" cellspacing="0">
                <tr>
                    <td class="hero">
                        <img src="<?= $photoUrl ?>" alt="<?= $schedule->subject ?>" style="display: block; border: 0;width:100%; height:auto;" />
                        <br/>
                    </td>
                </tr>
                <tr>
                    <td align="left" style="font-family: arial,sans-serif; font-size: 14px; line-height: 20px !important; color: #666; padding-bottom: 20px;">
                        <?= $schedule->body ?>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>