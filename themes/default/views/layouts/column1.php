<?php $this->beginContent('//layouts/main'); ?>
<!-- CONTENT -->
<section>
    <div class="container">
        <div class="row alert alert-success">
            <div class="col-md-2">
                <h4><?php echo Title::get_title(2); ?></h4>
            </div>
            <div class="col-md-10">
                <marquee behavior="scroll" onmouseover="this.stop()" onmouseout="this.start()"><?php $this->get_marquee_news(); ?></marquee>
            </div>
        </div>
        <div id="blog" class="row">
            <!-- BLOG ARTICLE LIST -->
            <div class="col-md-9 col-sm-9">                
                <?php echo $content; ?>
            </div>
            <!-- /BLOG ARTICLE LIST -->
            <!-- BLOG SIDEBAR -->
            <div class="col-md-3 col-sm-3"> 
                <!-- FB Like Box -->
                <div class="widget">
                    <?php
                    $this->widget('application.extensions.fbLikeBox.fbLikeBox', array(
                        'likebox' => array(
                            'url' => 'https://www.facebook.com/mujibsenanews',
                            'header' => 'true',
                            'width' => '260',
                            'height' => '400',
                            'layout' => 'light',
                            'show_post' => 'false',
                            'show_faces' => 'true',
                            'show_border' => 'true',
                        )
                    ));
                    ?>                    
                </div>
                <!-- Video -->
                <div class="widget">
                    <iframe width="265" height="215" src="//www.youtube.com/embed/<?php echo $this->get_youtube_video(); ?>" frameborder="0" allowfullscreen></iframe>                
                </div>
                <!-- RECENT,POPULAR,COMMENTS -->
                <?php /*
                  <div class="widget">
                  <!-- TABS -->
                  <div class="tabs nomargin-top">
                  <!-- tabs -->
                  <ul class="nav nav-tabs nav-justified">
                  <li class="active"><a href="#tab1" data-toggle="tab"><?php echo Title::get_title(2); ?></a></li>
                  <li><a href="#tab2" data-toggle="tab"><?php echo Title::get_title(3); ?></a></li>
                  <li><a href="#tab3" data-toggle="tab"><?php echo Title::get_title(4); ?></a></li>
                  </ul>
                  <!-- tabs content -->
                  <div class="tab-content">
                  <div id="tab1" class="tab-pane active">
                  <?php Content::get_recent(); ?>
                  </div>
                  <div id="tab2" class="tab-pane"><!-- tab content -->
                  <?php Content::get_popular(); ?>
                  </div>
                  <div id="tab3" class="tab-pane"><!-- tab content -->
                  <?php ResourceComment::get_recent_comments(); ?>
                  </div>
                  </div>
                  </div>
                  <!-- /TABS -->
                  </div>
                 */ ?>
                <!-- Advertisement -->
                <div class="widget">
                    <?php $this->get_advertisement(1); ?>                    
                </div>                
            </div>
            <!-- /BLOG SIDEBAR -->
        </div>
    </div>
</section>
<!-- /CONTENT -->
<?php $this->endContent(); ?>