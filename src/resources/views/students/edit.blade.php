<!DOCTYPE html>
<html>

<head>
    <title>Edit Student</title>
</head>

<body>
    <h1>Edit Student</h1>
    <form action="{{ route('students.update', $student->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="{{ $student->name }}">
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="{{ $student->email }}">
        </div>
        <div>
            <label for="phone">Phone:</label>
            <input type="text" id="phone" name="phone" value="{{ $student->phone }}">
        </div>
        <div>
            <label for="date_of_birth">Date
                of Birth:</label>
            <input type="date" id="date_of_birth" name="date_of_birth" value="{{ $student->date_of_birth }}">
        </div>
        <div>
            <label for="address">Address:</label>
            <input type="text" id="address" name="address" value="{{ $student->address }}">
        </div>
        <button type="submit">Update</button>
    </form>
</body>

</html>
