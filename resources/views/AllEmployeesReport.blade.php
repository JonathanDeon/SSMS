<!DOCTYPE html>
<html>
<head>
    <style>
        table,tr,td,th{
            outline: 1px black solid;

        }
        td{
            padding: 5px;
        }
    </style>
</head>
<body>
    <div>
        <h1>All Employee Details</h1>
    </div>
    <div>
    <table>
        <tbody>
        <tr>
            <th>Employee Name</th>
            <th>NIC</th>
            <th>Address</th>
            <th>Gender</th>
            <th>Joined Date</th>
            <th>Designation</th>
            <th>Branch</th>
        </tr>
        @foreach($employees as $employee)
            <tr>
                <td>{{$employee->name}}</td>
                <td>{{$employee->NIC}}</td>
                <td>{{$employee->address}}</td>
                <td>{{$employee->gender}}</td>
                <td>{{$employee->joined_date}}</td>
                <td>{{$employee->title}}</td>
                <td>{{$employee->bname}}</td>
            </tr>
        @endforeach
        </tbody></table>
</div>
</body>
</html>