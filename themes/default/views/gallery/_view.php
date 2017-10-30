<?php

/* @var $this GalleryController */
/* @var $data Banner */
$filePath = Yii::app()->basePath . '/../uploads/banners/' . $data->banner;
if ((is_file($filePath)) && (file_exists($filePath))) {
    $image = CHtml::image(Yii::app()->baseUrl . '/uploads/banners/' . $data->banner, 'Picture', array('alt' => 'Picture', 'class' => 'img-thumbnail img-responsive', 'style' => ''));
    echo '<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6" style="height:120px;overflow:hidden;margin-bottom:10px">' . CHtml::link($image, Yii::app()->baseUrl . '/uploads/banners/' . $data->banner, array('class' => 'lytebox', 'title' => $data->name, 'data-title' => $data->name, 'data-lyte-options' => 'group:' . $data->catid)) . '</div>';
}
?>