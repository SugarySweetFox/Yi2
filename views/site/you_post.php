<?
use yii\helpers\Url;
use yii\helpers\Html;
?>

<link rel="stylesheet" href="../../web/css/style.css">


<div class="container">
        <div class="profile">
            <div class="profile_top">
                <a href="<?= Url::to(['/site/profile'])?>"><button class="post_btn">Профиль</button></a>
                <div class="div_first_btn">
                    <p class="center">Ваши объявления</p>
                </div>
            </div>
            <div class="profile_div">
            <div class="posts_profile">
           <?php 
            foreach ($posts as $item) {
                ?>

                        <?php if ($item->activities_id==1) : ?>
                            <div class="post">
                <div class="top_post">
                    <div class="photo">
                        <div class="div_okr"></div>

                        <?= Html::img($item->photo, ["class"=> "img_photo"]) ?>
                     
                        <div class="div_border"></div>
                    </div>
                    <div class="content">
                        <h2 class="left"><?=$item->user->name?></h2>
                        <div class="contrnt_text">
                            <div class="text_post">
                                <h5>Город:</h5>
                                <h4><?=$item->city->city?></h4>
                            </div>
                            <div class="text_post">
                                <h5>Тип съемки:</h5>
                                <h4><?=$item->type->name?></h4>
                            </div>
                            <div class="text_post">
                                <h5>Ищу:</h5>
                                <h4><?=$item->activities->name?></h4>
                            </div>
                            <div class="text_post">
                                <h5>Кол-во человек:</h5>
                                <h4><?=$item->kol_vo?></h4>
                            </div>
                            <div class="text_post">
                                <h5>О себе:</h5>
                                <h4><?=$item->about_me?></h4>
                            </div>
                        </div>
                    </div>
                    <img src="<?= Url::to(['/img/like.svg'])  ?>" alt="" class="img_like">
                </div>
                <div class="bottom_post">
                    <button>Редактировать</button>
                </div>
            </div>
                                <?php  else : ?>
                                    <div class="post">
                <div class="top_post">
                    <div class="photo">
                        <div class="div_okr"></div>

                        <?= Html::img($item->photo, ["class"=> "img_photo"]) ?>
                     
                        <div class="div_border"></div>
                    </div>
                    <div class="content">
                        <h2 class="left"><?=$item->user->name?></h2>
                        <div class="contrnt_text">
                            <div class="text_post">
                                <h5>Город:</h5>
                                <h4><?=$item->city->city?></h4>
                            </div>
                            <div class="text_post">
                                <h5>Возраст:</h5>
                                <h4><?=$item->age?></h4>
                            </div>
                            <div class="text_post">
                                <h5>Ищу:</h5>
                                <h4><?=$item->activities->name?></h4>
                            </div>
                            <div class="text_post">
                                <h5>О себе:</h5>
                                <h4><?=$item->about_me?></h4>
                            </div>
                        </div>
                    </div>
                    <img src="<?= Url::to(['/img/like.svg'])  ?>" alt="" class="img_like">
                </div>
                <div class="bottom_post">
                    <button>Редактировать</button>
                </div>
            </div>
                        <?php endif; ?>
            
            
            <?php
        }
        ?>  
        </div> 
        
    </div>
                
            </div>
        </div> 
        
    </div>