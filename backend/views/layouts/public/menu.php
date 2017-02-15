<div class="hor-menu hidden-sm hidden-xs">
    <ul class="nav navbar-nav">
        <!-- DOC: Remove data-hover="megamenu-dropdown" and data-close-others="true" attributes below to disable the horizontal opening on mouse hover -->
        
        <?php if(!empty($allMenu['main']) && is_array($allMenu['main'])):?>
        <?php foreach ($allMenu['main'] as $menu): ?>
        <li class="classic-menu-dropdown <?php if (isset($menu['class'])) {echo 'active';} ?>">
            <a href="<?=\yii\helpers\Url::toRoute($menu['url'])?>">
                <?=$menu['title']?>
                <?php if (isset($menu['class'])) {echo '<span class="selected"></span>';} ?>
            </a>
        </li>
        <?php endforeach; ?>
        <?php endif; ?>
    </ul>
</div>
