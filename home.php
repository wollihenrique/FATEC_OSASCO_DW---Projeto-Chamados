<?php
// home.php
/*session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: index.php");
    exit();
}*/
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Home - Quatá</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 20px; }
        nav { background: #eee; padding: 10px; margin-bottom: 20px; }
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid #ccc; padding: 10px; text-align: left; }
        th { background: #f0f0f0; }
        .status-box { border: 1px solid #000; padding: 10px; width: 200px; }
    </style>
</head>
<body>
    <nav>
        Setores | Maquinários | Funcionários | Chamados | Meu perfil
    </nav>
    
    <h2>Meus Chamados</h2>
    <div class="status-box">
        <strong>Em andamento</strong><br>
        PRT Nº139<br>
        PRT Nº3019<br>
        PRT Nº216<br>
        PRT Nº261
    </div>

    <h3>Lista de Protocolos</h3>
    <table>
        <tr>
            <th>Protocolo</th>
            <th>Título</th>
            <th>Data/Hora</th>
        </tr>
        <tr>
            <td>098</td>
            <td>Versão antiga Windows</td>
            <td>14/04/2026 14:45</td>
        </tr>
        <tr>
            <td>348</td>
            <td>Notebook não inicia</td>
            <td>13/04/2026 19:39</td>
        </tr>
    </table>
    
    <br>
    <a href="index.php">Sair</a>
</body>
</html>