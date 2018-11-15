<?php
class Citation_Table {
    
    function __construct()
    {
        
    }

    function output( array $atts )
    {
        //add_action( 'wp_enqueue_scripts', array( 'Citation_Assets', 'register_stylesheets' ) );
        $post_id = isset( $atts['id'] ) ? $atts['id'] : 0;
        $posts_per_col = isset( $atts['per_col'] ) ? (int)$atts['per_col'] : 10;

        try
        {
            $citation_posts = toolset_get_related_posts(
                (int)$post_id, 'country-citation-row', 'parent', 150, 0, array('meta_key' => 'toolset-post-sortorder'), 'post_object', 'child', 'meta_value_num', 'ASC'
            );
            $row_number = 0;
            $index = 0;
    ?>
                <div class="row pw_list pw_list_nonus_links">
    <?php
            foreach ( $citation_posts as $citation_index => $citation_post )
            {
                $citation_name = get_post_meta( $citation_post->ID, "wpcf-citation-name", true );
                $citation_link = get_post_meta( $citation_post->ID, "wpcf-citation-link", true );
                if ( 0 === $index )
                {
                ?>
                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <!-- List group -->
                            <ul class="list-group">
                <?php
                }
                ?>
                        <li class="list-group-item li_top_20 <?php if($index%2==0) echo "li_gray"; ?>">
                            <div class="number"><?php echo ($citation_index+1) ?></div>&nbsp;
                            <img class="icon" src="https://www.google.com/s2/favicons?domain=<?php echo $citation_link; ?>" alt="<?php echo $citation_link; ?>">
                            <div class="link">
                                <a href="<?php echo $citation_link; ?>" target="_blank" ><?php echo $citation_name; ?></a>
                            </div>
                        </li>
        <?php
                if (2 >= $row_number )
                {
                    $row_number++;
                }
                if ( ( $posts_per_col - 1 ) == $index )
                {
                    $index = 0;
                ?>
                        </ul>

                    </div>  <!-- end panel default-->

                </div>
                    <?php
                        } else {
                            $index++;
                        }
                    }
                    ?>

            </div>
<?php
        } catch ( Exception $e )
        {
            echo "Caught exception: ".$e->getMessage();
        }
    }
}

$citation_table = new Citation_Table();