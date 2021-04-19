<?php

function prefix_register_duan() {
            $labels = array(
                'name'                => __( 'Dự Án', 'text-domain' ),
                'singular_name'       => __( 'Dự Án', 'text-domain' ),
                'add_new'             => _x( 'Add New Dự Án', 'text-domain', 'text-domain' ),
                'add_new_item'        => __( 'Add New Dự Án', 'text-domain' ),
                'edit_item'           => __( 'Edit Dự Án', 'text-domain' ),
                'new_item'            => __( 'New Dự Án', 'text-domain' ),
                'view_item'           => __( 'View Dự Án', 'text-domain' ),
                'search_items'        => __( 'Search Dự Án', 'text-domain' ),
                'not_found'           => __( 'No Dự Án found', 'text-domain' ),
                'not_found_in_trash'  => __( 'No Dự Án found in Trash', 'text-domain' ),
                'parent_item_colon'   => __( 'Parent Dự Án:', 'text-domain' ),
                'menu_name'           => __( 'Dự Án', 'text-domain' ),
            );
            $args = array(
                'labels'                   => $labels,
                'hierarchical'        => false,
                'description'         => 'description',
                'taxonomies'          => array(),
                'public'              => true,
                'show_ui'             => true,
                'show_in_menu'        => true,
                'show_in_admin_bar'   => true,
                'menu_position'       => null,
                'menu_icon'           => null,
                'show_in_nav_menus'   => true,
                'publicly_queryable'  => true,
                'exclude_from_search' => false,
                'has_archive'         => false,
                'query_var'           => true,
                'can_export'          => true,
                'rewrite'             => true,
                'capability_type'     => 'post',
                'supports'            => array(
                    'title', 'editor', 'author', 'thumbnail',
                    'excerpt','custom-fields', 'trackbacks', 'comments',
                    'revisions', 'page-attributes', 'post-formats'
                    )
            );
            register_post_type( 'du-an', $args );
        }
        add_action( 'init', 'prefix_register_duan' );

        function my_taxonomies_duan() {
            $labels = array(
                                    'name'                  => _x( 'Danh Mục Dự Án', 'Taxonomy Dự Án', 'text-domain' ),
                            'singular_name'         => _x( 'Danh Mục Dự Án', 'Taxonomy Dự Án', 'text-domain' ),
                            'search_items'          => __( 'Search Dự Án', 'text-domain' ),
                            'popular_items'         => __( 'Popular Dự Án', 'text-domain' ),
'all_items'             => __( 'All Dự Án', 'text-domain' ),
'parent_item'           => __( 'Parent Dự Án', 'text-domain' ),
                        'parent_item_colon'     => __( 'Parent Dự Án', 'text-domain' ),
                                'edit_item'             => __( 'Edit Dự Án', 'text-domain' ),
                            'update_item'           => __( 'Update Dự Án', 'text-domain' ),
                            'add_new_item'          => __( 'Add New Dự Án', 'text-domain' ),
                            'new_item_name'         => __( 'New Dự Án Name', 'text-domain' ),
                    'add_or_remove_items'   => __( 'Add or remove Dự Án', 'text-domain' ),
                    'choose_from_most_used' => __( 'Choose from most used text-domain', 'text-domain' ),
                                'menu_name'             => __( 'Danh Mục Dự Án', 'text-domain' ),
            );
            $args = array(
                'labels'            => $labels,
                'public'            => true,
                'show_in_nav_menus' => true,
                'show_admin_column' => false,
                'hierarchical'      => true,
                'show_tagcloud'     => false,
                'show_ui'           => true,
                'query_var'         => true,
                'rewrite'           => true,
                'query_var'         => true,
                'capabilities'      => array(),
            );
            register_taxonomy( 'danh-muc-du-an', array( 'du-an' ), $args );
        }
        add_action( 'init', 'my_taxonomies_duan' );
        
function prefix_register_name() {
            $labels = array(
                'name'                => __( 'Sản Phẩm', 'text-domain' ),
                'singular_name'       => __( 'Sản Phẩm', 'text-domain' ),
                'add_new'             => _x( 'Add New Sản Phẩm', 'text-domain', 'text-domain' ),
                'add_new_item'        => __( 'Add New Sản Phẩm', 'text-domain' ),
                'edit_item'           => __( 'Edit Sản Phẩm', 'text-domain' ),
                'new_item'            => __( 'New Sản Phẩm', 'text-domain' ),
                'view_item'           => __( 'View Sản Phẩm', 'text-domain' ),
                'search_items'        => __( 'Search Sản Phẩm', 'text-domain' ),
                'not_found'           => __( 'No Sản Phẩm found', 'text-domain' ),
                'not_found_in_trash'  => __( 'No Sản Phẩm found in Trash', 'text-domain' ),
                'parent_item_colon'   => __( 'Parent Sản Phẩm:', 'text-domain' ),
                'menu_name'           => __( 'Sản Phẩm', 'text-domain' ),
            );
            $args = array(
                'labels'                   => $labels,
                'hierarchical'        => false,
                'description'         => 'description',
                'taxonomies'          => array(),
                'public'              => true,
                'show_ui'             => true,
                'show_in_menu'        => true,
                'show_in_admin_bar'   => true,
                'menu_position'       => null,
                'menu_icon'           => null,
                'show_in_nav_menus'   => true,
                'publicly_queryable'  => true,
                'exclude_from_search' => false,
                'has_archive'         => false,
                'query_var'           => true,
                'can_export'          => true,
                'rewrite'             => true,
                'capability_type'     => 'post',
                'supports'            => array(
                    'title', 'editor', 'author', 'thumbnail',
                    'excerpt','custom-fields', 'trackbacks', 'comments',
                    'revisions', 'page-attributes', 'post-formats'
                    )
            );
            register_post_type( 'product', $args );
        }
        add_action( 'init', 'prefix_register_name' );

        function my_taxonomies_name() {
            $labels = array(
                                    'name'                  => _x( 'Danh Mục Sản Phẩm', 'Taxonomy Sản Phẩm', 'text-domain' ),
                            'singular_name'         => _x( 'Danh Mục Sản Phẩm', 'Taxonomy Sản Phẩm', 'text-domain' ),
                            'search_items'          => __( 'Search Sản Phẩm', 'text-domain' ),
                            'popular_items'         => __( 'Popular Sản Phẩm', 'text-domain' ),
'all_items'             => __( 'All Sản Phẩm', 'text-domain' ),
'parent_item'           => __( 'Parent Sản Phẩm', 'text-domain' ),
                        'parent_item_colon'     => __( 'Parent Sản Phẩm', 'text-domain' ),
                                'edit_item'             => __( 'Edit Sản Phẩm', 'text-domain' ),
                            'update_item'           => __( 'Update Sản Phẩm', 'text-domain' ),
                            'add_new_item'          => __( 'Add New Sản Phẩm', 'text-domain' ),
                            'new_item_name'         => __( 'New Sản Phẩm Name', 'text-domain' ),
                    'add_or_remove_items'   => __( 'Add or remove Sản Phẩm', 'text-domain' ),
                    'choose_from_most_used' => __( 'Choose from most used text-domain', 'text-domain' ),
                                'menu_name'             => __( 'Danh Mục Sản Phẩm', 'text-domain' ),
            );
            $args = array(
                'labels'            => $labels,
                'public'            => true,
                'show_in_nav_menus' => true,
                'show_admin_column' => false,
                'hierarchical'      => true,
                'show_tagcloud'     => false,
                'show_ui'           => true,
                'query_var'         => true,
                'rewrite'           => true,
                'query_var'         => true,
                'capabilities'      => array(),
            );
            register_taxonomy( 'product_cat', array( 'product' ), $args );
        }
        add_action( 'init', 'my_taxonomies_name' );
add_filter('use_block_editor_for_post', '__return_false');
function bcd_comment($comment, $args, $depth)    {
    $GLOBALS['comment'] = $comment; ?>
    <li <?php comment_class();?> id="li-comment-<?php comment_ID();?>">
     
        <div id="comment-<?php comment_ID();?>" class="clearfix comment-body">
            <div class="comment-author vcard">
                <?php echo get_avatar($comment, $size='60', $default='<path_to_url>'); ?>
                <?php printf(__('<span class="fn">%s</span><br />'), get_comment_author_link()); ?>
                <?php if($comment->comment_approved == '0') : ?>
                <em><?php echo 'Your coment is waiting for moderation.';?></em>
                <?php endif; ?>
            </div><!-- end comment autho vcard-->
            <div class="comment-meta commentmetadata">
            <?php printf(get_comment_date());?><?php edit_comment_link(__('(Edit)'),' ',''); ?>
            </div><!--end .comment-meta-->
            <p class="commentcontent"><?php comment_text(); ?></p>
            <div class="reply">
                <?php comment_reply_link(array_merge($args,array('depth' => $depth, 'max_depth'=> $args['max_depth'])));?>
            </div><!--end .reply-->
        </div><!--end #comment-author-vcard-->
<?php }?>
<?php

function maxweb_comment($comment, $args, $depth)    {
    $GLOBALS['comment'] = $comment; ?>
    <li <?php comment_class();?> id="li-comment-<?php comment_ID();?>">
    
        <div id="comment-<?php comment_ID();?>" class="clearfix">
            <!--<div class="comment-author vcard">
                <?php echo get_avatar($comment, $size='70', $default); ?>
            </div> end comment autho vcard-->
        
         <div class="commentBody">
             <div class="comment-meta commentmetadata">
              <?php printf(__('<p class="fn">%s</p>'), get_comment_author()); ?> <b class="qtv">Quản trị viên</b>
              <?php edit_comment_link(__('(Edit)'),' ',''); ?>
             </div><!--end .comment-meta-->
            <?php if($comment->comment_approved == '0') : ?>
                <em><?php echo 'Your coment is waiting for moderation.';?></em>
                <?php endif; ?>
            <div class="noidungcomment">
                <?php comment_text(); ?>
            </div>
            <p class="reply">
            <?php comment_reply_link(array_merge($args,array('respond_id' => 'formcmmaxweb','depth' => $depth, 'max_depth'=> $args['max_depth'])));?> <?php printf(__('<p class="ngaythang">%s</p>'),get_comment_date());?>
            </p><!--end .reply-->   
        </div><!--end #commentBody-->
        </div><!--end #comment-author-vcard-->
<?php }
//validate comments
function comment_validation_init() {
    if(is_singular() && comments_open() ) { ?>
    <script type="text/javascript" src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
    <script type="text/javascript">
    jQuery(document).ready(function($) {
        $('#commentform').validate({         
            onfocusout: function(element) {
              this.element(element);
            },
            rules: {
              author: {
                required: true,
                minlength: 2
              },
              email: {
                required: true,
                email: true
              },
              comment: {
                required: true,
              }
            },
            messages: {
              author: "Vui lòng nhập tên của bạn",
              email: "Vui lòng nhập email của bạn",
              comment: "Nhập bình luận của bạn"
            },
            errorElement: "div",
            errorPlacement: function(error, element) {
              element.after(error);
            }
        });
    });
    </script>
    <?php
    }
}
add_action('wp_footer', 'comment_validation_init');


function crunchify_disable_comment_url($fields) { 
    unset($fields['url']);
    return $fields;
}
add_filter('comment_form_default_fields','crunchify_disable_comment_url');

function rename_post_formats( $safe_text ) {
    if ( $safe_text == 'Đứng riêng' )
    return 'Sản phẩm';
    if ( $safe_text == 'Chat' )
    return 'Hỏi đáp';
    if ( $safe_text == 'Chuẩn' )
    return 'Tin tức';
    return $safe_text;
    }
    add_filter( 'esc_html', 'rename_post_formats' );
    add_theme_support( 'post-formats', array( 'aside' ,'chat' ,'gallery') );


add_filter( 'widget_text', 'do_shortcode' );

function crunchify_remove_version() {
    return '';
}
add_filter('the_generator', 'crunchify_remove_version');

remove_action('wp_head', 'rest_output_link_wp_head', 10);
remove_action('wp_head', 'wp_oembed_add_discovery_links', 10);
remove_action('template_redirect', 'rest_output_link_header', 11, 0);

remove_action ('wp_head', 'rsd_link');
remove_action( 'wp_head', 'wlwmanifest_link');
remove_action( 'wp_head', 'wp_shortlink_wp_head');
function crunchify_cleanup_query_string( $src ){
    $parts = explode( '?', $src );
    return $parts[0];
}
add_filter( 'script_loader_src', 'crunchify_cleanup_query_string', 15, 1 );
add_filter( 'style_loader_src', 'crunchify_cleanup_query_string', 15, 1 );
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );
function catch_that_image() {
global $post, $posts;
$first_img = '';
ob_start();
ob_end_clean();
$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
$first_img = $matches [1] [0];
if(empty($first_img)){ //Defines a default image
$first_img = "/images/default.jpg"; //Duong dan anh mac dinh khi khong tim duoc anh dai dien
}
return $first_img;
}
if( function_exists('acf_add_options_page') ) {
    
    acf_add_options_page(array(
                'page_title'    => 'Theme General Settings',
                'menu_title'    => 'Quản Lý Trang',
                'menu_slug'     => 'theme-general-settings',
                'capability'    => 'manage_options',
                        'redirect'      => false
    ));
    };
    
    register_nav_menu( 'main', 'Main' );register_nav_menu( 'top', 'Top' );
    register_sidebar( array(
        'name'          => __( 'Footer 1', 'theme_text_domain' ),
        'id'            => 'footer-1',
        'description'   => '',
        'class'         => '',
        'before_widget' => '<div id="%1s" class="widget %2s">',
        'after_widget'  => '</div>',
        'before_title'  => '<div class="footer-title"><span>',
        'after_title'   => '</span></div>'
    ) );
    register_sidebar( array(
        'name'          => __( 'Footer 2', 'theme_text_domain' ),
        'id'            => 'footer-2',
        'description'   => '',
        'class'         => '',
        'before_widget' => '<div id="%1s" class="widget %2s col-md-6">',
        'after_widget'  => '</div>',
        'before_title'  => '<div class="footer-title"><span>',
        'after_title'   => '</span></div>'
    ) );
    register_sidebar( array(
        'name'          => __( 'Footer 3', 'theme_text_domain' ),
        'id'            => 'footer-3',
        'description'   => '',
        'class'         => '',
        'before_widget' => '<div id="%1s" class="widget %2s col-md-12">',
        'after_widget'  => '</div>',
        'before_title'  => '<div class="footer-title"><span>',
        'after_title'   => '</span></div>'
    ) );
    register_sidebar( array(
        'name'          => __( 'Footer 4', 'theme_text_domain' ),
        'id'            => 'footer-4',
        'description'   => '',
        'class'         => '',
        'before_widget' => '<div id="%1s" class="widget %2s col-md-12">',
        'after_widget'  => '</div>',
        'before_title'  => '<div class="footer-title"><span>',
        'after_title'   => '</span></div>'
    ) );

    register_sidebar( array(
        'name'          => __( 'Sidebar', 'theme_text_domain' ),
        'id'            => 'sidebar',
        'description'   => '',
        'class'         => '',
        'before_widget' => '<div id="%1s" class="widget %2s">',
        'after_widget'  => '</div>',
        'before_title'  => '<div class="sidebar-title"><span>',
        'after_title'   => '</span></div>'
    ) );
    register_sidebar( array(
        'name'          => __( 'Sidebar Post', 'theme_text_domain' ),
        'id'            => 'post',
        'description'   => '',
        'class'         => '',
        'before_widget' => '<div id="%1s" class="widget %2s">',
        'after_widget'  => '</div>',
        'before_title'  => '<div class="sidebar-title"><span>',
        'after_title'   => '</span></div>'
    ) );
   register_sidebar( array(
        'name'          => __( 'Sidebar_pro', 'theme_text_domain' ),
        'id'            => 'sidebar_pro',
        'description'   => '',
        'class'         => '',
        'before_widget' => '<div id="%1s" class="widget %2s">',
        'after_widget'  => '</div>',
        'before_title'  => '<div class="sidebar-title"><span>',
        'after_title'   => '</span></div>'
    ) );
   

   add_theme_support('post-thumbnails');

    function remove_default_widgets() {
    unregister_widget('WP_Widget_Pages');
    unregister_widget('WP_Widget_Calendar');
    unregister_widget('WP_Widget_Archives');
    unregister_widget('WP_Widget_Links');
    unregister_widget('WP_Widget_Meta');
    unregister_widget('WP_Widget_RSS');
    unregister_widget('WP_Widget_Tag_Cloud');
    
    }

   //Đếm số lượt xem

    function getPostViews($postID){ // hàm này dùng để lấy số người đã xem qua bài viết
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){ // Nếu như lượt xem không có
    delete_post_meta($postID, $count_key);
    add_post_meta($postID, $count_key, '0');
    return "0"; // giá trị trả về bằng 0
    }
    return $count; // Trả về giá trị lượt xem
    }
    function setPostViews($postID) {// hàm này dùng để set và update số lượt người xem bài viết.
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
    $count = 0;
    delete_post_meta($postID, $count_key);
    add_post_meta($postID, $count_key, '0');
    }else{
    $count++; // cộng đồn view
    update_post_meta($postID, $count_key, $count); // update count
    }
    }


class home_xn extends WP_Widget {
    function home_xn(){
        parent::WP_Widget('home_xn',
                'Xem nhiều',
                array('description' => ''));
    }
    function widget( $args, $instance ) {
        extract($args);
        $title = apply_filters( 'widget_title',
                empty($instance['title']) ? '' : $instance['title'],
                $instance, $this->id_base);
        $sp = apply_filters( 'widget_text', $instance['sp'], $instance );
        echo $before_widget;
    ?>
    
    <div class="sidebar-title"><a href="#"><?php echo ($title);?></a></div>
    <div class="widget-content news_sidebar">
        <?php $x=0;$new=new WP_Query('showposts=5&meta_key=post_views_count&orderby=meta_value_num&order=DESC');while($new->have_posts()) : $new->the_post(); $x++;?>
            <?php if($x==1){ ?>
            <div class="border-center"></div>
            <div class="single-post">
                        <span><?php echo $x; ?></span>
                        <h3 class="title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
                        <small class="text-muted"><?php the_time('d/m/Y') ?></small>
                    
            </div>
            <?php }else{ ?>
                <div class="single-post">
                 <span><?php echo $x; ?></span>
                 <h3 class="title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
                 <small class="text-muted"><?php the_time('d/m/Y') ?></small>
             
                </div>
            <?php } ?>
        <?php endwhile;?>
    </div>
    
                    
                
        <?php
        echo $after_widget;
    }
    function update( $new_instance, $old_instance ) {
        $instance = $old_instance;
        $instance['title'] = strip_tags($new_instance['title']);
        $instance['sp'] =  $new_instance['sp'];
        
        return $instance;
    }
    function form( $instance ) {
        $instance = wp_parse_args( (array) $instance, 
            array( 'title' => '', 'sp' => '' ) );
        $title = strip_tags($instance['title']);
        $sp = ($instance['sp']);
        
?>
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>">
                <?php _e('Tiêu đề :'); ?> </label>
            <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" 
                name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title?>" />
        </p>
        
        
        
<?php
    }
}
    register_widget('home_xn');


    class home_news extends WP_Widget {
    function home_news(){
        parent::WP_Widget('home_news',
                'Tin mới',
                array('description' => ''));
    }
    function widget( $args, $instance ) {
        extract($args);
        $title = apply_filters( 'widget_title',
                empty($instance['title']) ? '' : $instance['title'],
                $instance, $this->id_base);
        $sp = apply_filters( 'widget_text', $instance['sp'], $instance );
        echo $before_widget;
    ?>
    
    <div class="sidebar-title"><?php echo ($title);?></div>
    <div class="widget-content">
    
        <?php $new=new WP_Query('showposts=5&orderby=ID&order=DESC');while($new->have_posts()) : $new->the_post();?>
        <div class="single-post">
            <div class="row">
                <div class="col-md-4">
                    <div class="img">
                        <a href="<?php the_permalink();?>"><?php the_post_thumbnail('medium');?></a>
                    </div>
                </div>
                <div class="col-md-8">
                    <h3 class="title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
                    <small class="text-muted"><i class="fa fa-clock-o"></i> <?php the_time('d/m/Y') ?></small>
                </div>
            </div>
        </div>
    <?php endwhile;?>
   
    </div>
    
                    
                
        <?php
        echo $after_widget;
    }
    function update( $new_instance, $old_instance ) {
        $instance = $old_instance;
        $instance['title'] = strip_tags($new_instance['title']);
        $instance['sp'] =  $new_instance['sp'];
        
        return $instance;
    }
    function form( $instance ) {
        $instance = wp_parse_args( (array) $instance, 
            array( 'title' => '', 'sp' => '' ) );
        $title = strip_tags($instance['title']);
        $sp = ($instance['sp']);
        
?>
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>">
                <?php _e('Tiêu đề :'); ?> </label>
            <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" 
                name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title?>" />
        </p>
        
        
        
<?php
    }
}
    register_widget('home_news');


    class tab_post extends WP_Widget {
    function tab_post(){
        parent::WP_Widget('tab_post',
                'Widget Tab Post',
                array('description' => 'Widget Tab'));
    }
    function widget( $args, $instance ) {
        extract($args);
        $title = apply_filters( 'widget_title',
                empty($instance['title']) ? '' : $instance['title'],
                $instance, $this->id_base);
        $sp = apply_filters( 'widget_text', $instance['sp'], $instance );
        echo $before_widget;
?>
<ul class="nav nav-tabs tabs-2 widget-tabs primary-color">
<li class="nav-item waves-effect waves-light active show"><a class="nav-link show active" data-toggle="tab" href="#tabs1-1">Đọc nhiều</a></li>
<li class="nav-item waves-effect waves-light"><a class="nav-link" data-toggle="tab" href="#tabs1-2">Mới nhất</a></li>
</ul>
<div class="tab-content widget-content widget-tabs-content">
<div id="tabs1-1" class="tab-pane fade in active">
    <?php
        $args = array(
            'showposts' => '5',
            'meta_key'       => 'post_views_count',
            'orderby' => 'meta_value_num',
            'order' => 'DESC'   
        );
    $query = new WP_Query( $args );
    while ($query->have_posts()) : $query->the_post();
    $x++;?>
    <div class="single-post">
        <div class="row">
            <div class="col-md-4">
                <div class="img">
                    <a href="<?php the_permalink();?>"><?php the_post_thumbnail('medium');?></a>
                </div>
            </div>
            <div class="col-md-8">
                <h3 class="title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
                <small class="text-muted"><i class="fa fa-clock-o"></i> <?php the_time('d/m/Y') ?></small>
            </div>
        </div>
    </div>
    <?php endwhile;wp_reset_postdata(); ?>
</div>
<div id="tabs1-2" class="tab-pane fade in">
    <?php $latestnews = new WP_Query ('showposts=5');
    while ($latestnews->have_posts()):$latestnews->the_post();
    $x++;?>
    <div class="single-post">
        <div class="row">
            <div class="col-md-4">
                <div class="img">
                    <a href="<?php the_permalink();?>"><?php the_post_thumbnail('medium');?></a>
                </div>
            </div>
            <div class="col-md-8">
                <h3 class="title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
                <small class="text-muted"><i class="fa fa-clock-o"></i> <?php the_time('d/m/Y') ?></small>
            </div>
        </div>
    </div>
    <?php endwhile;wp_reset_postdata(); ?>
</div>
</div>

<?php
echo $after_widget;
}
function update( $new_instance, $old_instance ) {
$instance = $old_instance;
$instance['title'] = strip_tags($new_instance['title']);
$instance['sp'] =  $new_instance['sp'];

return $instance;
}
function form( $instance ) {
$instance = wp_parse_args( (array) $instance,
    array( 'title' => '', 'sp' => '' ) );
$title = strip_tags($instance['title']);
$sp = ($instance['sp']);

?>

<?php
    }
}
register_widget('tab_post');


    class Home_style_55 extends WP_Widget {
function Home_style_55(){
parent::WP_Widget('Home_style_55',
'Tin tức sidebar 1',
array('description' => ''));
}
function widget( $args, $instance ) {
extract($args);
$title = apply_filters( 'widget_title',empty($instance['title']) ? '' : $instance['title'],$instance, $this->id_base);
$sp = apply_filters( 'widget_text', $instance['sp'], $instance );
$sl = apply_filters( 'widget_text', $instance['sl'], $instance );
echo $before_widget;
?>
<div class="sidebar-title"><?php echo get_cat_name($sp ); ?></div>
<div class="widget-content">
    <?php $new=new WP_Query('showposts='.$sl.'&cat='.$sp);
    while($new->have_posts()) : $new->the_post();  ?>
    <div class="single-post">
        <div class="row">
            <div class="col-md-4">
                <div class="img">
                    <a href="<?php the_permalink();?>"><?php the_post_thumbnail('medium');?></a>
                </div>
            </div>
            <div class="col-md-8">
                <h3 class="title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
                <small class="text-muted"><i class="fa fa-clock-o"></i> <?php the_time('d/m/Y') ?></small>
            </div>
        </div>
    </div>
    <?php endwhile;?>
</div>
<?php
echo $after_widget;
}
function update( $new_instance, $old_instance ) {
$instance = $old_instance;
$instance['title'] = strip_tags($new_instance['title']);
$instance['sp'] =  $new_instance['sp'];
$instance['sl'] =  $new_instance['sl'];
return $instance;
}
function form( $instance ) {
$instance = wp_parse_args( (array) $instance,
array( 'title' => '', 'sp' => '', 'sl' => '' ) );
$title = strip_tags($instance['title']);
$sp = ($instance['sp']);$sl = ($instance['sl']);
?>
<p>
    <label for="<?php echo $this->get_field_id('title'); ?>">
    <?php _e('Tiêu đề :'); ?> </label>
    <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>"
    name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo  get_cat_name($sp);?>" />
</p>
<p>
    <label for="<?php echo $this->get_field_id('sp'); ?>">
    <?php _e('Id Chuyên Mục.'); ?> </label>
    <select name="<?php echo $this->get_field_name('sp'); ?>" id="<?php echo $this->get_field_id('sp'); ?>">
        <?php $args = array(
        'orderby' => 'name','hide_empty'=>0,
        'order' => 'ASC'
        );$categories=get_categories( $args ); foreach($categories as $category) {?>
        <option value="<?php echo $category->term_id; ?>" <?php if($category->term_id ==$sp){echo 'selected="selected"';} ?>><?php echo $category->cat_name; ?></option>
        
        <?php } ?>
    </select>
</p>
<p>
    <label for="<?php echo $this->get_field_id('sl'); ?>">
    <?php _e('Số Lượng :'); ?> </label>
    <input class="widefat" id="<?php echo $this->get_field_id('sl'); ?>"
    name="<?php echo $this->get_field_name('sl'); ?>" type="number" value="<?php echo  $sl;?>" />
</p>
<?php
}
}
register_widget('Home_style_55');



class Home_style_33 extends WP_Widget {
function Home_style_33(){
parent::WP_Widget('Home_style_33',
'Tin tức sidebar 2',
array('description' => ''));
}
function widget( $args, $instance ) {
extract($args);
$title = apply_filters( 'widget_title',empty($instance['title']) ? '' : $instance['title'],$instance, $this->id_base);
$sp = apply_filters( 'widget_text', $instance['sp'], $instance );
$sl = apply_filters( 'widget_text', $instance['sl'], $instance );
echo $before_widget;
?>
<div class="box-news box-sidebar-box">
    <div class="sidebar-title">
        <?php echo get_cat_name($sp ); ?>
    </div>
    <?php $new=new WP_Query('showposts=1&cat='.$sp);
    while($new->have_posts()) : $new->the_post();  ?>
    <div class="content-news-sidebar">
        <div class="big-content-news-siderbar">
            <div class="img-post-sidebar">
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large'); ?></a>
            </div>
            <div class="info-post-sidebar">
                <h4 class="title-post-sidebar"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                <p class="text-post-sidebar"><?php echo wp_trim_words( get_the_content(), 10, '...' ); ?></p>
            </div>
        </div>
    </div>
    <?php endwhile;?>

    <ul class="list-post-second clearfix">
        <?php $new=new WP_Query('showposts=3&offset=1&cat='.$sp);
    while($new->have_posts()) :$new->the_post();?>
        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
        <?php endwhile;?>
    </ul>
</div>


<?php
echo $after_widget;
}
function update( $new_instance, $old_instance ) {
$instance = $old_instance;
$instance['title'] = strip_tags($new_instance['title']);
$instance['sp'] =  $new_instance['sp'];
$instance['sl'] =  $new_instance['sl'];
return $instance;
}
function form( $instance ) {
$instance = wp_parse_args( (array) $instance,
array( 'title' => '', 'sp' => '', 'sl' => '' ) );
$title = strip_tags($instance['title']);
$sp = ($instance['sp']);$sl = ($instance['sl']);
?>
<p>
    <label for="<?php echo $this->get_field_id('title'); ?>">
    <?php _e('Tiêu đề :'); ?> </label>
    <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>"
    name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo  get_cat_name($sp);?>" />
</p>
<p>
    <label for="<?php echo $this->get_field_id('sp'); ?>">
    <?php _e('Id Chuyên Mục.'); ?> </label>
    <select name="<?php echo $this->get_field_name('sp'); ?>" id="<?php echo $this->get_field_id('sp'); ?>">
        <?php $args = array(
        'orderby' => 'name','hide_empty'=>0,
        'order' => 'ASC'
        );$categories=get_categories( $args ); foreach($categories as $category) {?>
        <option value="<?php echo $category->term_id; ?>" <?php if($category->term_id ==$sp){echo 'selected="selected"';} ?>><?php echo $category->cat_name; ?></option>
        
        <?php } ?>
    </select>
</p>
<?php
}
}
register_widget('Home_style_33');


//Đưa trình soạn thảo WordPress 5.0 về phiên bản cũ không dùng plugin  
add_filter('use_block_editor_for_post', '__return_false');


//Ẩn WordPress Version
function wpb_remove_version() {
return '';
}
add_filter('the_generator', 'wpb_remove_version');


//Thêm loại loại File được tải lên vào WordPress

function my_myme_types($mime_types){
    $mime_types['svg'] = 'image/svg+xml'; //Adding svg extension
    $mime_types['psd'] = 'image/vnd.adobe.photoshop'; //Adding photoshop files
    return $mime_types;
}
add_filter('upload_mimes', 'my_myme_types', 1, 1);


//Vô hiệu hóa XML-RPC trong WordPress
add_filter('xmlrpc_enabled', '__return_false');


//Xóa bỏ /category/ và slug category cha

add_filter('term_link', 'devvn_no_category_parents', 1000, 3);
function devvn_no_category_parents($url, $term, $taxonomy) {
    if($taxonomy == 'category'){
        $term_nicename = $term->slug;
        $url = trailingslashit(get_option( 'home' )) . user_trailingslashit( $term_nicename, 'category' );
    }
    return $url;
}
// Rewrite url mới
function devvn_no_category_parents_rewrite_rules($flash = false) {
    $terms = get_terms( array(
        'taxonomy' => 'category',
        'post_type' => 'post',
        'hide_empty' => false,
    ));
    if($terms && !is_wp_error($terms)){
        foreach ($terms as $term){
            $term_slug = $term->slug;
            add_rewrite_rule($term_slug.'/?$', 'index.php?category_name='.$term_slug,'top');
            add_rewrite_rule($term_slug.'/page/([0-9]{1,})/?$', 'index.php?category_name='.$term_slug.'&paged=$matches[1]','top');
            add_rewrite_rule($term_slug.'/(?:feed/)?(feed|rdf|rss|rss2|atom)/?$', 'index.php?category_name='.$term_slug.'&feed=$matches[1]','top');
        }
    }
    if ($flash == true)
        flush_rewrite_rules(false);
}
add_action('init', 'devvn_no_category_parents_rewrite_rules');
 
/*Sửa lỗi khi tạo mới category bị 404*/
function devvn_new_category_edit_success() {
    devvn_no_category_parents_rewrite_rules(true);
}
add_action('created_category','devvn_new_category_edit_success');
add_action('edited_category','devvn_new_category_edit_success');
add_action('delete_category','devvn_new_category_edit_success');

//Bảo vệ WordPress khỏi các truy vấn nguy hiểm
global $user_ID; if($user_ID) {
        if(!current_user_can('administrator')) {
                if (strlen($_SERVER['REQUEST_URI']) > 255 ||
                        stripos($_SERVER['REQUEST_URI'], "eval(") ||
                        stripos($_SERVER['REQUEST_URI'], "CONCAT") ||
                        stripos($_SERVER['REQUEST_URI'], "UNION+SELECT") ||
                        stripos($_SERVER['REQUEST_URI'], "base64")) {
                                @header("HTTP/1.1 414 Request-URI Too Long");
                                @header("Status: 414 Request-URI Too Long");
                                @header("Connection: Close");
                                @exit;
                }
        }
}


function wp_nav_menu_no_ul()
{
    $options = array(
        'echo' => false,
        'container' => false,
        'theme_location' => 'main',
        'fallback_cb'=> 'fall_back_menu'
    );

    $menu = wp_nav_menu($options);
    echo preg_replace(array(
        '#^<ul[^>]*>#',
        '#</ul>$#'
    ), '', $menu);

}

function fall_back_menu(){
    return;
}

function new_submenu_class($menu) {    
    $menu = preg_replace('/ class="sub-menu"/','/ class="sub-menu" /',$menu);        
    return $menu;      
}

add_filter('wp_nav_menu','new_submenu_class');

function add_classes_on_li($classes, $item, $args) {
    $classes[] = 'nav-item';
    return $classes;
}
add_filter('nav_menu_css_class','add_classes_on_li',1,3);

function mu_hide_plugins_network( $plugins ) {
// let's hide akismet
if( in_array( 'black-studio-tinymce-widget/black-studio-tinymce-widget.php', array_keys( $plugins ) ) ) {
unset( $plugins['black-studio-tinymce-widget/black-studio-tinymce-widget.php'] );
}

return $plugins;
}
add_filter( 'all_plugins', 'mu_hide_plugins_network' );
add_action('admin_head', 'my_custom_fonts');
function my_custom_fonts() {
  echo '<style>
    .notice-error{display:none}
  </style>';
}

function p_first( $content ) {
    return preg_replace( '/<p([^>]+)?>/', '<p$1 class="p-first-class">', $content, 1 );
}
add_filter( 'the_content', 'p_first' );



add_filter('xmlrpc_enabled', '__return_false');

define('DISALLOW_FILE_MODS',false);
define('DISALLOW_FILE_EDIT',false);

//include_once( get_stylesheet_directory() . '/admin/admin.php' );


function wpse_11826_search_by_title( $search, $wp_query ) {
    if ( ! empty( $search ) && ! empty( $wp_query->query_vars['search_terms'] ) ) {
        global $wpdb;

        $q = $wp_query->query_vars;
        $n = ! empty( $q['exact'] ) ? '' : '%';

        $search = array();

        foreach ( ( array ) $q['search_terms'] as $term )
            $search[] = $wpdb->prepare( "$wpdb->posts.post_title LIKE %s", $n . $wpdb->esc_like( $term ) . $n );

        if ( ! is_user_logged_in() )
            $search[] = "$wpdb->posts.post_password = ''";

        $search = ' AND ' . implode( ' AND ', $search );
    }

    return $search;
}

add_filter( 'posts_search', 'wpse_11826_search_by_title', 10, 2 );

//Allow Contributors to Add Media
if ( current_user_can('contributor') && !current_user_can('upload_files') )
add_action('admin_init', 'allow_contributor_uploads');

function allow_contributor_uploads() {
$contributor = get_role('contributor');
$contributor->add_cap('upload_files');
}

add_action( 'wp_ajax_nopriv_list_order', 'list_order' );
add_action( 'wp_ajax_list_order', 'list_order' );

function list_order() {
    $rows = get_field('khach_dat_mua','option');
    if($rows)
    {
        shuffle( $rows );
     
        $row = $rows[0];
       
    echo '<li class="content_order">
        <a href="'.$row['link'].'" class="jas-sale-pop-img mr__20"><img src="'.$row['img'].'" alt=""></a>
        <div class="jas-sale-pop-content"><h3 class="mg__0 mt__5 mb__5 fs__18"><a href="'.$row['link'].'" title="'.$row['name'].'">'.$row['name'].'</a></h3><span class="fs__12 jas-sale-pop-timeago">'.$row['time'].'</span></div>
   
</li>';
    
    }

die();
}