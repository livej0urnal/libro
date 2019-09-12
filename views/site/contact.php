<?php
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;
?>
<div class="row d-flex mb-5 contact-info">
    <div class="col-md-12 mb-4">
        <h2 class="h4">Contact Information</h2>
    </div>
    <div class="w-100"></div>
    <div class="col-md-3">
        <p><span>Address:</span> 198 West 21th Street, Suite 721 New York NY 10016</p>
    </div>
    <div class="col-md-3">
        <p><span>Phone:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
    </div>
    <div class="col-md-3">
        <p><span>Email:</span> <a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
    </div>
    <div class="col-md-3">
        <p><span>Website</span> <a href="#">yoursite.com</a></p>
    </div>
</div>
<div class="margintip">

</div>
<div class="row block-9">
    <div class="col-md-12 mb-5">
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
                'class' => 'listar-formtheme listar-formcontactus',
                'id' => 'contact-form'
            ]) ?>

            <h2>Contact Form</h2>
                <?= $form->field($model , 'name' ,[
                    'inputOptions' => ['class' => 'form-control']
                ] )->input('name' , ['placeholder' => 'Your name']) ?>
                <?= $form->field($model , 'email' , [
                    'inputOptions' => ['class' => 'form-control']
                ] )->input('email' , ['placeholder' => 'Email Address']) ?>
                <?= $form->field($model , 'subject' , [
                    'inputOptions' => ['class' => 'form-control']
                ])->input('work' , ['placeholder' => 'Subject']) ?>
                <?= $form->field($model , 'message' )->textarea(['rows' => 7 ]) ?>
                <?= Html::submitButton('Send message' , ['class' => 'btn btn-primary py-3 px-5']) ?>
            <?php ActiveForm::end() ?>
</div>