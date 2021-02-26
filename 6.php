
<?php
#ex6 write a script that displays data in bootstrap cards

$data = [
    [
      'name' => 'ahmed hamdy',
       'job' => 'front-end',
      'experience' => 3
     ],
  
     [
         'name' => 'mohammed shaker',
         'job' => 'back-end',
         'experience' => 2
     ],
  
     [
         'name' => 'ali hasan',
         'job' => 'full-stack',
         'experience' => 4
     ],
 ];
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <?php foreach($data as $singleData) { ?>
    <div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">name is <?= $singleData['name'] ?></h5>
        <p class="card-text">job is <?= $singleData['job'] ?></p>
        <p class="card-text">experience is <?= $singleData['experience'] ?></p>
        <hr>
    </div>
    </div>
    <?php } ?>
</body>
</html>