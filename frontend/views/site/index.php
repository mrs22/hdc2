<?php
/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Congratulations!</h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Heading</h2>
                <?php
                $time = time();
                //$time = '2015-06-03 13:25:17';
                echo Yii::$app->thaiFormatter->asDate($time, 'short') . "<br>";
                echo Yii::$app->thaiFormatter->asDate($time, 'medium') . "<br>";
                echo Yii::$app->thaiFormatter->asDate($time, 'long') . "<br>";
                echo Yii::$app->thaiFormatter->asDate($time, 'full') . "<br>";

                echo Yii::$app->thaiFormatter->asDateTime($time, 'short') . "<br>";
                echo Yii::$app->thaiFormatter->asDateTime($time, 'medium') . "<br>";
                echo Yii::$app->thaiFormatter->asDateTime($time, 'long') . "<br>";
                echo Yii::$app->thaiFormatter->asDateTime($time, 'full') . "<br>";

                echo Yii::$app->thaiFormatter->asDate($time, 'php:Y-m-d');
                echo Yii::$app->thaiFormatter->asDateTime($time, 'php:Y-m-d H:i:s');
                ?>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

               

                <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>
                <?php

                use kartik\widgets\ActiveForm;

                    $form = kartik\widgets\ActiveForm::begin(
                                [
                                    'id' => 'signup-form',
                                    'enableAjaxValidation' => true,
                                    'fieldConfig' => [
                                        'autoPlaceholder' => true
                                    ]
                ]);
                ?>


                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
