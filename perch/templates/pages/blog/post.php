<?php

// Include the header. You can find this in tempates/layouts
perch_blog_check_preview();

perch_layout('global.header', [
	'blog-post' => true
]);

perch_blog_post(perch_get('s'));

// Include the footer. You can find this in tempates/layouts
perch_layout('global.footer');
