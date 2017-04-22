<?php perch_layout('global.header'); ?>

	<section class="previews">

		<div>
            <?php perch_content('Image'); ?>

            <div class="previews__container">
                <span>Category</span>
                <?php if (perch_get('cat')) {
					echo '<h1>'.perch_blog_category(perch_get('cat'), true).'</h1>';
				} ?>
            </div>
        </div>

		<div>
		    <?php
		        // defaults for all modes
		        $posts_per_page = 10;
		        $template 		= 'post_in_list.html';
		        $sort_order		= 'DESC';
		        $sort_by		= 'postDateTime';

		        // Have we displayed any posts yet?
		        $posts_displayed = false;


		        /* ----------------- POSTS BY CATEGORY ----------------- */
		        if (perch_get('cat')) {

		            perch_blog_custom(array(
						'category'   => perch_get('cat'),
						'template'   => $template,
						'count'      => $posts_per_page,
						'sort'       => $sort_by,
						'sort-order' => $sort_order,
					));

		            $posts_displayed = true;
		        }

		      	/* ----------------- DEFAULT: ALL POSTS ----------------- */

		      	if ($posts_displayed == false) {

		      		perch_blog_custom(array(
						'template'   => $template,
						'count'      => $posts_per_page,
						'sort'       => $sort_by,
						'sort-order' => $sort_order,
					));

		      	}
		    ?>
	    </div>

	</section>

<?php perch_layout('global.footer'); ?>
