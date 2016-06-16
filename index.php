<html>
 <head>
  <title>IsUp</title>
 </head>
 <body>
 <?php date_default_timezone_set('CET'); ?>
 <?php echo '<p>IsUp</p>'; ?>
 <?php echo 'Hostname: '; ?>
 <?php echo gethostname(); ?>
 <?php echo '<br>IP: '; ?>
 <?php echo gethostbyname(gethostname()); ?>
 <?php echo '<br>date'; ?>
 <?php echo date(DATE_RFC2822); ?>
 </body>
</html>
