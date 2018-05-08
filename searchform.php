<?php
/**
 *
 *
 *  Materialize Template <http://wordpress.org>
 *
 *  By KRATZ Geoffrey AKA Jul6art AKA VanIllaSkype
 *  for VsWeb <https://vsweb.be>
 *
 *  https://vsweb.be
 *  admin@vsweb.be
 *
 *  Special thanks to Brynnlow
 *  for his contribution
 *
 *  It is free software; you can redistribute it and/or modify it under
 *  the terms of the GNU General Public License, either version 2
 *  of the License, or any later version.
 *
 *  For the full copyright and license information, please read the
 *  LICENSE.txt file that was distributed with this source code.
 *
 *  The flex one, in a flex world
 *
 *     __    __    ___            __    __    __   ____
 *     \ \  / /   / __|           \ \  /  \  / /  |  __\   __
 *      \ \/ / _  \__ \  _         \ \/ /\ \/ /   |  __|  |  _\
 *       \__/ (_) |___/ (_)         \__/  \__/    |  __/  |___/
 *
 *                    https://vsweb.be
 *
 */
?>

<?php $unique_id = esc_attr( uniqid( 'search-form-' ) ); ?>

<form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ) ?>" >
    <div class="input-field">
        <i class="material-icons prefix">search</i>
        <input type="text" value="<?php get_search_query()  ?>" name="s" id="s" class="validate" />
        <label class="screen-reader-text" for="s"><?php echo __( 'Search ...', 'materialize-template' ) ?></label>
        <input type="submit" class="navbar-hidden btn waves-effect waves-light right" id="searchsubmit" value="<?php echo esc_attr__( 'Search', 'materialize-template' ) ?>" />
    </div>
</form>