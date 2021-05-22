<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>To Do List</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <h2>Tasks Done</h2>
    <?php
    foreach ($tasks as $task) {
        echo "<p>" . $task['task'] . "</p>";
    }
    ?>

</body>
</html>