
<?php $post_id = $args ?>


<?php $post_title = get_the_title( $post ); ?>


<li class="portfolio__item">
    <div class="portfolio__item-img-block">
        <div class="portfolio__item-img portfolio__item-img--front">
            <img src="/img/001.jpg" alt="превью"
                 class="portfolio__image">
        </div>
        <div class="portfolio__item-img portfolio__item-img--back">
            <img src="/img/001-back.jpg" alt="превью"
                 class="portfolio__image">
        </div>
    </div>
    <article class="portfolio__info">
        <h3 class="portfolio__info-h3"><?php echo get_the_title(2); ?></h3>
        <p class="portfolio__info-txt"><?php the_excerpt(); ?></p>
        <p class="portfolio__info-txt">описание сайта</p>
        <p class="portfolio__info-txt">описание сайта</p>
        <p class="portfolio__info-txt">описание сайта</p>
        <p class="portfolio__info-txt">описание сайта</p>
    </article>
</li>

