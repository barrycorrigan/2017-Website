<?php perch_layout('global.header'); ?>

		<section class="previews">

		    <div>
		        <?php perch_content('Image'); ?>
		        <?php perch_content('Site name'); ?>
		    </div>

		    <div>
				<?php
					perch_blog_custom(array(
						'filter' => 'postDateTime',
						'sort'=> 'postDateTime',
						'sort-order'=> 'DESC',
						'count'=> 5,
						'template' => 'blog/post_in_list.html',
					));
				?>
		    </div>

		</section>

<?php perch_layout('global.footer'); ?>
