<?php
/* @var $this YoutubeController */
/* @var $data Youtube */
?>
<div class="view">
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="margin: 0px 20px;">
        <iframe class="span11" src="//www.youtube.com/embed/<?php echo $data->youtube_id; ?>" frameborder="0" allowfullscreen></iframe>
    </div>    
</div>