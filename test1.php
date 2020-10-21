<!DOCTYPE HTML>
<html>
<head>
</head>
<body>
<a href = "yourImage.png" download = "customName.png" id = "download">Click here to download image</a>
<canvas></canvas>
<script>
  setTimeout(function(){
    downloadCanvas();
  }, 4E3);

  function downloadImage(){
    document.getElementById('download').click();
  }

  function downloadCanvas(){
    var a = document.getElementById('download');
    var b = a.href;
    a.href = document.getElementsByTagName('canvas')[0].toDataURL();
    downloadImage();
    a.href = b;
  }
</script>
</body>
</html>