<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submission Received</title>
    <style>
        body { font-family: sans-serif; display: flex; justify-content: center; align-items: center; min-height: 100vh; background: #0f172a; color: #f8fafc; margin: 0; }
        .success-container { background: #1e293b; padding: 2.5rem; border-radius: 12px; box-shadow: 0 10px 15px -3px rgba(0,0,0,0.3); width: 100%; max-width: 500px; border: 1px solid #10b981; text-align: center; }
        .badge { background: #065f46; color: #34d399; padding: 0.5rem 1rem; border-radius: 50px; font-size: 0.875rem; font-weight: bold; display: inline-block; margin-bottom: 1rem; }
        h2 { margin-top: 0; color: #34d399; }
        .data-box { background: #0f172a; padding: 1.25rem; border-radius: 8px; text-align: left; margin: 1.5rem 0; border: 1px solid #334155; }
        .data-item { margin-bottom: 1rem; }
        .data-item:last-child { margin-bottom: 0; }
        .label { font-size: 0.8125rem; color: #64748b; text-transform: uppercase; letter-spacing: 0.05em; font-weight: bold; }
        .value { font-size: 1.125rem; color: #f8fafc; margin-top: 0.25rem; }
        .btn-back { display: inline-block; background: #334155; color: #f8fafc; text-decoration: none; padding: 0.75rem 1.5rem; border-radius: 6px; font-weight: bold; transition: background 0.2s; margin-top: 1rem; }
        .btn-back:hover { background: #475569; }
    </style>
</head>
<body>

    <div class="success-container">
        <div class="badge">✓ Success</div>
        <h2>Request Logged Successfully</h2>
        <p>The backend intercepted and processed the following dataset:</p>
        
        <div class="data-box">
            <div class="data-item">
                <div class="label">Client Name</div>
                <div class="value">{{ $name }}</div>
            </div>
            <div class="data-item">
                <div class="label">Email Address</div>
                <div class="value">{{ $email }}</div>
            </div>
            <div class="data-item">
                <div class="label">Project Description</div>
                <div class="value" style="white-space: pre-wrap;">{{ $messageContent }}</div>
            </div>
        </div>

        <a href="/contact" class="btn-back">← Submit Another Request</a>
    </div>

</body>
</html>