<?php
$page_title = 'Início — Formulários Hospitalares';
require __DIR__ . '/config/database.php';
require __DIR__ . '/includes/header.php';
?>
<div class="card">
    <h1>Sistema de Formulários Hospitalares</h1>
    <p>Projeto base em PHP + MySQL preparado para execução local no XAMPP.</p>
    <div class="actions">
        <a class="btn" href="pacientes/novo.php">Cadastrar paciente</a>
        <a class="btn secondary" href="pacientes/listar.php">Consultar pacientes</a>
    </div>
</div>
<div class="grid">
    <div class="card">
        <h2>Fluxo clínico</h2>
        <p>Paciente → Internamento → História Clínica → Exame Físico.</p>
    </div>
    <div class="card">
        <h2>Próximas extensões</h2>
        <p>Evolução, prescrição, exames, bloco operatório, alta e dashboard.</p>
    </div>
</div>
<?php require __DIR__ . '/includes/footer.php'; ?>
