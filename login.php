<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background: linear-gradient(135deg, #667eea, #764ba2);
    }
    .card {
      background: rgba(255,255,255,0.1);
      padding: 30px;
      border-radius: 15px;
      backdrop-filter: blur(10px);
      box-shadow: 0 8px 25px rgba(0,0,0,0.3);
      width: 320px;
      color: #fff;
      text-align: center;
    }
    .card h1 { margin-bottom: 20px; font-size: 22px; }
    input {
      width: 100%;
      padding: 12px;
      margin: 10px 0;
      border: none;
      border-radius: 8px;
      outline: none;
    }
    button {
      width: 100%;
      padding: 12px;
      border: none;
      border-radius: 8px;
      background: #ff7eb3;
      color: #fff;
      font-weight: bold;
      cursor: pointer;
      transition: 0.2s;
    }
    button:hover { background: #ff4f81; }
  </style>
</head>
<body>
  <div class="card">
    <h1>Hii👋</h1>
    <form>
      <input type="email" placeholder="Email" required>
      <input type="password" placeholder="Password" required>
      <button type="submit">Masuk</button>
    </form>
  </div>
</body>
</html>
