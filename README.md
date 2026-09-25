# Formulários Hospitalares — PHP + MySQL

Versão 1.0 — projeto base para XAMPP e GitHub.

## Módulos incluídos
- Cadastro de pacientes
- Processo de internamento
- História clínica
- Exame físico
- Glasgow e sinais vitais
- Visualização do processo do paciente

## Requisitos
- XAMPP (Apache + PHP + MySQL/MariaDB)
- PHP 8.x recomendado
- Navegador moderno

## Instalação no XAMPP

1. Copie a pasta `formularios-hospitalares-php-mysql` para:
   `C:\xampp\htdocs\`
2. Inicie **Apache** e **MySQL** no XAMPP.
3. Abra o phpMyAdmin:
   `http://localhost/phpmyadmin/`
4. Crie/importa a base executando:
   `database/hospital.sql`
5. Copie:
   `config/database.example.php`
   para:
   `config/database.php`
6. Confirme as credenciais MySQL em `database.php`.
7. Abra:
   `http://localhost/formularios-hospitalares-php-mysql/`

## Segurança
Este repositório foi preparado para desenvolvimento/demonstração. Não coloque dados reais de pacientes no GitHub. O ficheiro `config/database.php` está no `.gitignore`.

## Estrutura
- `pacientes/` — cadastro e consulta
- `formularios/` — formulários clínicos
- `database/` — estrutura SQL
- `includes/` — componentes comuns
- `assets/` — CSS e JavaScript

## Próximos módulos sugeridos
Evolução clínica, prescrição, exames complementares, bloco operatório, alta, seguimento, utilizadores/perfis e dashboard estatístico.
