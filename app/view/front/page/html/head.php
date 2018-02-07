	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title><?php echo $this->getTitle()?></title>

	<meta name="language" content="id" />
	<meta name="description" content="<?php echo $this->getDescription(); ?>"/>
	<meta name="keyword" content="<?php echo $this->getKeyword(); ?>"/>
	<meta name="author" content="<?php echo $this->getAuthor(); ?>">
	<link rel="icon" href="<?php echo $this->getIcon(); ?>" type="image/x-icon" />
	<link rel="shortcut icon" href="<?php echo $this->getShortcutIcon(); ?>" type="image/x-icon" />
	<meta name="robots" content="<?php echo $this->getRobots(); ?>" />

	<!-- prefetch -->


	<?php $this->getAdditionalBefore(); ?>
	<?php $this->getAdditional(); ?>
	<?php $this->getAdditionalAfter(); ?>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->