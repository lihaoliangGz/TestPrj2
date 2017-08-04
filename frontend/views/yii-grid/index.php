<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
use kartik\grid\GridView;

echo GridView::widget([
    'dataProvider'=>$dataProvider,
    'columns'=>2,
    'responsive' => true,
    'hover' => true
]);

