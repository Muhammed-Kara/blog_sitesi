<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>

<h1>A Fancy Table</h1>

<table id="customers">
  <tr>
    <th>Ad Soyad</th>
    <th>Telefon</th>
    <th>E-mail</th>
    <th>Konu </th>
    <th>Mesaj</th>
  </tr>

  <tr>
    <td>Ali</td>
    <td>541 456 78 90</td>
    <td> ali44@gmail.com</td>
    <td>test</td>
    <td>Merhaba dünya</td>
  </tr>

</table>

</body>
</html>