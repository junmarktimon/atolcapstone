<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div {
  height: 400px;
  width: 400px;
}
    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>
</head>
<body>


<div id="qrcode1"> </div>

<!-- <img src="" alt="" id="qrcode1"> -->

<!-- <div id="qrcode" style="width:100px; height:100px"></div>
<script type="text/javascript">
    new QRCode(document.getElementById("qrcode"), <?php //echo json_encode("Sabak ka diri", JSON_HEX_TAG); ?>);
</script> -->





<script>

var text1 = '<?php echo json_encode("Sabak ka diri45645", JSON_HEX_TAG); ?>';
var qrcode = new QRCode("qrcode1", {
    text: text1,
    width: 200,
    height: 200,
    correctLevel : QRCode.CorrectLevel.H
});



    // var qrcode = new QRCode("qrcode1");

    // var data = <?php //echo json_encode("Sabak ka diri", JSON_HEX_TAG); ?>;
    // qrcode.makeCode(data);

    // document.getElementById("qrcode1").src = qrcode.makeCode(data);
</script>

    
</body>
</html>