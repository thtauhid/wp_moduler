Theme Files

These are the basic files that every theme should include:

    style.css – This is your theme’s stylesheet file.
    index.php – This is the main body template for your theme. Its job is to bring together all the information in the other theme files using template tags.
    header.php – This file contains the header information that appears with the <head> section of your site, stuff like metadata and the link to your stylesheet.
    sidebar.php – Everything in you sidebar goes in this file, like widgets, categories, additional menus, search form, etc.
    footer.php – This file contains your footer information, such as copyright details, widgets, and social icons.
    single.php – This file displays just one post.
    page.php – When you create a page on your site, this is the template responsible.
    comments.php – This file is responsible for displaying comments.
    404.php – When visitors try to visit a page on your site that doesn’t exist, this file will general an error page.
    functions.php – This file is where you can place special functions. We always recommend creating a child theme rather than edit this file directly.
    archive.php – Display an archive with this file so visitors to your site can go way back when and read your Hello World! post.
    search.php – Help your visitors search your site with this page.
    searchform.php – Display a search form for your visitors with this template file.

Defining a New Theme

Your stylesheet doesn’t just contain styling information for your theme – it also holds details about your theme that are displayed in the Appearance > Themes section of your WordPress admin.

The following is an example of the first few lines of the stylesheet for the default Twenty Sixteen theme:
/*
Theme Name: Twenty Sixteen
Theme URI: https://wordpress.org/themes/twentysixteen/
Author: the WordPress team
Author URI: https://wordpress.org/
Description: Twenty Sixteen is a modernized take on an ever-popular WordPress layout — the horizontal masthead with an optional right sidebar that works perfectly for blogs and websites. It has custom color options with beautiful default color schemes, a harmonious fluid grid using a mobile-first approach, and impeccable polish in every detail. Twenty Sixteen will make your WordPress look beautiful everywhere.
Version: 1.2
License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Tags: black, blue, gray, red, white, yellow, dark, light, one-column, two-columns, right-sidebar, fixed-layout, responsive-layout, accessibility-ready, custom-background, custom-colors, custom-header, custom-menu, editor-style, featured-images, flexible-header, microformats, post-formats, rtl-language-support, sticky-post, threaded-comments, translation-ready
Text Domain: twentysixteen

This theme, like WordPress, is licensed under the GPL.
Use it to make something cool, have fun, and share what you've learned with others.
*/
view raw
twenty-sixteen-theme-definition hosted with ❤ by GitHub

This information goes at the top of your stylesheet.css file.
Template Include Tags

Template include tags are used within one template file (for example index.php) to include (or call) the HTML and PHP found in another template file (for example header.php). While PHP has its own built-in include() statement to do this, these WordPress-specific tags make life much easier:

    <?php get_header(); ?> – Includes the header.php file
    <?php get_sidebar(); ?> – Includes the sidebar.php file
    <?php get_footer(); ?> – Includes the footer.php file
    <?php comments_template(); ?> – Includes your comments

Template Header/Bloginfo Tags

These are functions you’ll find in your theme’s header.php file, though you’ll also find them in other theme files:

    <?php bloginfo('name'); ?> – The title of your site, or blog name
    <?php bloginfo('url'); ?> – Your site’s URL
    <?php bloginfo('stylesheet_url'); ?> – Link to your themes’s stylesheet file
    <?php bloginfo('template_url'); ?> – Location of your site’s theme file
    <?php bloginfo('description'); ?> – Displays the tagline of your blog as set in Settings > General.
    <?php bloginfo('atom_url'); ?> – Link to your site’s atom URL
    <?php bloginfo('rss2_url'); ?> – RSS feed URL for your site
    <?php bloginfo('pingback_url'); ?> – Pingback URL for your site
    <?php bloginfo('version'); ?> – WordPress version number
    <?php bloginfo('html_type'); ?> – The HTML version your site is using
    <?php site_url(); ?> – The root URL for your site
    <?php get_stylesheet_directory(); ?> – Location of your stylesheet folder
    <?php wp_title(); ?> – Title of a specific page

Template Tags

These tags can be used across all of your template files, such as index.php or page.php, making it easy to display specific information anywhere you want on your site:

<?php the_content(); ?> – Displays the content of a post
<?php the_excerpt(); ?> – Displays the excerpt used in posts
<?php the_title(); ?> – Title of the specific post
<?php the_permalink() ?> – Link of a specific post
<?php the_category(', ') ?> – Category of a specific post
<?php the_author(); ?> – Author of a specific post
<?php the_ID(); ?> – ID of a specific post
<?php edit_post_link(); ?> – Edit link for a post
<?php next_post_link(' %link ') ?> – URL of the next page
<?php previous_post_link('%link') ?> – URL of the previous page
<?php get_links_list(); ?> – Lists all links in blogroll
<?php wp_list_pages(); ?> – Lists all pages
<?php wp_get_archives() ?> – List archive for the site
<?php wp_list_cats(); ?> – Lists all categories
<?php get_calendar(); ?> – Displays the built-in calendar
<?php wp_register(); ?> – Displays register link
<?php wp_loginout(); ?> – Displays login/logout link only to registered users