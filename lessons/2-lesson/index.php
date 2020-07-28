<?php
function myitedu_hello_world_page()
{
?>
<div class="wrap">
	<h1>
		Hello World Plugin Template By <a
			href="https://myitedu.com/optimized-sharing-premium/" target="_blank">myitedu</a>
	</h1>

	<form method="post" action="options.php">
            <?php
	settings_fields("myitedu_hello_world_config");
	do_settings_sections("myitedu-hello-world");
	submit_button();
?>
         </form>
</div>

<?php
}

function myitedu_hello_world_settings() {
	add_settings_section("myitedu_hello_world_config", "", null, "myitedu-hello-world");
	add_settings_field("myitedu-hello-world-text", "This is sample Textbox", "myitedu_hello_world_options", "myitedu-hello-world", "myitedu_hello_world_config");
	register_setting("myitedu_hello_world_config", "myitedu-hello-world-text");
}
add_action("admin_init", "myitedu_hello_world_settings");

function myitedu_hello_world_options() {
?>
<div class="postbox" style="width: 65%; padding: 30px;">
	<input type="text" name="myitedu-hello-world-text"
		value="<?php
	echo stripslashes_deep(esc_attr(get_option('myitedu-hello-world-text'))); ?>" />
	Provide any text value here for testing<br />
</div>
<?php
}
?>