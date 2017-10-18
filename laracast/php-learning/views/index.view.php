
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Document</title>

  </head>
  <body>
    <nav> 
      <ul>
        <li><a href="/about.php">About</li>
        <li><a href="/contact.php">Contact</li>
      </ul>
    </nav>

    <h1>Home</h1>
    <ul>
      <?php foreach ($tasks as $task) : ?>
        <li>
          <?php if ($task->isComplete()) : ?>
            <strike> <?= $task->description; ?> </strike>
          <?php else: ?>
            <?= $task->description; ?>            
          <?php endif; ?>
        </li>
      <?php endforeach; ?>
    </ul>
  </body>
</html>