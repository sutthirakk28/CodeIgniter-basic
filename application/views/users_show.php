<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
<style> 

#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
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
    background-color: #4CAF50;
    color: white;
}
th,.center {
    text-align: center;
}
input[type=text], select {
    width: 60%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 60%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>
</head>
<body>
<div>
  <form method="post" action="../users/add_user">
    <input type="text" id="fname" name="firstname" placeholder="ชื่อ">

    <input type="text" id="lname" name="lastname" placeholder="นามสกุล">

    <select id="gender" name="gender">
      <option value="1">ชาย</option>
      <option value="0">หญิง</option>
    </select>
  
    <input type="submit" value="Submit">
  </form>
</div>
<h3><?php echo $heading;?></h3>
<table id="customers">
  <tr>
    <th class="center">ID</th>
    <th>ชื่อ</th>
    <th>เพศ</th>
  </tr>
    <?php foreach ($list_user as $lists):?>
    <tr>
        <td class="center"><?php echo $lists->p_id;?></td>
        <td><?php echo $lists->p_name;?></td>
        <td><?php
         if($lists->gender == 0){
            echo 'ชาย';
         }else{
            echo 'หญิง';
         }
         ?>
         </td>
    </tr>
    <?php endforeach;?>
  
</table>

</body>
</html>