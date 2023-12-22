<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Success</title>
</head>
<body class="bg-gray-50 text-gray-600 ml-4 mt-2">
    <h1 class="font-bold text-xl underline ml-2 mb-2">Success of Students</h1>
    <table class=" table-auto   mb-5">
        <thead class="bg-gray-300 border-2 border-gray-200">
            <tr>
                <th class="p-3 font-bold tracking-wide text-left">ID</th>
                <th class="p-3 font-bold tracking-wide text-left">Subject</th>
                <th class="p-3 font-bold tracking-wide text-left">Points</th>
                <th class="p-3 font-bold tracking-wide text-left">Assessment Date</th>
                <th class="p-3 font-bold tracking-wide text-left">Student Full Name</th>
            </tr>
        </thead>
        <tbody class="bg-gray-100">
        @foreach($studentsSuccess as $studentSuccess)
            <tr class="border-2 border-gray-200">
                <td class="p-3 text-sm border-2 border-gray-200">{{ $studentSuccess->id }}</td>
                <td class="p-3 text-sm border-2 border-gray-200">{{ $studentSuccess->subjectName }}</td>
                <td class="p-3 text-sm border-2 border-gray-200">{{ $studentSuccess->points }}</td>
                <td class="p-3 text-sm border-2 border-gray-200">{{ $studentSuccess->assessment_date }}</td>
                <td class="p-3 text-sm border-2 border-gray-200">{{ $studentSuccess->student->fullName}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <form action="{{route('success.index')}}" method="GET" id="search-form">
        <label class="text-gray-800">Search from date:</label>
        <input type="date" name="searchFromDate" id="searchFromDate" class="bg-amber-100 rounded-2xl p-1 mr-7">
        <input type="submit" value="Search" class="rounded-full py-2 px-3 uppercase text-xs font-bold cursor-pointer tracking-wider bg-gray-300 text-gray-900 hover:shadow-inner">
    </form>
    @if($errors->any())
        <div class="text-red-200 list-none">
            @foreach($errors->all() as $error)
                <li text-red-200>{{$error}}</li>
            @endforeach
        </div>
    @endif
</body>
</html>
