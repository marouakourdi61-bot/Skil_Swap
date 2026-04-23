<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>New Message</title>
</head>
<body style="font-family: Arial, sans-serif; line-height: 1.6;">

    <h2>New Message from Skill Swap</h2>

    <p><strong>From:</strong> {{ $data['from'] ?? 'N/A' }}</p>

    <p><strong>To:</strong> {{ $data['to_email'] ?? 'N/A' }}</p>

    <p><strong>Subject:</strong> {{ $data['subject'] ?? 'N/A' }}</p>

    <hr>

    <p>{{ $data['message'] ?? '' }}</p>

</body>
</html>