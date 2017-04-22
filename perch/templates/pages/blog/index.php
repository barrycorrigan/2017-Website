<?php perch_layout('global.header'); ?>

    <section class="previews">

        <div>
            <figure class="absolute-bg  preview__img" style="background-image: url('/assets/img/profile.jpg');"></figure>

            <div class="previews__container">
                <span>Front End Designer</span>
                <h1>Barry Corrigan</h1>
            </div>
        </div>

		<div>
			<?php perch_blog_recent_posts(10); ?>
		</div>

	</section>

<?php perch_layout('global.footer'); ?>
