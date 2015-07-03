<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="no-js ie6 lt-ie9 lt-ie8 lt-ie7 lt-ie6" lang="es"> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie7 lt-ie9 lt-ie8 lt-ie7" lang="es"> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8 lt-ie9 lt-ie8" lang="es"> <![endif]-->
<!--[if IE 9 ]>    <html class="no-js ie9 lt-ie9" lang="es"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html class="no-js" lang="es"> <!--<![endif]-->

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Git UAP - <?=$title;?></title>

	<!-- Bootstrap core CSS -->
    <link href="<?=base_url()?>assets/frontend/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <!-- <link href="<?=base_url()?>assets/frontend/css/bootstrap-theme.min.css" rel="stylesheet"> -->
    <link href="<?=base_url()?>assets/frontend/css/clean-blog.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/frontend/css/main.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <?php foreach ($style as $css):?>
		<link rel="stylesheet" href="<?=base_url();?>assets/frontend/css/<?=$css?>">
	<?php endforeach; ?>

 	<script src="<?=base_url();?>assets/frontend/js/modernizr.js"></script>

 	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="<?=base_url()?>assets/frontend/js/html5shiv.min.js"></script>
      <script src="<?=base_url()?>assets/frontend/js/respond.min.js"></script>
    <![endif]-->
</head>
	<body>
		<?=$header;?>

		<?php foreach ($body as $section):?>
			<?=$section; ?>
		<?php endforeach; ?>
		<?=$footer;?>

		<script src="<?=base_url();?>assets/frontend/js/jquery.min.js"></script>
    	<script>window.jQuery || document.write('<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"><\/script>')</script>

    	<script src="<?=base_url()?>assets/frontend/js/bootstrap.min.js"></script>
    	<script src="<?=base_url()?>assets/frontend/js/clean-blog.min.js"></script>
		<script src="<?=base_url();?>assets/frontend/js/plugins.js"></script>
		<script src="<?=base_url();?>assets/frontend/js/jquery.validate.js"></script>
		<script src="<?=base_url();?>assets/frontend/js/jquery.validate.messages_es.js"></script>
		<script src="<?=base_url();?>assets/frontend/js/jquery.validate.alphanumeric.js"></script>
		<script src="<?=base_url();?>assets/frontend/js/jquery.validate.date.js"></script>
		<script src="<?=base_url();?>assets/frontend/js/jquery.form.js"></script>

		<?php foreach ($script as $js):?>
	 		<script src="<?=base_url();?>assets/frontend/js/<?=$js?>"></script>
		<?php endforeach; ?>


		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-64747562-1', 'auto');
			ga('send', 'pageview');
		</script>
	</body>
</html>