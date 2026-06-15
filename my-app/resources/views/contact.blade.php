<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <style>
        body { font-family: sans-serif; display: flex; justify-content: center; align-items: center; min-height: 100vh; background: #0f172a; color: #f8fafc; margin: 0; }
        .form-container { background: #1e293b; padding: 2.5rem; border-radius: 12px; box-shadow: 0 10px 15px -3px rgba(0,0,0,0.3); width: 100%; max-width: 450px; border: 1px solid #334155; }
        h2 { margin-top: 0; color: #38bdf8; border-bottom: 2px solid #334155; padding-bottom: 0.5rem; }
        .form-group { margin-bottom: 1.25rem; }
        label { display: block; margin-bottom: 0.5rem; font-size: 0.875rem; color: #94a3b8; }
        input, textarea { width: 100%; padding: 0.75rem; border-radius: 6px; border: 1px solid #475569; background: #0f172a; color: #fff; box-sizing: border-box; font-size: 1rem; }
        input:focus, textarea:focus { outline: 2px solid #38bdf8; border-color: transparent; }
        button { width: 100%; background: #38bdf8; color: #0f172a; border: none; padding: 0.75rem; border-radius: 6px; font-weight: bold; font-size: 1rem; cursor: pointer; transition: background 0.2s; }
        button:hover { background: #0ea5e9; }
    </style>
</head>
<body>

    <div class="form-container">
        <h2>Submit a Project Request</h2>
        
        <form action="/submit-contact" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Your Name</label>
                <input type="text" id="name" name="name" required placeholder="John Doe">
            </div>

            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" required placeholder="john@example.com">
            </div>

            <div class="form-group">
                <label for="message">Project Description / Message</label>
                <textarea id="message" name="message" rows="4" required placeholder="Describe your project specifications..."></textarea>
            </div>

            <button type="submit">Send Message</button>
        </form>
    </div>

</body>
</html>