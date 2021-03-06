<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>{kb:site_title}</title>
{kb:head_data}
<meta name="keywords" content="{kb:site_keywords}" />
<meta name="description" content="{kb:site_keywords}" />
{kb:themes:css file="css/style.css"}
</head>
<body>

<div class="container_12">

	<div class="grid_6" id="logo">
		<h1><a href="http://68kb.com">{kb:settings:get name="site_title"}</a></h1>
	</div>
	<div class="grid_6" id="login">
		{kb:themes:embed file="inc/user_nav"}
	</div>
	<div class="clear"></div>

	<div class="grid_12 blue">
		<div id="slatenav">
			{kb:themes:embed file="inc/top_nav"}
		</div>
	</div>
	<div class="clear"></div>

	<div class="grid_8 body">
		{kb:themes:body}
	</div>

	<div class="grid_4" id="sidebar">
		<div class="item">
			<h3>Search</h3>
			{kb:search:form class="search_form" show_categories="no"}
				<input type="text" name="keywords" value="Search" onfocus="if (this.value==this.defaultValue) this.value='';" />
				{kb:cats}
				<input type="submit" name="submit" value="Seach!" />
			{/kb:search:form}
			<a href="{kb:site:link}search">Advanced Search</a>
		</div>

		<div class="item">
			<h3>Categories</h3>
			{kb:categories:cat_list show_total="yes"}
		</div>
	</div>

	<div class="clear"></div>

	<div class="grid_12 footer">
		<p>
			&copy; <?php echo date("Y"); ?> {kb:settings:get name="site_title"} -
			Powered by <a href="http://68kb.com">68 Knowledge Base</a><br />
			Time: {elapsed_time} - Memory: {memory_usage}
		</p>
	</div>
</div>
</body>
</html>