<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8">
    <title>New Message</title>
</head>
<body style="margin:0; padding:0; background-color:#f4f4f7; font-family: Arial, sans-serif;">


<table width="100%" cellpadding="0" cellspacing="0" style="padding: 30px 0;">
    <tr>
        <td align="center">

            <!-- Card -->
            <table width="600" cellpadding="0" cellspacing="0" style="background:#ffffff; border-radius:10px; overflow:hidden; box-shadow:0 10px 25px rgba(0,0,0,0.05);">

                <!-- Header -->
                <tr>
                    <td style="background:#ff7a18; padding:20px; text-align:center; color:white;">
                        <h2 style="margin:0;"> New Message</h2>
                        <p style="margin:5px 0 0; font-size:14px;">Skill Swap Notification</p>
                    </td>
                </tr>

                <!-- Content -->
                <tr>
                    <td style="padding:30px; color:#333;">
                        
                        <p style="margin-bottom:20px;">You’ve received a new message:</p>

                        <table width="100%" cellpadding="10" cellspacing="0" style="border-collapse:collapse;">
                            <tr style="background:#f9f9f9;">
                                <td><strong>From</strong></td>
                                <td>{{ $data['from'] ?? 'N/A' }}</td>
                            </tr>
                            <tr>
                                <td><strong>To</strong></td>
                                <td>{{ $data['to_email'] ?? 'N/A' }}</td>
                            </tr>
                            <tr style="background:#f9f9f9;">
                                <td><strong>Subject</strong></td>
                                <td>{{ $data['subject'] ?? 'N/A' }}</td>
                            </tr>
                        </table>

                        <!-- Message Box -->
                        <div style="margin-top:25px; padding:20px; background:#fff7f0; border-left:4px solid #ff7a18; border-radius:6px;">
                            <p style="margin:0;">{{ $data['message'] ?? '' }}</p>
                        </div>

                        <!-- Button -->
                        <div style="text-align:center; margin-top:30px;">
                            <a href="#" style="background:#ff7a18; color:#fff; padding:12px 25px; text-decoration:none; border-radius:5px; display:inline-block;">
                                View Message
                            </a>
                        </div>

                    </td>
                </tr>

                <!-- Footer -->
                <tr>
                    <td style="background:#f4f4f7; text-align:center; padding:15px; font-size:12px; color:#888;">
                        © {{ date('Y') }} Skill Swap — All rights reserved
                    </td>
                </tr>

            </table>

        </td>
    </tr>
</table>


</body>
</html>
