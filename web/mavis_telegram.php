<!DOCTYPE html>
<!---->
<?php
///CONFIGURATION FILE///
require __DIR__ . '/config.php';
///PAGE VARIABLES///START
$PAGE_HEADER = 'MAVIS Telegram Auth';
$PAGE_SUBHEADER = 'MAVIS module that can auth user via Telegram';
$PAGE_TITLE = 'TacacsGUI';
$PAGE_SUBTITLE = 'MAVIS Telegram Auth';
$BREADCRUMB = array(
	'Home' => [
		'name' => 'MAVIS',
		'href' => '',
		'icon' => 'fa fa-cog',
		'class' => ''  //last item should have active class!!
	],
	'Tacacs' => [
		'name' => 'Telegram Auth',
		'href' => '',
		'icon' => 'fa fa-cog',
		'class' => 'active'  //last item should have active class!!
	],
);
///!!!!!////
$ACTIVE_MENU_ID=[900,950];
$ACTIVE_SUBMENU_ID=950;
///!!!!!////
///PAGE VARIABLES///END
?>
<html>

<?php
require __DIR__ . '/templates/header.php';
?>
<!--ADDITIONAL CSS FILES START-->

<!--ADDITIONAL CSS FILES END-->

<?php

require __DIR__ . '/templates/body_start.php';

?>
<!--MAIN CONTENT START-->


<!--MAIN CONTENT END-->

<?php

require __DIR__ . '/templates/body_end.php';

?>


<?php

require __DIR__ . '/templates/footer_end.php';

?>
<!-- ADDITIONAL JS FILES START-->

	<!-- main js MAIN Functions -->
    <script src="dist/js/pages/mavis_telegram/main.js"></script>

<!-- ADDITIONAL JS FILES END-->
</body>

</html>
