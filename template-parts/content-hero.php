<?php if($title) :?>
    <div class="c-Hero o-Stack">
        <div class="o-Stack_item">
            <p class="u-mbs"><?php echo $title; ?></p>
            <?php if($tagline) :?>
                <p class="u-mbm"><?php echo $tagline; ?></p>
            <?php endif;?>
            <?php if($description) :?>
                <p><?php echo $description; ?></p>
            <?php endif;?>
        </div>
        <?php if($ctas ): ?>
            <div class="o-Stack_item o-Stack">
                <?php foreach( $ctas as $cta ) : ?>
                    <?php
                    $cta = $cta['hero_cta'];
                    $url = $cta['url'];
                    $title = $cta['title'];
                    $target = $cta['target'] ? $cta['target'] : '_self'; 
                    ?>
                    <a class="c-Button c-Button--full@s o-Stack__item" href="<?php echo esc_url( $url ); ?>" target="<?php echo esc_attr( $target ); ?>"><?php echo esc_html( $title ); ?></a>
                <?php endforeach;?>
            </div>
        <?php endif;?>
    </div>
<?php endif; ?>