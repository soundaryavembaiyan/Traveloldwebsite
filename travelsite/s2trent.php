
<html>
<head>
<style type="text/css">
h1
{
   margin:0;
   padding:0;
   color:red;
   font-size:4em;
   
}
h1 span
{
    display:table-cell;
    margin:0;
    padding:0;
    animation:animate 2s linear infinite;
    text-align:center;
}
h1 span:nth-child(1)
{
    animation-delay:0s;
}
h1 span:nth-child(2)
{
    animation-delay:0.25s;
}
h1 span:nth-child(3)
{
    animation-delay:0.5s;
}
h1 span:nth-child(4)
{
    animation-delay:0.75s;
}
h1 span:nth-child(5)
{
    animation-delay:1s;
}
h1 span:nth-child(6)
{
    animation-delay:1.25s;
}
h1 span:nth-child(7)
{
     animation-delay:1.5s;
}
h1 span:nth-child(8)
{
    animation-delay:1.75s;
}
@keyframes animate
{
   0%,100%
   {
      color:red;
      filter:blur(2px);
      text-shadow:0 0 10px #00b3ff;
                         0 0 20px #00b3ff,
                         0 0 40px #00b3ff,
                         0 0 80px #00b3ff,
                         0 0 120px #00b3ff,
                         0 0 200px #00b3ff,
                         0 0 300px #00b3ff,
                         0 0 400px #00b3ff;
   }
    5%,95%
   {
        color:black;
        filter:blur(0px);
        text-shadow:none;
   } 
}  
</style>
</head>
<body>
<center><h1>
  <span>S</span>
  <span>2</span>
  <span>T</span>
  <span>-</span>
  <span>R</span>
  <span>E</span>
  <span>N</span>
  <span>T</span>
  <span>S</span>
 </h1></center>
<br>



<center><font size="6" color="green">OUR SWAMINATHA TRAVELS CAR-RENTAL</font></center>
<br><br>
<fieldset width="200"><legend>TRAVELS CARS</legend>
<marquee direction="up" height="500" width="1300" onmouseover="this.stop( )" onmouseout="this.start()" noresize="noresize">

<center>
<img src="IMAGES/ambass.jpg" width="30%" height="40%" align="left">
<center><p><font size="6"><br><font color="blue">AMBASSTOR</font><br><font color="red">Rs. 1000.00 / Day onwards</font></p></center>
<br>
<img src="IMAGES/etios.jpg" width="30%" height="40%" align="right">
<center><p><font size="6"><br><font color="blue">ETIOS</font><br><font color="red">Rs. 1000.00 / Day onwards</font></p></center>
<br>
<img src="IMAGES/indica.jpg" width="30%" height="40%" align="left">
<center><p><font size="6"><br><font color="blue">INDICA</font><br><font color="red">Rs. 1200.00 / Day onwards</font></p></center>
<br>
<img src="IMAGES/indigo.jpg" width="30%" height="40%" align="right">
<center><p><font size="6"><br><font color="blue">INDIGO</font><br><font color="red">Rs. 1400.00 / Day onwards</font></p></center>
<br>
<img src="IMAGES/innovaswft.jpg" width="30%" height="40%" align="left">
<center><p><font size="6"><br><font color="blue">INNOVASWIFT</font><br><font color="red">Rs. 1300.00 / Day onwards</font></p></center>
<br>
<img src="IMAGES/tavera.jpg" width="30%" height="40%" align="right">
<center><p><font size="6"><br><font color="blue">TAVERA</font><br><font color="red">Rs. 1000.00 / Day onwards</font></p></center>
</center>

</marquee>
</fieldset>
<br>
   <center>
	<form action="s2t.php">
		<button type="submit" style="height:50px; width:10%;" onclick="oneway.html">OK</button>
	</form>
	</center>

</body>
</html>