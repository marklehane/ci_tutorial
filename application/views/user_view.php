<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>User View</title>
</head>
<body>
<?php foreach ($results as $object): ?>

  <?php echo $object->username. "<br>" ?>

<?php endforeach; ?>
</body>
</html>
