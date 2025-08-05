<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Tela de Teste</title>
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
    }

    .card h2 {
      text-align: center;
      margin-bottom: 1.5rem;
      color: #333;
    }

    .form-group {
      margin-bottom: 1rem;
    }

    .form-group label {
      display: block;
      margin-bottom: 0.5rem;
      color: #555;
    }

    .form-group input,
    .form-group select,
    .form-group textarea {
      width: 100%;
      padding: 0.75rem;
      border-radius: 0.5rem;
      border: 1px solid #ccc;
      font-size: 1rem;
      box-sizing: border-box;
    }

    .form-group textarea {
      resize: vertical;
      min-height: 100px;
    }

    .btn {
      width: 100%;
      padding: 0.75rem;
      background-color: #4CAF50;
      color: white;
      border: none;
      border-radius: 0.5rem;
      font-size: 1rem;
      cursor: pointer;
      transition: background-color 0.3s ease;
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
    <h2>Formulário de Teste</h2>
    <form>
      <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" id="nome" placeholder="Digite seu nome">
      </div>

      <div class="form-group">
        <label for="email">E-mail</label>
        <input type="email" id="email" placeholder="Digite seu e-mail">
      </div>

      <div class="form-group">
        <label for="setor">Setor</label>
        <select id="setor">
          <option value="">Selecione</option>
          <option value="TI">TI</option>
          <option value="RH">RH</option>
          <option value="Financeiro">Financeiro</option>
        </select>
      </div>

      <div class="form-group">
        <label for="mensagem">Mensagem</label>
        <textarea id="mensagem" placeholder="Digite sua mensagem"></textarea>
      </div>

      <button class="btn" type="submit">Enviar</button>
    </form>

    <div class="footer">
      &copy; 2025 - Tela de Teste
    </div>
  </div>

</body>
</html>
