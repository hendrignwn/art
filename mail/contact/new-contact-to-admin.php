<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/* @var $model app\models\Contact */

?>

Hello Admin,
<br/>
Someone calling you via Contact Form with details in following below:
<br/>
<table>
    <tr>
        <td>Name</td>
        <td>:</td>
        <td><?= $model->getFullName() ?></td>
    </tr>
    <tr>
        <td>Email</td>
        <td>:</td>
        <td><?= $model->email ?></td>
    </tr>
    <tr>
        <td>Phone</td>
        <td>:</td>
        <td><?= $model->phone ?></td>
    </tr>
    <tr>
        <td>Subject</td>
        <td>:</td>
        <td><?= $model->subject ?></td>
    </tr>
</table>
In here is description: <br/>
<?= $model->description ?>

<br/><br/>
Thanks