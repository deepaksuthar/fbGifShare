<html>
<head>
    <meta property="fb:app_id" content="1903271449716043">
    <meta property="og:site_name" content="">
    <?php  echo '<meta property="og:url" content="https://fb-gif-share.herokuapp.com?gif='.$_GET['gif'].'">' ?>
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:type" content="video.other">
     <?php  echo '<meta property="og:image" content="https://fb-gif-share.herokuapp.com/gifs/'.$_GET['gif'].'.gif">' ?>
    <meta property="og:image:type" content="image/gif">
    <meta property="og:image:width" content="450">
    <meta property="og:image:height" content="450">
</head>
<body>
	 <?php  echo '<img src="/gifs/'.$_GET['gif'].'.gif">' ?>
	 <?php  echo '<a  href="http://www.facebook.com/sharer/sharer.php?u=https://fb-gif-share.herokuapp.com?gif='.$_GET['gif'].'&quote=This is a custom string" title="Share to Facebook"></a>' ?>
</body>
</html>