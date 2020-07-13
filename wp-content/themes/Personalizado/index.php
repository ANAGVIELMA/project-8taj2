<?php get_header( );?>
    <main>
        <h2>Variedad de restaurantes y platos para todos los gustos</h2>
        <section>
            <ul class="Platillos container">
            <?php if ( have_posts() ) : 
                while ( have_posts() ) : if ('Platillo' == get_post_type() ) : the_post(); endif; ?>
                <li class="Platillo">
                    <div class="imag imag1"></div>
                    <h3><?php the_title( ); ?></h3>
                    <ul class="DetallePlat">
                        <li><i class="far fa-clock"></i>15 mins</li>
                        <li><i class="fas fa-search-dollar"></i>$15 USD</li>
                        <li><i class="fas fa-concierge-bell"></i>$3.99 domicilio</li>
                    </ul>
                </li>
                <?php endwhile; else :
                    _e( 'Sorry, no posts matched your criteria.', 'devhub' );
                endif;?>
            </ul>
        </section>
    </main>
</body></html>