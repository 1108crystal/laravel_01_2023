<!DOCTYPE html>
<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

<head>
    <style>
        body {
            margin: 30px;
        }

        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
            text-align: center;

        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>

<body>

    <h2>學生資料表</h2>
    <a href="{{route('student.create')}}"><button class="btn btn-primary">新增</button></a>
    <br>
    <table>

        <tr>
            <th>序</th>
            <th>姓名</th>
            <th>年齡</th>
            <th>電話</th>
            <th>email</th>
            <th>操作</th>
        </tr>
        @foreach ($data as $item)

        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->age}}</td>
            <td>{{$item->tel}}</td>
            <td>{{$item->email}}</td>
            <td>
                <a href="{{route('student.store')}}"><button class="btn btn-primary">修改</button></a>
                <a href=""><button class="btn btn-primary">刪除</button></a>
            </td>
        </tr>
        @endforeach
    </table>

</body>

</html>