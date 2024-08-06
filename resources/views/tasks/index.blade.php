<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Tasks</h1>
    <button><a href="/tasks/create">Create Task</a></button>
    @if ($tasks->count() > 0)
        <table>
            <tbody>
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                @foreach ($tasks as $task)
                    <tr>
                        <td>{{ $task->title }}</td>
                        <td>{{ $task->description }}</td>
                        <td>
                            <button>
                                <a href="/tasks/{{ $task->id }}/edit" style="text-decoration: none; color:black">
                                    Edit
                                </a>
                            </button>
                        </td>
                        <td>
                            <form method="POST" action="/tasks/{{ $task->id }}/delete">
                                @csrf
                                @method('DELETE')
                                <button>
                                    delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    @else
        <p>
            There are no tasks added yet.
        </p>
    @endif

</body>

</html>
