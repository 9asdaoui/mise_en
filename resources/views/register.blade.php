<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <form action="{{route('register')}}" method="POST">
            @csrf
            <input type="email" name="email" placeholder="email">
            <input type="name" name="name" placeholder="name">
            <input type="password" name="password" placeholder="password">
            <select name="role_id">
                @foreach ($roles as $role)
                    <option value={{$role->id}}>{{$role->name}}</option>
                @endforeach 
            </select>   
            <button type="submit"> sing in </button>     
        </form>
    </div>
</body>
</html>