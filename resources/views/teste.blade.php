<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Bem-vindo</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(to right, #74ebd5, #ACB6E5);
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .card {
      background-color: #ffffff;
      padding: 2rem;
      border-radius: 1rem;
      box-shadow: 0 0 20px rgba(0,0,0,0.1);
      width: 100%;
      max-width: 400px;
      text-align: center;
    }

    .card h1 {
      color: #333;
      margin-bottom: 0.5rem;
    }

    .card p {
      color: #555;
      margin-bottom: 1.5rem;
    }

    .btn {
      display: inline-block;
      padding: 0.75rem 1.5rem;
      background-color: #4CAF50;
      color: white;
      border: none;
      border-radius: 0.5rem;
      font-size: 1rem;
      cursor: pointer;
      transition: background-color 0.3s ease;
      text-decoration: none;
    }

    .btn:hover {
      background-color: #45a049;
    }

    .footer {
      margin-top: 1rem;
      text-align: center;
      font-size: 0.9rem;
      color: #666;
    }
  </style>
</head>
<body>

  <div class="card">
    <h1>🎉 Bem-vindo!</h1>
    <p>Você entrou com sucesso no sistema.<br>Estamos felizes em ter você aqui.</p>
    <a href="/dashboard" class="btn">Ir para o painel</a>
    <div class="footer">
      &copy; 2025 - Sistema X
    </div>
  </div>

</body>
</html>
