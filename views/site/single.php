<?php
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;
?>
<div class="row">
    <div class="col-md-12">
        <?= $article['content'] ?>

        <div class="about-author d-flex pt-5">
            <div class="bio align-self-md-center mr-4">
                <?= Html::img([$article->authors->shortimg ,   'alt' => $article->authors->name ] , ['class' => 'img-fluid mb-4']) ?>
            </div>
            <div class="desc align-self-md-center">
                <h3>About The Author : <?= $article->authors->name ?> </h3>
                <p><?= $article->authors->short ?></p>
            </div>
        </div>


        <div class="pt-5 mt-5">
            <h3 class="mb-5"><?php echo count($comments) ?>  Comments</h3>
            <?php if(!empty($comments)) : ?>
            <ul class="comment-list">
                <?php foreach ($comments as $item) : ?>
                <li class="comment">
                    <div class="vcard bio">
                        <?= Html::img([$item->image , 'alt' => $item->name] )  ?>
                    </div>
                    <div class="comment-body">
                        <h3><?= $item->name ?></h3>
                        <div class="meta">
                            <?php
                            $data = $item->published;
                            $data = Yii::$app->formatter->asDate($item->published , 'long')
                            ?>
                            <?= $data ; ?>
                        </div>
                        <p>
                            <?= $item->content ?>
                        </p>
                    </div>
                </li>
                <?php endforeach; ?>
            </ul>
            <?php else: ?>
            <p>No comments</p>
            <?php endif; ?>
            <!-- END comment-list -->




            <div class="comment-form-wrap pt-5">
                <h3 class="mb-5">Leave a comment</h3>
                    <?php if(Yii::$app->session->hasFlash('success')) : ?>
                        <div class="echo-success">
                            <?php echo Yii::$app->session->getFlash('success') ?>
                        </div>
                    <?php endif; ?>
                    <?php if(Yii::$app->session->hasFlash('error')) : ?>
                        <div class="echo-error">
                            <?php echo Yii::$app->session->getFlash('error') ?>
                        </div>
                    <?php endif; ?>

                    <?php $form = ActiveForm::begin([
                        'id' => 'comment-form',
                        'class' => 'listar-formtheme listar-formaddreview'
                    ]) ?>
                    <!--                                            --><?//= $form->field($model, 'image[]' , [
                    //                                                  'inputOptions' => ['class' => 'form-control']
                    //                                            ])->fileInput(['multiple'=> true , 'accept' => 'images/*'])->label(false) ?>
                    <?= $form->field($model , 'name' ,[
                        'inputOptions' => ['class' => 'form-control']
                    ] )->input('name') ?>
                    <?= $form->field($model , 'content' )->textarea(['rows' => 5 ])?>
                    <?= Html::submitButton('Post comment' , ['class' => 'btn py-3 px-4 btn-primary']) ?>
                    <?php ActiveForm::end() ?>
            </div>
        </div>
    </div> <!-- .col-md-12 -->
</div>