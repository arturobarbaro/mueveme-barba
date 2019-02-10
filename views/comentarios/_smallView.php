<?php
use yii\helpers\Html;
$formatter = \Yii::$app->formatter;
?>
<style media="screen">
.comentario {
    padding: 5px;
}
.comentario-cuerpo {
    background-color: #fff5ed;
    position: relative;
    padding: 5px 10px 5px 30px;
    border-radius: 2px;
}
.comentario-texto {
    padding-left: 10px;
}
.votos {
    padding-left: 10px;
    padding-top: 3px;
}
</style>

<div class="comentario">
    <div class="comentario-cuerpo">
        <div class="comentario-texto">
            <?= Html::encode($model->cuerpo) ?>
            <br>
            <small>
                por <?= Html::a(Html::encode($model->usuario->nombre),
                ['usuarios/view', 'id' => $model->usuario_id]) ?> -----
                Creado a <?= $formatter->asTime($model->created_at, 'short') ?> <?= $formatter->asRelativeTime($model->created_at, new DateTime()) ?>
            </small>
        </div>
    </div>
</div>