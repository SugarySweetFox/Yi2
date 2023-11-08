<?php

/** @var yii\web\View $this */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent mt-5 mb-5">
        <h1 class="display-4">Congratulations!</h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="https://www.yiiframework.com">Get started with Yii</a></p>
    </div>

    <div class="body-content">

        

        <div class="row">
            
        <? 
            foreach($cities as $city){
        ?> 

            <div class="col-lg-4 mb-3">
                <h2><?=$city['id']  ?></h2>

                <p><?=$city['city']  ?></p>

            </div>
        <? 
            }
        ?> 
            
        </div>

    </div>
</div>
