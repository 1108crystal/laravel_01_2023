<!DOCTYPE html>
<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

<head>
    <style>
        body {
            margin: 30px;
            padding: 20px;
 

        }

        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;

        }

        td,
        th {
            border: 1px solid #dddddd;
            /* text-align: right; */
            padding: 8px;

        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>

<body>

    <h2>新增學生資料</h2>

    <br>
    <form action="{{route('student.store')}}" method="post">
        @csrf
        <table>
            <tr>
                <td>姓名</td>
                <td><input type="text" name="name" id="name"></td>
            </tr>
            <tr>
                <td>年齡</td>
                <td><input type="text" name="age" id="age"></td>
            </tr>
            <tr>
                <td>電話</td>
                <td><input type="text" name="tel" id="tel"></td>
            </tr>
            <tr>
                <td>email</td>
                <td><input type="text" name="email" id="email"></td>
            </tr>
            <tr>
                <td>


                </td>
                <td>
                    <input type="submit" class="btn btn-primary" value="確認">
                    <input type="reset" class="btn btn-primary" value="取消">
                </td>
            </tr>



        </table>
    </form>
</body>

</html>