# Projeto Signo Zodiacal

Este projeto permite que o usuário descubra seu signo zodiacal com base na sua data de nascimento.

## Como Usar

1. **Instale o XAMPP** e inicie o Apache.
2. **Coloque o projeto** na pasta `xampp\htdocs/Project`.
3. **Acesse** o arquivo `index.php` através do navegador:
4. Preencha o formulário com sua **data de nascimento** e clique em **"Descobrir Signo"**.
5. O sistema irá redirecionar para uma nova página com o seu **signo zodiacal** e informações detalhadas.

## Estrutura do Projeto

- **index.php**: Página inicial com o formulário de entrada.
- **show_zodiac_sign.php**: Exibe o signo e informações baseadas na data de nascimento.
- **signos.xml**: Contém as informações dos signos zodiacais.
- **assets/css/style.css**: Arquivo de estilos personalizados.
- **layouts/header.php**: Cabeçalho comum com o link para o Bootstrap.

## Requisitos

- **PHP 7.4 ou superior**
- **XAMPP ou servidor local com Apache e PHP**