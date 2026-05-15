<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Docker PHP Control Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;
        }

        body {
            background: #0b0f19;
            color: #fff;
            overflow-x: hidden;
        }

        /* Animated background grid */
        .background {
            position: fixed;
            width: 100%;
            height: 100%;
            background-image: 
                linear-gradient(rgba(255,255,255,0.05) 1px, transparent 1px),
                linear-gradient(90deg, rgba(255,255,255,0.05) 1px, transparent 1px);
            background-size: 50px 50px;
            animation: moveGrid 10s linear infinite;
            z-index: 0;
        }

        @keyframes moveGrid {
            from { transform: translateY(0); }
            to { transform: translateY(50px); }
        }

        /* Top bar */
        .navbar {
            position: relative;
            z-index: 2;
            display: flex;
            justify-content: space-between;
            padding: 20px 40px;
            background: rgba(255,255,255,0.03);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(255,255,255,0.1);
        }

        .logo {
            font-weight: 700;
            color: #13b261;
            letter-spacing: 1px;
        }

        .status {
            padding: 6px 12px;
            background: rgba(19,178,97,0.15);
            border: 1px solid #13b261;
            border-radius: 20px;
            font-size: 12px;
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% { box-shadow: 0 0 0 0 rgba(19,178,97,0.5); }
            70% { box-shadow: 0 0 0 10px rgba(19,178,97,0); }
            100% { box-shadow: 0 0 0 0 rgba(19,178,97,0); }
        }

        /* Main container */
        .container {
            position: relative;
            z-index: 2;
            padding: 60px 40px;
            max-width: 1200px;
            margin: auto;
        }

        .hero {
            text-align: center;
            margin-bottom: 50px;
        }

        .hero h1 {
            font-size: 42px;
            background: linear-gradient(90deg, #13b261, #00c3ff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: fadeIn 1.5s ease;
        }

        .hero p {
            margin-top: 10px;
            color: #aaa;
            animation: fadeIn 2s ease;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Cards */
        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }

        .card {
            background: rgba(255,255,255,0.05);
            border: 1px solid rgba(255,255,255,0.1);
            padding: 20px;
            border-radius: 16px;
            transition: 0.3s ease;
            backdrop-filter: blur(10px);
            position: relative;
            overflow: hidden;
        }

        .card:hover {
            transform: translateY(-5px);
            border-color: #13b261;
            box-shadow: 0 10px 30px rgba(0,0,0,0.5);
        }

        .card h3 {
            margin-bottom: 10px;
            color: #13b261;
        }

        .card p {
            color: #bbb;
            font-size: 14px;
        }

        /* Glowing line effect */
        .card::before {
            content: "";
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 2px;
            background: linear-gradient(90deg, transparent, #13b261, transparent);
            animation: slide 3s infinite;
        }

        @keyframes slide {
            0% { left: -100%; }
            100% { left: 100%; }
        }

        /* Footer */
        .footer {
            text-align: center;
            margin-top: 60px;
            color: #555;
            font-size: 13px;
        }
    </style>
</head>

<body>

<div class="background"></div>

<div class="navbar">
    <div class="logo">DockerPHP Panel</div>
    <div class="status">● System Running</div>
</div>

<div class="container">

    <div class="hero">
        <h1>Welcome to Your PHP Container</h1>
        <p>High-performance Dockerized PHP environment with modern UI dashboard</p>
    </div>

    <div class="grid">
        <div class="card">
            <h3>Server Status</h3>
            <p>All services are running smoothly inside your Docker container.</p>
        </div>

        <div class="card">
            <h3>PHP Version</h3>
            <p><?php echo "Current PHP: " . phpversion(); ?></p>
        </div>

        <div class="card">
            <h3>Container Info</h3>
            <p>Apache + PHP running in isolated environment.</p>
        </div>

        <div class="card">
            <h3>Developer Mode</h3>
            <p>Hot reload enabled for faster development workflow.</p>
        </div>
    </div>

    <div class="footer">
        Built with Docker • PHP • Love 🚀
    </div>

</div>

</body>
</html>