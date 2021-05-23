<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/>
  <title>To Do List</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
</head>
<body>
<form action="/edit/<?php echo $task['id'] ?>" method='post' id="formToUpdateTask">
    <input type="text" name="newTaskName" id="newTaskName" value="<?php echo $task['task'] ?>" required>
    <input type='submit' value='submit'>
</form>
</body>
</html>