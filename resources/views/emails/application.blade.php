<!DOCTYPE html>
<html>

<head>
    <title>Application Submitted</title>
</head>

<body>
    <h1>New Application Submitted</h1>
    <p><strong>Name:</strong> {{ $data['name'] }}</p>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>
    <p><strong>Phone Number:</strong> {{ $data['phone_number'] }}</p>
    <p><strong>Profile Picture:</strong> <a href="{{ $data['attachment'] }}">View</a></p>

</body>

</html>
