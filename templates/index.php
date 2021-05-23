<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>To Do List</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action='/add' method='post' id="formToAddTask">
        <input type="text" name="addTaskHere" id="addTaskHere" placeholder="Write task here" required>
        <input type='submit' value='submit'>
    </form>

    <?php
    foreach ($tasks as $task) {
        echo "<p>" . $task['task'];
        echo " <a href='/mark/" . $task['id'] . "'><button>Done</button></a>";
        echo " <a href='/edit/" . $task['id'] . "'><button>Edit</button></a>";
        echo " <a href='/delete/" . $task['id'] . "'><button>Delete</button></a>" . "</p>";
    }
    ?>
    <a href='/done'><button>Look at all you did :D</button></a>


</body>
</html>