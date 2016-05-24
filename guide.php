<?php
function theme_guide(){
add_theme_page( 'Theme guide','Theme documentation','edit_themes', 'theme-documentation', 'fabthemes_theme_guide');
}
add_action('admin_menu', 'theme_guide');

function fabthemes_theme_guide(){ ?>

		
<div id="welcome-panel" class="about-wrap">
<div class="container">

<div class="row">

	<div class="col3 col">
		<img src="<?php echo get_template_directory_uri() ?>/screenshot.png" />
	</div>
	<div class="col34 col">
		<h2>Welcome to <?php echo wp_get_theme(); ?> WordPress theme!</h2>
		<p> <?php echo wp_get_theme(); ?> is a free premium responsive WordPress theme from fabthemes.com. This theme is built 
			on <b>Bootstrap 3</b> framework. This is a News portal, Magazine type theme. The theme comes with custom homepage, custom widgets, custom menu and theme option page. </p>
	</div>

</div>


<div class="row">

	<div class="col col1">
		<h3>Theme setup</h3>

		<h4> 1. Installing theme</h4>

		<p>Download the theme zip file from Fabthemes.com. Open your WordPress admin panel and go to <b> Appearence > Themes</b> . Click <b> Add new </b> and then <b> Upload the theme </b> to your themes directory and activate it.  </p>

		<h4> 2. Setting up Homepage</h4>

		<p> After theme activation, go to the Pages and create a new page named "Home". In the page attribute section you can find a dropdown box for page templates. Select the "Home" template from the dropdown list. Leave the page content section empty and publish the page. </p>
		<p>Go to settings > Reading > Front page displays. Select the "static page" option and for front page select "Home" from the dropdown page list.</p>

		<h4> 3. Setting up Blog page </h4>
		<p> Create a new page called Blog. Go to settings > Reading > Front page displays. Select "Blog" page front the dropdown list for posts page. </p>
		
		<h4> 4. Import sample data</h4>
		<p> Sample xml data is available for the theme. You can use it to test run the theme before you post your actual data. </p>

	</div>

</div>

<div class="row">
	<div class="col col1">
		<h3>Slider items </h3>
		<b>Creating slider items</b>
		<p> Slider items are displayed on the homepage slider section. It is basically an image and a title with description text.  </p>
		<p> To create a slide item, click on the Slider items tab on the admin menu and then click on Add new. You will reach the slide item editor page. Here you will be able to give a title to your slide item, upload the slide image and add a text content to your slide item. Then you can publish it.</p>


	</div>
</div>


<div class="row">
	<div class="col col1">

		<h3>Service items </h3>
		<b>Creating service items</b>
		<p> These are custom post types items to showcase various services. You can add new service items via admin panel.  </p>
		<p> To create a service item, click on the Services tab on the admin menu and then click on Add new. You will reach the services editor page. Here you will be able to give a title to your service item and add the service details. Also add a featured image to your service item before you publish it.</p>

		<b> Creating Services page</b>
		<p> This will be a page that lists all your service items. To do this, go to Pages and create a new Page. Give it a title called Services. Leave the page content section empty. Then under page template options, select Services template. Then hit publish. You will be able to see all your service items listed on that page url. </p>


	</div>
</div>

<div class="row">
	<div class="col col1">

		<h3>Event items </h3>
		<b>Creating event items</b>
		<p> These are custom post types items to showcase Events. You can add new event items via admin panel.  </p>
		<p> To create a event item, click on the Events tab on the admin menu and then click on Add new. You will reach the events editor page. Here you will be able to give a title to your event item and then add the event details. You can also add a featured image to the event item. Event editor also has metaboxes to collect event details like, <b>Date</b> of the event, <b>Time</b> of the event and <b>Location</b> of the event</p>

		<b> Creating Events page</b>
		<p> This will be a page that lists all your event items. To do this, go to Pages and create a new Page. Give it a title called Events. Leave the page content section empty. Then under page template options, select Events template. Then hit publish. You will be able to see all your event items listed on that page url. </p>

	</div>
</div>

<div class="row">
	<div class="col col1">

		<h3>Sermon items </h3>
		<b>Creating sermon items</b>
		<p> These are custom post types items to showcase Sermons. You can add new sermon items via admin panel.  </p>
		<p> To create a sermon item, click on the Sermons tab on the admin menu and then click on Add new. You will reach the sermons editor page. Here you will be able to give a title to your sermon item and then add the sermon details. You can also add a featured image to the . Sermon editor also has metaboxes to collect sermon details like, <b>Name</b> of the priest, <b>PDF</b> file of sermon <b>Audio file</b> of the sermon and also <b>Video url</b> of the sermon.</p>

		<b> Creating Sermon page</b>
		<p> This will be a page that lists all your sermon items. To do this, go to Pages and create a new Page. Give it a title called Sermons. Leave the page content section empty. Then under page template options, select Sermons template. Then hit publish. You will be able to see all your event items listed on that page url. </p>

	</div>
</div>


<div class="row">

	<div class="col col1"> 
		<h3>Theme Options </h3>
		<p> Theme comes with an options panel to customize its settings. </p>
	 </div>
	 <div class="col col1">
	 	<h4> 1. Slider setting </h4>
	 	<p>  The homepage has a slider section below the header. You can set the number of slide items to show on the slider. </p>
	 </div>
	 <div class="col col1">
	 	<h4> 2. Bible Quote </h4>
	 	<p>  There is a bible quote section on the homepage. </p>
	 </div>

	 <div class="col col1">
	 	<h4> 3. Number of Services, Events and Sermons </h4>
	 	<p> There are options to select the number of Service items, event items and Sermon items to show on the homepage.</p>
	 </div>

	 <div class="col col1">
	 	<h4> 4. Custom styling</h4>
	 	<p> Use this options to color customize your theme.</p>
	 </div>

	 <div class="col col1">
	 	<h4> 5. Banner settings </h4>
	 	<p> Use this options to customize the banner ads on the sidebar.</p>
	 </div>

</div>

<div class="row">
	<div class="col col1">
			<?php echo file_get_contents(dirname(__FILE__) . '/FT/license-html.php'); ?>
	</div>
</div>


</div>
</div>



<style media="screen" type="text/css">

	.container{	width: 960px;}
	.row { background: #fff;  margin-bottom: 20px; padding: 20px 0px;}
	.row:before, .row:after {  display: table;  content: " ";}
	.row:after {  clear: both;	}
	.row:before, .row:after {  display: table;  content: " ";}
	.row:after { clear: both; }
	.col{ padding:0px 20px 0px 20px;  position:relative; 	 }
	.col1{ width: 920px;}
	.col2{ width: 440px; float: left;}
	.col3{ width: 280px; float: left;}
	.col34{ width: 600px; float: left;}
	.col h2{ font-weight: 700; font-size: 30px;}
	.col h3{ font-weight: 300; font-size: 24px; margin:0px 0px 20px 0px; background: #333; color:#fff; padding: 10px; }
	.col h4{ font-weight: bold; font-size: 16px; margin:10px 0px;}
	.clear{clear: both;}
	.red{color: red;}
	dl{margin-bottom: 20px;}
	dl dt{font-weight: 800;}
	dl dd{margin:10px 0px 20px 0px}
	
</style>	

<?php }
