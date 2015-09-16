<?php /* Smarty version 2.6.26, created on 2015-09-10 08:25:56
         compiled from error%5Cerror.html */ ?>
<!DOCTYPE html>
<html>
<head>
<title>Error</title>
<meta charset="utf-8">
<style type="text/css">
*{
    font-family:        Consolas, Courier New, Courier, monospace;
    font-size:            14px;
}
body {
    background-color:    #fff;
    margin:                40px;
    color:                #000;
}
#content  {
    border:                #999 1px solid;
    background-color:    #fff;
    padding:            20px 20px 12px 20px;
    line-height:160%;
}

h1 {
    font-weight:        normal;
    font-size:            14px;
    color:                #990000;
    margin:             0 0 4px 0;
}
</style>
</head>
<body>

<div id="content">
<h1><?php echo '<?php'; ?>
 echo $this->error;<?php echo '?>'; ?>
</h1>
<?php echo '<?php'; ?>
 echo ($exception->getMessage()) ? '<pre>'.$exception->getMessage().'</pre>' : ''; <?php echo '?>'; ?>

<?php echo '<?php'; ?>
 echo ($exception->getTraceAsString()) ? '<pre>'.$exception->getTraceAsString().'</pre>' : ''; <?php echo '?>'; ?>

</div>
</body>
</html>