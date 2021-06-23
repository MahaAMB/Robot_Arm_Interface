<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- ------~~ CSS & HTML CODE ~~------ !--> 
<head>
  <meta charset="UTF-8">
  <title>Control Page</title>
       
 <style>
body{
  min-height: 100px;
  padding: 0 75px;
  margin: 10;
  position: absolute;
  display:block;
  align-items: center;
  justify-content: center;
    
}
input[type=range] {
  -webkit-appearance: none;
  margin: 20px 0;
  width: 100%;
}
input[type=range]:focus {
  outline: none;
}
input[type=range]::-webkit-slider-runnable-track {
  width: 100%;
  height: 4px;
  cursor: pointer;
  animation: 0.2s;
  background: #d3d3d3;
  border-radius: 25px;
}
input[type=range]::-webkit-slider-thumb {
  height: 20px;
  width: 20px;
  border-radius: 50%;
  background: #fff;
  box-shadow: 0 0 4px 0 rgba(0,0,0, 1);
  cursor: pointer;
  -webkit-appearance: none;
  margin-top: -8px;
}
input[type=range]:focus::-webkit-slider-runnable-track {
  background: #009A8F;
}
.range-wrap{
  width: 500px;
  position: relative;
}
.range-value{
  position: absolute;
  top: -50%;
}
.range-value span{
  width: 30px;
  height: 24px;
  line-height: 24px;
  text-align: center;
  background: #009A8F;
  color: #fff;
  font-size: 12px;
  display: block;
  position: absolute;
  left: 50%;
  transform: translate(-50%, 0);
  border-radius: 6px;
}
.range-value span:before{
  content: "";
  position: absolute;
  width: 0;
  height: 0;
  border-top: 10px solid #009A8F;
  border-left: 5px solid transparent;
  border-right: 5px solid transparent;
  top: 100%;
  left: 50%;
  margin-left: -5px;
  margin-top: -1px;
}
    </style>
</head>
<body>
    <form action="" method="post">
        
    <p><strong>Engine 1 <br></strong> </p>
  <div class="range-wrap">
    <div class="range-value" id="rangeI"></div>
    <input id="range1" type="range" min="0" max="180" value="90" step="1" name="engine1">
  </div>
    
    <p><strong>Engine 2 <br></strong> </p>
  <div class="range-wrap">
    <div class="range-value" id="rangeII"></div>
    <input id="range2" type="range" min="0" max="180" value="90" step="1" name="engine2">
  </div>
    
    <p><strong>Engine 3 <br></strong> </p>
  <div class="range-wrap">
    <div class="range-value" id="rangeIII"></div>
    <input id="range3" type="range" min="0" max="180" value="90" step="1" name="engine3">
  </div>
    
    <p><strong>Engine 4 <br></strong> </p>
  <div class="range-wrap">
    <div class="range-value" id="rangeIV"></div>
    <input id="range4" type="range" min="0" max="180" value="90" step="1" name="engine4">
  </div>
    
    <p><strong>Engine 5 <br></strong> </p>
  <div class="range-wrap">
    <div class="range-value" id="rangeV"></div>
    <input id="range5" type="range" min="0" max="180" value="90" step="1" name="engine5">
  </div>
    
    <p><strong>Engine 6 <br></strong> </p>
  <div class="range-wrap">
    <div class="range-value" id="rangeVI"></div>
    <input id="range6" type="range" min="0" max="180" value="90" step="1" name="engine6">
  </div>
    
    <button type="submit" name="saveBtn">Save</button>
    <button type="submit" name="onBtn">On</button>
    <button type="submit" name="offBtn">Off</button>
        
    
<!-- ------~~ JS CODE ~~------ !-->
    <script>
 const range1 = document.getElementById('range1'),
  rangeI = document.getElementById('rangeI'),
  setValue1 = ()=>{
    const newValue1 = Number( (range1.value - range1.min) * 100 / (range1.max - range1.min) ), newPosition1 = 10 - (newValue1 * 0.2);
    rangeI.innerHTML = `<span>${range1.value}</span>`;
    rangeI.style.left = `calc(${newValue1}% + (${newPosition1}px))`;
  };
document.addEventListener("DOMContentLoaded", setValue1);
range1.addEventListener('input', setValue1);
        
  const range2 = document.getElementById('range2'),
  rangeII = document.getElementById('rangeII'),
  setValue2 = ()=>{
    const newValue2 = Number( (range2.value - range2.min) * 100 / (range2.max - range2.min) ), newPosition2 = 10 - (newValue2 * 0.2);
    rangeII.innerHTML = `<span>${range2.value}</span>`;
    rangeII.style.left = `calc(${newValue2}% + (${newPosition2}px))`;
  };
document.addEventListener("DOMContentLoaded", setValue2);
range2.addEventListener('input', setValue2);
        
        const range3 = document.getElementById('range3'),
  rangeIII = document.getElementById('rangeIII'),
  setValue3 = ()=>{
    const newValue3 = Number( (range3.value - range3.min) * 100 / (range3.max - range3.min) ), newPosition3 = 10 - (newValue3 * 0.2);
    rangeIII.innerHTML = `<span>${range3.value}</span>`;
    rangeIII.style.left = `calc(${newValue3}% + (${newPosition3}px))`;
  };
document.addEventListener("DOMContentLoaded", setValue3);
range3.addEventListener('input', setValue3);
        
        const range4 = document.getElementById('range4'),
  rangeIV = document.getElementById('rangeIV'),
  setValue4 = ()=>{
    const newValue4 = Number( (range4.value - range4.min) * 100 / (range3.max - range4.min) ), newPosition4 = 10 - (newValue4 * 0.2);
    rangeIV.innerHTML = `<span>${range4.value}</span>`;
    rangeIV.style.left = `calc(${newValue4}% + (${newPosition4}px))`;
  };
document.addEventListener("DOMContentLoaded", setValue4);
range4.addEventListener('input', setValue4);
        
        const range5 = document.getElementById('range5'),
  rangeV = document.getElementById('rangeV'),
  setValue5 = ()=>{
    const newValue5 = Number( (range5.value - range5.min) * 100 / (range5.max - range5.min) ), newPosition5 = 10 - (newValue5 * 0.2);
    rangeV.innerHTML = `<span>${range5.value}</span>`;
    rangeV.style.left = `calc(${newValue5}% + (${newPosition5}px))`;
  };
document.addEventListener("DOMContentLoaded", setValue5);
range5.addEventListener('input', setValue5);
        
        const range6 = document.getElementById('range6'),
  rangeVI = document.getElementById('rangeVI'),
  setValue6 = ()=>{
    const newValue6 = Number( (range6.value - range6.min) * 100 / (range6.max - range6.min) ), newPosition6 = 10 - (newValue6 * 0.2);
    rangeVI.innerHTML = `<span>${range6.value}</span>`;
    rangeVI.style.left = `calc(${newValue6}% + (${newPosition6}px))`;
  };
document.addEventListener("DOMContentLoaded", setValue6);
range6.addEventListener('input', setValue6);
    </script>
    
  
<!-- ------~~ PHP CODE ~~------ !-->
    <?php

    /* DB Connection */
    $db_con = new mysqli('localhost:3306','root', '', 'robotarmtask1') or Die("\n Unable to connect:"  . mysqli_error());
?>
    
    <?php
/* Save button is pressed to update the table with the degree */

if(isset($_POST["saveBtn"])){
    $RangeVal = $_POST['engine1'];
    $sql = "UPDATE enginestable SET Degree = '$RangeVal' WHERE EngineNum = '1'";
    $query = mysqli_query($db_con,$sql);
    $RangeVal = $_POST['engine2'];
    $sql = "UPDATE enginestable SET Degree = '$RangeVal' WHERE EngineNum = '2'";
    $query = mysqli_query($db_con,$sql);
    $RangeVal = $_POST['engine3'];
    $sql = "UPDATE enginestable SET Degree = '$RangeVal' WHERE EngineNum = '3'";
    $query = mysqli_query($db_con,$sql);
    $RangeVal = $_POST['engine4'];
    $sql = "UPDATE enginestable SET Degree = '$RangeVal' WHERE EngineNum = '4'";
    $query = mysqli_query($db_con,$sql);
    $RangeVal = $_POST['engine5'];
    $sql = "UPDATE enginestable SET Degree = '$RangeVal' WHERE EngineNum = '5'";
    $query = mysqli_query($db_con,$sql);
    $RangeVal = $_POST['engine6'];
    $sql = "UPDATE enginestable SET Degree = '$RangeVal' WHERE EngineNum = '6'";
    $query = mysqli_query($db_con,$sql);
}

/* On button is pressed to update the table with the state */

if(isset($_POST["onBtn"])){
    $sql = "UPDATE enginestable SET State = '1' where State = '0'";
    $query = mysqli_query($db_con,$sql);
}

/* Off button is pressed to update the table with the state */
if(isset($_POST["offBtn"])){
        $sql = "UPDATE enginestable SET State = '0' where State = '1'";
        $query = mysqli_query($db_con,$sql);
}

?>
    </form>
    </body>
</html>