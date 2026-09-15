<?php
if (isset($_GET['erro'])) {
    if ($_GET['erro'] == 'email')
         {
        echo 
        '<div class="alert alert-danger" role="alert"> E-mail já cadastrado
        <a href="cadastrarCliente.php" class="alert-link">Ok</a>
        </div>';}
    if ($_GET['erro'] == 'cpf') echo '<script>alert("Esse CPF já está cadastrado!");</script>';
    if ($_GET['erro'] == 'telefone') echo '<script>alert("Esse telefone já está cadastrado!");</script>';
    if ($_GET['erro'] == 'cadastro') echo '<script>alert("Não foi possível realizar o cadastro!");</script>';
}

if (isset($_GET['sucesso'])) echo '<script>alert("Cadastro realizado com sucesso!");</script>';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php include("include/header.php"); ?>
    <title>Cadastrar Usuário</title>
</head>
<body class="body-cadastro">
    <div class="container-fluid">
        <form action="include/clienteBD.php" method="POST" class="form-cadastro">
            <img src="include/image/Fazbear_Entertainment.png" alt="Fazbear Entertainment" class="logo-cadastro">
            <label class="txt-init">
                EMPLOYEE CREDENTIAL FORMS
            </label>
            <hr>
            <div class="document-text">
                    <p><strong>Documento nº: 01983</strong></p>
                    <p><strong id="date"></strong></p>
                    <p><strong>unidade: Freddy Fazbear's Pizza</strong></p>
                    <p><strong>Responsável: Scott Cawthon</strong></p>
                 <hr>
                <p>
                    <strong>Prezado(a) candidato(a),</strong>
                </p>
                <p>
                    Agradecemos seu interesse em fazer parte da
                    <strong>Fazbear Entertainment</strong>.
                    Sua solicitação de contratação foi recebida e, para darmos
                    continuidade ao processo, precisamos apenas de algumas
                    informações básicas para preparar seu registro interno.
                </p>
                <p>
                    Começaremos pelo seu nome completo. Informe seu nome como
                    consta em seus documentos oficiais:
                </p>
                <div class="form-group">
                    <label>Nome</label>
                    <input type="text" name="nome" id="nome" class="form-control" placeholder="Entre com o nome">
                </div>
                <p>
                    Obrigado. Seu nome será associado aos registros internos
                    da empresa e utilizado na emissão de seu crachá e demais
                    credenciais de acesso.
                </p>
                <p>
                    Para completar seu cadastro, informe seu CPF:
                </p>
                <div class="form-group">
                    <label>CPF</label>
                    <input type="text" name="cpf" id="cpf" class="form-control" placeholder="Entre com o CPF">
                </div>
                <p>
                    Essa informação será utilizada pela administração durante
                    o processo de contratação e permanecerá vinculada ao seu
                    registro enquanto você fizer parte da equipe.
                </p>
                <p>
                    A Fazbear Entertainment também precisa de uma forma de
                    entrar em contato com você. Informe seu endereço de
                    correio eletrônico:
                </p>
                <div class="form-group">
                    <label>E-mail</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Entre com o e-mail">
                </div>
                <p>
                    E um telefone para contato:
                </p>
                <div class="form-group">
                    <label>Telefone</label>
                    <input type="text" name="telefone" id="telefone" class="form-control" placeholder="Entre com o telefone">
                </div>
                <p>
                    Esses canais poderão ser utilizados para comunicar
                    alterações de turno, treinamentos obrigatórios e outras
                    informações relacionadas à sua unidade.
                </p>
                <p>
                    Pedimos também que informe seu sexo selecionando uma das
                    opções disponíveis abaixo:
                </p>
                <div class="form-group">
                    <label>Sexo</label>
                    <select name="sexo" id="sexo" class="form-control">
                        <option value="homem">Homem</option>
                        <option value="mulher">Mulher</option>
                    </select>
                </div>
                <p>
                    Agora, vamos configurar seu acesso.
                </p>
                <p>
                    Escolha uma senha para acessar os sistemas autorizados
                    pela empresa:
                </p>
                <div class="form-group">
                    <label>Senha</label>
                    <input type="password" name="senha" id="senha" class="form-control" placeholder="Entre com a senha">
                </div>
                <p>
                    Essa senha será utilizada para acessar os sistemas
                    autorizados pela empresa, incluindo terminais de
                    funcionários, registros de manutenção e sistemas
                    de monitoramento.
                </p>
                <p>
                    Não compartilhe suas credenciais com outros funcionários.
                    Cada funcionário deve utilizar exclusivamente a conta
                    atribuída ao seu próprio registro.
                </p>
                <p>
                    Dependendo da unidade para a qual você for designado,
                    seu acesso poderá incluir áreas de manutenção, salas de
                    segurança ou sistemas relacionados aos animatrônicos.
                    Algumas dessas áreas permanecem restritas mesmo durante
                    o horário de trabalho.
                </p>
                <p>
                    Funcionários responsáveis pela manutenção devem seguir
                    os procedimentos específicos de cada modelo antes de
                    realizar qualquer inspeção.
                    <strong>
                        Nunca tente operar, desmontar ou entrar em um traje
                        animatrônico sem autorização expressa do responsável
                        técnico.
                    </strong>
                </p>
                <p>
                    A Fazbear Entertainment possui equipamentos de diferentes
                    gerações e modelos. Alguns foram desenvolvidos para
                    apresentações, outros para interação com visitantes e
                    alguns permanecem em nossas instalações exclusivamente
                    para fins de armazenamento e manutenção.
                </p>
                <p>
                    Entre os modelos mais antigos estão aqueles associados
                    às primeiras unidades da companhia, incluindo os
                    estabelecimentos que deram origem aos conhecidos
                    <strong>Fredbear's Family Diner</strong> e
                    <strong>Freddy Fazbear's Pizza</strong>.
                </p>
                <p>
                    Se encontrar um equipamento que não esteja listado na
                    sua ordem de serviço, <strong>não tente ativá-lo.</strong>
                </p>
                <p>
                    Caso um animatrônico apresente comportamento inesperado
                    durante seu turno, afaste-se da área e comunique
                    imediatamente seu supervisor. Não é responsabilidade
                    do funcionário determinar a causa da falha.
                </p>
                <p>
                    A empresa já registrou incidentes envolvendo falhas de
                    segurança e comportamento inesperado de determinados
                    animatrônicos. Os procedimentos atuais foram desenvolvidos
                    levando esses acontecimentos em consideração.
                </p>
                <p>
                    Da mesma forma, funcionários designados para a segurança
                    deverão utilizar os sistemas de monitoramento
                    disponibilizados pela unidade e registrar qualquer
                    ocorrência observada durante o turno.
                </p>
                <p>
                    <strong>Não abandone seu posto sem autorização.</strong>
                </p>
                <p>
                    <strong>
                        Não permita o acesso de pessoas não autorizadas
                        às áreas restritas.
                    </strong>
                </p>
                <p>
                    <strong>
                        Não altere os registros das câmeras.
                    </strong>
                </p>
                <p>
                    Esses procedimentos existem para proteger você,
                    nossos visitantes e o patrimônio da empresa.
                </p>
                <p>
                    Em caso de emergência, siga as instruções fornecidas
                    pela administração local. Caso as instruções apresentadas
                    pelo sistema sejam diferentes das instruções fornecidas
                    pelo seu supervisor, permaneça no local designado e
                    aguarde novas orientações.
                </p>
                <p>
                    A empresa reconhece que determinadas unidades possuem
                    históricos operacionais mais extensos que outras.
                    Isso não deve ser motivo de preocupação durante o
                    processo de contratação.
                </p>
                <p>
                    Alguns registros antigos fazem referência a acontecimentos
                    ocorridos em <strong>1983</strong> e <strong>1987</strong>.
                    Esses documentos permanecem arquivados e seu acesso é
                    restrito. Funcionários recém-contratados não precisam
                    consultar esses arquivos para desempenhar suas funções.
                </p>
                <p>
                    Caso tenha interesse em trabalhar no departamento de
                    manutenção, saiba que a empresa possui diversos modelos
                    de trajes e endoesqueletos. Alguns utilizam mecanismos
                    antigos que exigem treinamento específico.
                </p>
                <p>
                    <strong>
                        Nunca tente utilizar um traje Springlock sem autorização.
                    </strong>
                </p>
                <p>
                    Uma falha nesse tipo de mecanismo pode resultar em
                    ferimentos graves. A administração não considera esse
                    procedimento parte do treinamento básico de novos
                    funcionários.
                </p>
                <p>
                    Após revisar todas as informações, envie este formulário
                    para concluir seu cadastro.
                </p>
                <p>
                    Se aprovado, você receberá suas credenciais, instruções
                    de treinamento e a designação da unidade onde deverá
                    se apresentar.
                </p>
                <p>
                    Seu primeiro dia poderá incluir uma breve apresentação
                    dos equipamentos utilizados no local e dos procedimentos
                    de segurança aplicáveis à sua função.
                </p>
                <p>
                    Funcionários selecionados para determinadas áreas poderão
                    receber treinamento adicional relacionado aos sistemas de
                    entretenimento, manutenção de animatrônicos e equipamentos
                    desenvolvidos por empresas parceiras da Fazbear Entertainment.
                </p>
                <p>
                    Alguns equipamentos antigos podem apresentar comportamentos
                    que não correspondem aos seus registros de programação.
                    <strong>
                        Não tente corrigir ou modificar esses sistemas
                        por conta própria.
                    </strong>
                </p>
                <p>
                    Caso um equipamento esteja identificado como
                    <strong>Mimic</strong>, interrompa qualquer procedimento
                    e comunique imediatamente o responsável técnico.
                </p>
                <p>
                    Leia atentamente todas as instruções recebidas.
                </p>
                <p>
                    A Fazbear Entertainment agradece seu interesse em fazer
                    parte da nossa equipe.
                </p>
                <p>
                    Esperamos que tenha uma longa carreira conosco.
                </p>
                <p>
                    E, acima de tudo, esperamos que sua experiência seja
                    exatamente aquilo que prometemos:
                </p>
                <p class="text-center">
                    <strong>Divertida. Segura. Inesquecível.</strong>
                </p>
                <br>
                <p>
                    Atenciosamente, Scott Cawthon.<br><br>
                    <strong>
                        Fazbear Entertainment, Inc.
                    </strong>
                </p>

                <hr>
                <p class="text-center">
                    <small>
                        Este documento é destinado exclusivamente ao uso
                        interno da Fazbear Entertainment.
                    </small>
                </p>
                <input type="checkbox" name="checkbox" id="checkbox">Li os termos e vi as fitas de treinamento e aceito todos os riscos do cargo.
            </div>
            <button type="submit" class="btn btn-success">
                Assinar Contrato e Concluir Cadastro
            </button>
        </form>
             <p class="text-center alert alert-warning">
                Aviso Legal: Este documento é pura ficção, nada desses termos são reais.
                 Este texto foi feito apenas como uma interface criativa de cadastro para um projeto escolar inspirado em FNAF. 
                  Não possui validade jurídica nem vínculo com a vida real.
             </p>
    </div>
    <?php include("include/scripts.php"); ?>
</body>
    <script>
        const hoje = new Date();
        document.getElementById('date').innerText = `Data: ${hoje.toLocaleDateString()}`;
    </script>
</html>
