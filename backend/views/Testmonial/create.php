<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Testmonial $model */

$this->title = '';
$this->params['breadcrumbs'][] = ['label' => 'Testmonials', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="testmonial-create">

    <h1><?= Html::encode($this->title) ?></h1>

    



    <!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
  
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>

<h2>Upload Education Testmonials</h2>


<div class="container">
  <form action="/action_page.php">
    <div class="row">
      <div class="col-25">
        <label for="dname">Degree Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="dname" name="Degree Name" placeholder="Your Degree name...">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="iname">Institution Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="iname" name="institutionname" placeholder="Your Inistitution name..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
       
  <input type="file" id="myFile" name="Testmonial">
 
    
      </div>
      
    </div>
    ​ <input type="submit">
    
  </form>
</div>

</body>
</html>













</div>