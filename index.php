<html>
 <head>
  <title>IsUp</title>
 </head>
 <body>
 <?php date_default_timezone_set('CET'); ?>
 <?php echo '<p>IsUp</p>'; ?>
 <?php echo 'Hostname: '; ?>
 <?php echo gethostname(); ?>
 <?php echo '<p></p>'; ?>
 <?php echo 'IP: '; ?>
 <?php echo gethostbyname(gethostname()); ?>
 <?php echo '<p></p>'; ?>
 <?php echo 'Date: '; ?>
 <?php echo date(DATE_RFC2822); ?>
 </body>
</html>
