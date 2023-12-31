<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Organiza+</title>
    <link rel="stylesheet" href="./style/style_nosso_time.css">
    <link rel="icon" href="./img/icone.ico">
</head>

<body>

<!-- Script importado do controller-->
<script src="./controller/controle_nosso_time.js"></script>

<!-- Imagem de fundo-->
<div class="img-background">

    <div class="bt-fechar">
        <a href="index.php">Voltar a página Principal</a>
    </div>

    <div class="container-geral">

        <div class="container-geral-nosso-time">

            <!-- Logo acima do formulário-->

            <div class="logo">
                <img src="../img/logo.svg" alt="">
            </div>
            
            <!-- Texto do time de desenvolvedores-->
            <h2><ion-icon name="heart-circle-outline" class="coracao"></ion-icon>Conheça nosso time de Desenvolvedores</h2>
            <h3 style="font-style: italic;">(Passe o mouse e descubra quem são nossos desenvolvedores)</h3>

            <!-- Div geral que contempla cada div individual com os dados dos DEVS-->

            <div class="desenvolvedores">

                <div class="desen01" onmouseover="trocarImagem('des1', '../img/bruno.png','des1nome', 'Bruno')">
                    <img src="../img/desconhecido.png" id="des1">
                    <strong><p id="des1nome"></p></strong>
                    <p>Imerso no JavaScript, ele domina lógica, manipulação de DOM e eventos, transformando páginas em experiências interativas.</p>                    
                </div>

                <div class="desen02" onmouseover="trocarImagem('des2', '../img/fabricio.png','des2nome', 'Fabrício')">
                    <img src="../img/desconhecido.png" id="des2" >
                    <strong><p id="des2nome"></p></strong>
                    <p>
Mestre em CSS, PHP e JS, nosso Full Stack cria layouts envolventes, unindo arte e funcionalidade para elevar a experiência do usuário. </p>
                </div>

                <div class="desen03" onmouseover="trocarImagem('des3', '../img/geisa.png','des3nome', 'Geisa')">
                    <img src="../img/desconhecido.png" id="des3">
                    <strong><p id="des3nome"></p></strong>
                    <p>Explorando PHP, nosso desenvolvedor constrói scripts do lado do servidor, interagindo com bancos de dados e fortalecendo aplicativos web.</p>
                </div>

                <div class="desen04" onmouseover="trocarImagem('des4', '../img/joao.png','des4nome', 'João')">
                    <img src="../img/desconhecido.png" id="des4">
                    <strong><p id="des4nome"></p></strong>
                    <p>Unindo HTML, CSS, JavaScript, banco de dados e PHP, ele cria aplicações web completas, marcando o início de uma jornada emocionante.</p>
                </div>

                <div class="desen05" onmouseover="trocarImagem('des5', '../img/lais.png','des5nome', 'Laís')">
                    <img src="../img/desconhecido.png" id="des5">
                    <strong><p id="des5nome"></p></strong>
                    <p>Explorando HTML/CSS e oferecendo suporte para aprimorar a experiência do cliente com maestria!  </p>
                </div>

                <div class="desen06" onmouseover="trocarImagem('des6', '../img/pedro.png','des6nome', 'Pedro')">
                    <img src="../img/desconhecido.png" id="des6">
                    <strong><p id="des6nome"></p></strong>
                    <p>No mundo dos dados, ele inicia conceitos de modelagem e SQL, explorando a capacidade de armazenamento e recuperação de informações.</p>
                </div>

            </div>

        </div>

    </div>
    <!-- Rodapé de Copyright-->
    <div class="rodape">
        <p>© Organiza+ Todos os Direitos Reservados - 2023</p>
    </div>
</div>

<!-- Script de icones do ionicons-->
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>
</html>