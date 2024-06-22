<!DOCTYPE html>
<html>

<head>
    <title>Application Submitted</title>
</head>

<body>
    <h1>New Application Submitted</h1>
    <p><strong>Name:</strong> {{ $data['name'] }}</p>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>
    <p><strong>Phone Number:</strong> {{ $data['number'] }}</p>
    <p><strong>Profile Picture:</strong> <a href="{{ $data['pic_url'] }}">View</a></p>
    <p><strong>Certificate 1:</strong> <a href="{{ $data['certificate1_url'] }}">View</a></p>
    <p><strong>Certificate 2:</strong> <a href="{{ $data['certificate2_url'] }}">View</a></p>
    <p><strong>Certificate 3:</strong> <a href="{{ $data['certificate3_url'] }}">View</a></p>
</body>

</html>
