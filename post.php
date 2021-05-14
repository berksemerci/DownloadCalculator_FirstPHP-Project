<?php
$ssize = $_POST["selectsize"];
$size = $_POST["size"];
$speed = $_POST["speed"];

if ($ssize == 1) 
{
   $size = $size * 1000;
   if ($speed == 1)
   {
    $size = ((($size / 75) / 3600) * 60);
   }
   else if ($speed == 2)
   {
    $size = ((($size / 125) / 3600) * 60);
   }	
   else if ($speed == 3)
   {
    $size = ((($size / 175) / 3600) * 60);
   }	
   else if ($speed == 4)
   {
    $size = ((($size / 250) / 3600) * 60);
   }	
   else if ($speed == 5)
   {
    $size = ((($size / 350) / 3600) * 60);
   }	
   else if ($speed == 6)
   {
    $size = ((($size / 450) / 3600) * 60);
   }	
   else if ($speed == 7)
   {
    $size = ((($size / 600) / 3600) * 60);
   }	
   else if ($speed == 8)
   {
    $size = ((($size / 800) / 3600) * 60);
   }	
   else if ($speed == 9)
   {
    $size = ((($size / 1000) / 3600) * 60);
   }	
   else if ($speed == 10)
   {
    $size = ((($size / 1500) / 3600) * 60);
   }	
   else if ($speed == 11)
   {
    $size = ((($size / 2000) / 3600) * 60);
   }	
   else if ($speed == 12)
   {
    $size = ((($size / 2500) / 3600) * 60);
   }	
   else if ($speed == 13)
   {
    $size = ((($size / 5000) / 3600) * 60);
   }	
   else
{
echo "ERROR (HATA)";
echo "<br/> Data found";
echo "<br/> Calculation can not be done";
}

} 
else if ($ssize == 2)
{
 $size = (($size * 1024) * 1000);

	if ($speed == 1)
   {
    $size = ((($size / 75) / 3600) * 60);
   }
   else if ($speed == 2)
   {
    $size = ((($size / 125) / 3600) * 60);
   }	
   else if ($speed == 3)
   {
    $size = ((($size / 175) / 3600) * 60);
   }	
   else if ($speed == 4)
   {
    $size = ((($size / 250) / 3600) * 60);
   }	
   else if ($speed == 5)
   {
    $size = ((($size / 350) / 3600) * 60);
   }	
   else if ($speed == 6)
   {
    $size = ((($size / 450) / 3600) * 60);
   }	
   else if ($speed == 7)
   {
    $size = ((($size / 600) / 3600) * 60);
   }	
   else if ($speed == 8)
   {
    $size = ((($size / 800) / 3600) * 60);
   }	
   else if ($speed == 9)
   {
    $size = ((($size / 1000) / 3600) * 60);
   }	
   else if ($speed == 10)
   {
    $size = ((($size / 1500) / 3600) * 60);
   }	
   else if ($speed == 11)
   {
    $size = ((($size / 2000) / 3600) * 60);
   }	
   else if ($speed == 12)
   {
    $size = ((($size / 2500) / 3600) * 60);
   }	
   else if ($speed == 13)
   {
    $size = ((($size / 5000) / 3600) * 60);
   }
   else
{
echo "ERROR (HATA)";
echo "<br/> Data found";
echo "<br/> Calculation can not be done";

}

}
else
{
echo "ERROR (HATA)";
echo "<br/> Data found";
echo "<br/> Calculation can not be done";
}
if ($size < 1)
{
$size = 0.30;
}
else
{
$size=round($size);
}
?>



 <head>




 <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
<title>Reinws.com Download Time Calculator</title>
<link rel="shortcut icon" type="image/x-icon" href="images/icon.ico" />
 <style type="text/css">
 .auto-style1 {
	 text-align: center;
 }
 </style>
</head>

<div class="auto-style1">


	<br><br><br><br>

<table style="width: 16%; height: 49px;" align="center">
	<tr>
		<td style="width: 101px; height: 42px;">Estimated Time <br>(Tahmini Süre)</td>
		<td style="width: 7px; height: 42px;">:</td>
		<td style="height: 42px"><label id="Label1"><?php echo $size, " Minutes (Dakika)" ?></label></td>
	</tr>
	<tr>
		<td style="width: 101px; height: 14px;"></td>
		<td style="width: 7px; height: 14px;"></td>
		<td style="height: 14px"></td>
	</tr>
	<tr>
		<td style="height: 42px;" colspan="3" class="auto-style1">
		<form method="post">
			<a href="index"><input  name="Button1" type="button" value="Back (Geri)" style="width: 109px; height: 31px"></a>
			</form>
		</td>
	</tr>
	<tr>
		<td style="height: 42px;" colspan="3" class="auto-style1">
		Fallibility (Hata Payı) = ±5 Minutes (Dakika)</td>
	</tr>
</table>

	<br><br><br>

	<br><br><br>

<IFRAME name="frame" src="daa.png" width=500 height=500 marginwidth=0 marginheight=0 hspace=0 vspace=0 scrolling=no frameborder=0></IFRAME>


















</div>



















