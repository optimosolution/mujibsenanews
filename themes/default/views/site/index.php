<?php
$this->pageTitle = Yii::app()->name;
?>
<div class="row">
<?php $this->get_advertisement(4); ?>
</div>
<div class="row well">
    <h3><?php echo Title::get_title(5); ?></h3>
    <?php Content::get_editorial_choice(); ?>
</div>
<div class="row well">
    <h3><?php echo Title::get_title(8); ?></h3>
    <?php
    $this->widget('zii.widgets.CListView', array(
        'dataProvider' => $dataProvider_featured,
        'template' => '{items}{pager}',
        'itemView' => '_view',
        'pager' => array(
            'header' => '',
            'prevPageLabel' => '<i class="fa fa-backward"></i>',
            'nextPageLabel' => '<i class="fa fa-forward"></i>',
            'firstPageLabel' => '<i class="fa fa-fast-backward"></i>',
            'lastPageLabel' => '<i class="fa fa-fast-forward"></i>',
            'selectedPageCssClass' => 'active', //default "selected"
            'maxButtonCount' => 10, // defalut 10  
            'htmlOptions' => array(
                'class' => 'pagination',
                'style' => '',
                'id' => '',
            ),
        ),
    ));
    ?>
</div>
<div class="row">
    <div class="col-md-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><?php echo CHtml::link(ContentCategory::getCategoryName(2), array('news/index', 'id' => 2), array('class' => '', 'style' => 'font-size:20px;')); ?></h3>
            </div>
            <div class="panel-body">
                <?php Content::get_news_home(2); ?>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><?php echo CHtml::link(ContentCategory::getCategoryName(15), array('news/index', 'id' => 15), array('class' => '', 'style' => 'font-size:20px;')); ?></h3>
            </div>
            <div class="panel-body">
                <?php Content::get_news_home(15); ?>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><?php echo CHtml::link(ContentCategory::getCategoryName(4), array('news/index', 'id' => 4), array('class' => '', 'style' => 'font-size:20px;')); ?></h3>
            </div>
            <div class="panel-body">
                <?php Content::get_news_home(4); ?>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><?php echo CHtml::link(ContentCategory::getCategoryName(7), array('news/index', 'id' => 7), array('class' => '', 'style' => 'font-size:20px;')); ?></h3>
            </div>
            <div class="panel-body">
                <?php Content::get_news_home(7); ?>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><?php echo CHtml::link(ContentCategory::getCategoryName(8), array('news/index', 'id' => 8), array('class' => '', 'style' => 'font-size:20px;')); ?></h3>
            </div>
            <div class="panel-body">
                <?php Content::get_news_home(8); ?>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><?php echo CHtml::link(ContentCategory::getCategoryName(13), array('news/index', 'id' => 13), array('class' => '', 'style' => 'font-size:20px;')); ?></h3>
            </div>
            <div class="panel-body">
                <?php Content::get_news_home(13); ?>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><?php echo CHtml::link(ContentCategory::getCategoryName(14), array('news/index', 'id' => 14), array('class' => '', 'style' => 'font-size:20px;')); ?></h3>
            </div>
            <div class="panel-body">
                <?php Content::get_news_home(14); ?>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><?php echo CHtml::link(ContentCategory::getCategoryName(19), array('news/index', 'id' => 19), array('class' => '', 'style' => 'font-size:20px;')); ?></h3>
            </div>
            <div class="panel-body">
                <?php Content::get_news_home(19); ?>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><?php echo CHtml::link(ContentCategory::getCategoryName(16), array('news/index', 'id' => 16), array('class' => '', 'style' => 'font-size:20px;')); ?></h3>
            </div>
            <div class="panel-body">
                <?php Content::get_news_home(16); ?>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><?php echo CHtml::link(ContentCategory::getCategoryName(17), array('news/index', 'id' => 17), array('class' => '', 'style' => 'font-size:20px;')); ?></h3>
            </div>
            <div class="panel-body">
                <?php Content::get_news_home(17); ?>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><?php echo CHtml::link(ContentCategory::getCategoryName(9), array('news/index', 'id' => 9), array('class' => '', 'style' => 'font-size:20px;')); ?></h3>
            </div>
            <div class="panel-body">
                <?php Content::get_news_home(9); ?>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><?php echo CHtml::link(ContentCategory::getCategoryName(18), array('news/index', 'id' => 18), array('class' => '', 'style' => 'font-size:20px;')); ?></h3>
            </div>
            <div class="panel-body">
                <?php Content::get_news_home(18); ?>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><?php echo CHtml::link(ContentCategory::getCategoryName(20), array('news/index', 'id' => 20), array('class' => '', 'style' => 'font-size:20px;')); ?></h3>
            </div>
            <div class="panel-body">
                <?php Content::get_news_home(20); ?>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><?php echo CHtml::link(ContentCategory::getCategoryName(3), array('news/index', 'id' => 3), array('class' => '', 'style' => 'font-size:20px;')); ?></h3>
            </div>
            <div class="panel-body">
                <?php Content::get_news_home(3); ?>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><?php echo CHtml::link(ContentCategory::getCategoryName(21), array('news/index', 'id' => 21), array('class' => '', 'style' => 'font-size:20px;')); ?></h3>
            </div>
            <div class="panel-body">
                <?php Content::get_news_home(21); ?>
            </div>
        </div>
    </div>
</div>
<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title"><?php echo Title::get_title(2); ?></h3>
    </div>
    <div class="panel-body">
        <?php
        $this->widget('zii.widgets.CListView', array(
            'dataProvider' => $dataProvider,
            'template' => '{items}{pager}',
            'itemView' => '_view2',
            'pager' => array(
                'header' => '',
                'prevPageLabel' => '<i class="fa fa-backward"></i>',
                'nextPageLabel' => '<i class="fa fa-forward"></i>',
                'firstPageLabel' => '<i class="fa fa-fast-backward"></i>',
                'lastPageLabel' => '<i class="fa fa-fast-forward"></i>',
                'selectedPageCssClass' => 'active', //default "selected"
                'maxButtonCount' => 10, // defalut 10  
                'htmlOptions' => array(
                    'class' => 'pagination',
                    'style' => '',
                    'id' => '',
                ),
            ),
        ));
        ?>
    </div>
</div>