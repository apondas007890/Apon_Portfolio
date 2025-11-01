<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>New Message - Portfolio Contact</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f9fafb;
      margin: 0;
      padding: 0;
      color: #111827;
    }

    .email-wrapper {
      max-width: 600px;
      margin: 30px auto;
      background-color: #ffffff;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 6px 20px rgba(0, 0, 0, 0.08);
      border: 1px solid #e5e7eb;
    }

    .header {
      background: linear-gradient(135deg, #0ea5e9, #38bdf8);
      color: #ffffff;
      text-align: center;
      padding: 20px 10px;
    }

    .header h1 {
      margin: 0;
      font-size: 22px;
      letter-spacing: 0.5px;
    }

    .content {
      padding: 25px 30px;
      line-height: 1.6;
    }

    .content p {
      margin: 0 0 12px;
    }

    .content strong {
      color: #0f172a;
    }

    .message-box {
      background-color: #f1f5f9;
      border-left: 4px solid #0ea5e9;
      padding: 15px;
      border-radius: 8px;
      font-style: italic;
      color: #334155;
      margin-top: 10px;
      white-space: pre-line;
    }

    .footer {
      text-align: center;
      font-size: 13px;
      color: #6b7280;
      padding: 20px;
      border-top: 1px solid #e5e7eb;
      background-color: #f9fafb;
    }
  </style>
</head>
<body>
  <div class="email-wrapper">
    <div class="header">
      <h1>📩 New Message from Your Portfolio</h1>
    </div>

    <div class="content">
      <p><strong>Name:</strong> {{ $name }}</p>
      <p><strong>Email:</strong> {{ $email }}</p>

      <p><strong>Message:</strong></p>
      <div class="message-box">
        {{ $body }}
      </div>
    </div>

    <div class="footer">
      <p>This message was sent from your portfolio website contact form.</p>
      <p style="margin-top: 5px;">&copy; {{ date('Y') }} Apon Portfolio</p>
    </div>
  </div>
</body>
</html>
