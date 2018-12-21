<?php

?>
<!DOCTYPE html>
<html>
<style>
select {
    width: 30%;
    padding: 1px 1px;
    border: none;
    border-radius: 4px;
    background-color: #f1f1f1;
}
</style>
<body style="background:url(1.jpg);background-repeat:no-repeat;background-size:125%">
<iframe  src="http://free.timeanddate.com/clock/i5hvn6k5/n73/szw160/szh160/hoc000/hbw4/cf100/hgr0/fav0/fiv0/mqc000/mqs3/mql25/mqw6/mqd96/mhc000/mhs3/mhl20/mhw6/mhd96/mmc000/mms3/mml10/mmw2/mmd96/hhw16/hmw16/hmr4/hsc000/hss3/hsl90" frameborder="0" width="160" height="160" style="float:right;font-size:45pt;text-align:right"><span background="1.jpg"></iframe>
<h1 style="font-size:45pt;text-align:center;color:#cc9900;><b><span background="1.jpg">METRO RAIL</b></h1>
<form action="TICKET.php"method="post">

<p style="font-size:20pt;color:red">leavingfrom</p>
  <select name=leavingfrom style="font-size:20pt">
    <option value="Banani">Banani</option>
    <option value="Tejgaon">Tejgaon</option>
    <option value="Farmgate">Farmgate</option>
	<option value="Bijoysorony">Bijoysorony</option>
	<option value="Mirpur10">Mirpur10</option>
	</select>
<p style="font-size:20pt;color:red">goingto</p>
  <select name=goingto style="font-size:20pt">
  <option value="Mirpur10">Mirpur10</option>
  <option value="Bijoysorony">Bijoysorony</option>
  <option value="Farmgate">Farmgate</option>
   <option value="Tejgaon">Tejgaon</option>
    <option value="Banani">Banani</option>
 </select>
<p style="font-size:20pt;color:red">departingon</p>
  <select name=departingon style="font-size:20pt">
  <option value="8:00AM">8:00AM</option>
  <option value="10:00AM">10:00AM</option>
  <option value="12:00PM">12:00PM</option>
   <option value="06:OOPM">06:OOPM</option>
    <option value="08:OOPM">08:OOPM</option>
 </select>

 <p style="font-size:20pt;color:red">coachtype</p>
  <select name=coachtype style="font-size:20pt">
  <option value="AC">AC</option>
  <option value="NON AC">NON AC</option>
  </select>
<p style="font-size:20pt;color:red">trainname</p>
  <select name=trainname style="font-size:20pt">
  <option value="C">C</option>
  <option value="C++">C++</option>
  <option value="JAVA">JAVA</option>
   <option value="C#" >C#</option>
    <option value="PHP">PHP</option>
 </select><br>
 <input type="submit" value="search" style="font-size:20pt;color:red">
	
</form>
</body>
</html>




