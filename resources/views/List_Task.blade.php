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
                <a class="btn-hover color-2 menu-btn" href="{{route("task.create")}}">Register a new task</a>
            </label>
        </div>
        <div class="task">
            @foreach ($tasks as $task)
            <div class="task">
            <a href="{{ route("task.show", $task->id ) }}">
                <div class="postit">

                        <p>id: {{$task->id}}</p>
                        <p>name: {{$task->name}}</p>
                        <p>To Do: {{$task->TODO}}</p>
                        <p>Is finished?: <?php
                                if ($task->is_finished)
                                    echo "👍";
                                else
                                    echo "👎";
                                    ?>
                        </p>
                        <p>Launch Date: {{$task->date_launch}}</p>
                </div>
                </a>
            </div>
            @endforeach
        </div>
    </body>
</html>
