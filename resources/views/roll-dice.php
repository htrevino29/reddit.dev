<!DOCTYPE html>
<html lang="en">
<head>
    <title>Roll dice</title>
</head>
<body>
   
     <h1>roll dice game</h1>
     <h1>dice roll: <?= $dice_roll; ?></h1>
     <h1>guess: <?= $guess; ?> <h1>
     <?php if ($correct): ?>
     	<p>You got it</p>
     <?php endif ?>
    
</body>
</html>