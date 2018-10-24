<!DOCTYPE html>
<html>
<style>
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
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
<body>

<h3>Using CSS to style an HTML Form</h3>

<div>
  <form action="/action_page.php">
    <label for="fname">ชื่อ</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">นามสกุล</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="country">เลือกเพศ</label>
    <select id="gender" name="gender">
      <option value="1">ชาย</option>
      <option value="0">หญิง</option>
    </select>
  
    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>
