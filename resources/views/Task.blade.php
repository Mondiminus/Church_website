<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/Button.css') }}">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <title>Tasks</title>

        <style>
        </style>
    </head>
    <body class="antialiased">
        <div name="menu" id="menu">
            <label class="buttons">
                <a class="btn-hover color-2 menu-btn" href="{{route("task.index")}}">See all tasks</a>
                <a class="btn-hover color-2 menu-btn" href="{{route("task.create")}}">Register a new task</a>
            </label>
        </div>
            <div class="postit">
                <form action="/task/{{$task->id}}" method="POST">
                    @method("DELETE")
                    <div class="control">
                        <button type="submit">X</button>
                    </div>
                <p>id: {{$task->id}}</p>
                <p>nome: {{$task->name}}</p>
                <p>A fazer: {{$task->TODO}}</p>
                <p>terminado: <?php
                        if ($task->is_finished)
                            echo "👍";
                        else
                            echo "👎";
                            ?>
                </p>
                <p>data: {{$task->date_launch}}</p>
                <label class="buttons">
                <a class="btn-hover color-2 menu-btn" href="{{route("task.edit", $task->id)}}">Edit Task</a>
                </label>
            </div>
    </body>
</html>
