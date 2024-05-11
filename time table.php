<html>
<head>
<title>Time Table</title>
<link rel="stylesheet" href="styles.css">
<?php include('header.php'); ?>
<style>
table, th, td {
  border:1px solid black;
  background-color:"bisque";
}
</style>
</head>
<body>
<p class="hd1">Time Table</p>
<table>
<thead>
<tr>
  <th>Day</th>
    <th>8:00 - 9:00</th>
    <th>9:00 - 10:00</th>
    <th>10:00 - 11:00</th>
    <th>11:00 - 12:00</th>
    <th>12:00 - 1:00</th>
    <th>1:00 - 2:00</th>
    <th>2:00 - 3:00</th>
  </tr>
</thead>
<tbody>
  <tr>
  <th>Monday</th>
    <td align="center">CS</td>
    <td align="center">OS</td>
    <td align="center">DAA</td>
    <td rowspan="6" align="center">
    <h3>L<br>U<br>N<br>C<br>H</h3>
    </td>
    <td align="center">LIBRARY</td>
    <td align="center">PE&HV</td>
    <td align="center">AI</td>
  </tr>
  <tr>
    <th>Tuesday</th>
    <td colspan = 3 align="center">CS LAB</td>
    <td align="center">DAA</td>
    <td align="center">AI</td>
    <td align="center">OS</td>
  </tr>
  <tr>
    <th>Wednesday</th>
    <td colspan="3" align="center">AI LAB</td>
    <td align="center">SE</td>
    <td align="center">OS</td>
    <td align="center">CS</td>
  </tr>
  <tr>
    <th>Thursday</th>
    <td colspan="3" align="center">DAA LAB</td>
    <td align="center">CS</td>
    <td align="center">DAA</td>
    <td align="center">SE</td>
  </tr>
  <tr>
    <th>Friday</th>
    <td align="center">SE</td>
    <td align="center">PE&HV</td>
    <td align="center">AI</td>
    <td align="center">SS</td>
    <td colspan=2 align="center">SS LAB</td>
  </tr>
  <tr>
    <th>Saturday</th>
    <td align="center">SE</td>
    <td align="center">CS</td>
    <td align="center">DAA</td>
    <td align="center">OS</td>
    <td align="center">AI</td>
    <td align="center">SPORTS</td>
  </tr>
</tbody>
</table>
<?php include('footer.php'); ?>
</body>
</html>