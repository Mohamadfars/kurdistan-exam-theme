<div class="question">
    <h2><?php the_title(); ?></h2>
    <div class="options">
        <?php the_content(); ?>
        
        <?php if (get_post_meta(get_the_ID(), 'correct_answer', true)) : ?>
            <div class="answer-feedback">
                <p>وەڵامی ڕاست: <?php echo get_post_meta(get_the_ID(), 'correct_answer', true); ?></p>
            </div>
        <?php endif; ?>
    </div>
</div>
