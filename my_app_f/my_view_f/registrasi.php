<html>
<head>
<title>Pendaftaran User Baru</title>
<style type="text/css">
h3{font-family: Calibri; font-size: 22pt; font-style: normal; font-weight: bold; color:Red;
text-align: center; text-decoration: underline }
table{font-family: Calibri; color:Black; font-size: 11pt; font-style: normal;
text-align:; background-color: White; border-collapse: collapse; border: 2px solid navy}
table.inner{border: 0px}
</style>
</head>
 
<body>
<h3>Pendaftaran User Baru</h3>
<form action="<?php echo base_url(); ?>User/addData_user" method="POST">
 
<table align="center" cellpadding = "10">
 
<!----- Username ---------------------------------------------------------->
<tr>
<td>Username</td>
<td><input type="text" name="username" maxlength="30"/>
</td>
</tr>
 
<!----- Password ---------------------------------------------------------->
<tr>
<td>Password</td>
<td><input type="password" name="password" maxlength="130"/>
</td>
</tr>
 
 <!----- Nama ---------------------------------------------------------->
<tr>
<td>Nama</td>
<td><input type="text" name="nama" maxlength="100" /></td>
</tr>

<!----- Email ---------------------------------------------------------->
<tr>
<td>Email</td>
<td><input type="text" name="email" maxlength="50" /></td>
</tr>

<!----- Date Of Birth -------------------------------------------------------->
<tr>
<td>Tanggal Lahir</td>
 
<td>
<select name="Hari" id="Hari">
<option value="-1">Hari:</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
 
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
 
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
 
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
 
<option value="31">31</option>
</select>
 
<select id="Bulan" name="Bulan">
<option value="-1">Bulan:</option>
<option value="January">1</option>
<option value="February">2</option>
<option value="March">3</option>
<option value="April">4</option>
<option value="May">5</option>
<option value="June">6</option>
<option value="July">7</option>
<option value="August">8</option>
<option value="September">9</option>
<option value="October">10</option>
<option value="November">11</option>
<option value="December">12</option>
</select>
 
<select name="Tahun" id="Tahun">
 
<option value="-1">Tahun:</option>
<option value="2012">2012</option>
<option value="2011">2011</option>
<option value="2010">2010</option>
<option value="2009">2009</option>
<option value="2008">2008</option>
<option value="2007">2007</option>
<option value="2006">2006</option>
<option value="2005">2005</option>
<option value="2004">2004</option>
<option value="2003">2003</option>
<option value="2002">2002</option>
<option value="2001">2001</option>
<option value="2000">2000</option>
 
<option value="1999">1999</option>
<option value="1998">1998</option>
<option value="1997">1997</option>
<option value="1996">1996</option>
<option value="1995">1995</option>
<option value="1994">1994</option>
<option value="1993">1993</option>
<option value="1992">1992</option>
<option value="1991">1991</option>
<option value="1990">1990</option>
<option value="1989">1989</option>
<option value="1988">1988</option>
<option value="1987">1987</option>
<option value="1986">1986</option>
<option value="1985">1985</option>
<option value="1984">1984</option>
<option value="1983">1983</option>
<option value="1982">1982</option>
<option value="1981">1981</option>
<option value="1980">1980</option>
</select>
</td>
</tr>
 
 
<!---- Submit and Reset ------------------------------------------------->

<tr>
<td colspan="2" align="center">
<input type="submit" value="Submit">
<input type="reset" value="Reset">
</td>
</tr>
</table>
 
</form>
 
</body>
</html>