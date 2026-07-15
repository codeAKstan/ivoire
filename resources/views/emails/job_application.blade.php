<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
            line-height: 1.6;
            color: #333333;
            background-color: #fafafa;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background: #ffffff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            border-top: 5px solid #cda151;
        }
        h2 {
            font-size: 20px;
            margin-top: 0;
            margin-bottom: 24px;
            color: #151515;
            border-bottom: 1px solid #eeeeee;
            padding-bottom: 12px;
        }
        .field {
            margin-bottom: 24px;
        }
        .label {
            font-size: 10px;
            font-weight: bold;
            text-transform: uppercase;
            color: #888888;
            margin-bottom: 6px;
            letter-spacing: 0.1em;
        }
        .value {
            font-size: 15px;
            color: #222222;
        }
        .value a {
            color: #cda151;
            text-decoration: none;
        }
        .value a:hover {
            text-decoration: underline;
        }
        .btn {
            display: inline-block;
            background-color: #cda151;
            color: #ffffff !important;
            text-decoration: none !important;
            padding: 12px 24px;
            border-radius: 6px;
            font-weight: bold;
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 0.08em;
            margin-top: 6px;
            box-shadow: 0 4px 6px rgba(205, 161, 81, 0.15);
        }
        .btn:hover {
            background-color: #b88f40;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>New Job Application Received</h2>
        
        <div class="field">
            <div class="label">Full Name</div>
            <div class="value">{{ $application->name }}</div>
        </div>
        
        <div class="field">
            <div class="label">Email Address</div>
            <div class="value">
                <a href="mailto:{{ $application->email }}">{{ $application->email }}</a>
            </div>
        </div>
        
        <div class="field">
            <div class="label">Position of Interest</div>
            <div class="value">{{ $application->role }}</div>
        </div>
        
        @if($application->linkedin)
        <div class="field">
            <div class="label">LinkedIn Profile</div>
            <div class="value">
                <a href="{{ $application->linkedin }}" target="_blank">{{ $application->linkedin }}</a>
            </div>
        </div>
        @endif
        
        <div class="field">
            <div class="label">Resume / CV Link</div>
            <div class="value">
                <a href="{{ $application->resume_url }}" class="btn" target="_blank">View Resume</a>
            </div>
        </div>
        
        <div class="field">
            <div class="label">Message / Cover Letter</div>
            <div class="value" style="white-space: pre-wrap; background: #f8f9fa; padding: 16px; border-radius: 6px; border: 1px dashed #e9ecef;">{{ $application->message }}</div>
        </div>
    </div>
</body>
</html>
