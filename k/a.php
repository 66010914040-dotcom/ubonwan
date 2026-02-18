<!DOCTYPE html>
<html>
<head>
<title>อุบลวรรณ ลีล้าน้อย (พรีม) </title>
</head>
<body>
<h1> งาน k อุบลวรรณ ลีล้าน้อย (พรีม) <br>66010914140 </h1>
<button style="background-color:green; color:white; padding:10px; border:none;" 
    onclick="showImage('1.jpg', this)" >

    เปิดรูปที่ 1
</button>

<button style="background-color:orange; color:white; padding:10px; border:none;"
    onclick="showImage('2.jpg', this)" >
    เปิดรูปที่ 2
</button>

<script>
function showImage(imgSrc, btn){
    btn.innerHTML = "<img src='" + imgSrc + "' width='250'>";
}
</script>

</body>
</html>