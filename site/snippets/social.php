<ul class="social">
    <?php if($facebook = $site->facebook()); ?>
    <li class="social__item"><a href="<?php echo $facebook->url() ?>" class="social__link"><i class="fa fa-facebook social__icon"></i></a></li>
    <?php endif ?>
    
    <?php if($twitter = $site->twitter()); ?>
    <li class="social__item"><a href="<?php echo $twitter->url() ?>" class="social__link"><i class="fa fa-tiwtter social__icon"></i></a></li>
    <?php endif ?>
    
    <?php if($linkedin = $site->linkedin()); ?>
    <li class="social__item"><a href="<?php echo $linkedin->url() ?>" class="social__link"><i class="fa fa-linkedin social__icon"></i></a></li>
    <?php endif ?>
    
    <?php if($github = $site->github()); ?>
    <li class="social__item"><a href="<?php echo $github->url() ?>" class="social__link"><i class="fa fa-github social__icon"></i></a></li>
    <?php endif ?>
</ul>