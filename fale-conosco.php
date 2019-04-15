<link rel="stylesheet" href="_css/form.css" />

<script src="_javascript/form.js"></script>

<section id="corpo-full">
    
    <article id="noticia-principal">
                
        <header id="cabecalho-artigo">

            <hgroup>
                <h3>Fale Conosco > Contato</h3>
                <h1>Formulário de Contato</h1>
                <h2>por Leonardo Diniz</h2>
                <h3 class="direita">Atualizado em XX/XX/XXXX</h3>
             </hgroup>
                    
        </header>
        
        <form method="post" id="fContato" action="mailto:leonardo.diniz1995@gmail.com" oninput="calc_total();">

            <fieldset id="usuario">
                
                <legend>
                    Identificação do Usuário
                </legend>
                
                <p><label for="cNome">Nome:</label> <input type="text" name="tNome" id="cNome" size="20" maxlength="20" placeholder="Nome Completo" /></p>
                
                <p><label for="cSenha">Senha:</label> <input type="password" name="tSenha" id="cSenha" size="8" maxlength="8" placeholder="8 dígitos" /></p>
                
                <p><label for="cMail">E-mail:</label> <input type="email" name="tMail" id="cMail" size="20" maxlength="40" /></p>
                
                <fieldset id="sexo">
                    <legend>Sexo</legend>
                    
                    <input type="radio" name="tSexo" id="cMasc" checked /> <label for="cMasc">Masculino</label><br />
                    <input type="radio" name="tSexo" id="cFem" /> <label for="cFem">Feminino</label>
                    
                    <p>Data de Nascimento: <input type="date" name="tNasc" id="cNasc" /></p>
                </fieldset>
                
                
                
            </fieldset>

            <fieldset id="endereco">
                
                <legend>
                    Endereço do Usuário
                </legend>
                
                <p><label for="cRua">Logradouro:</label> <input type="text" name="tRua" id="cRua" size="13" maxlength="80" placeholder="Rua, Av, Trav, ..." /></p>
                
                <p><label for="cNum">Número:</label> <input type="number" name="tNum" id="cNum" min="0" max="99999" /></p>
                
                <p><label for="cEst">Estado:</label>
                    <select name="tEst" id="cEst">
                        
                        <optgroup label="Região Sudeste">
                            <option value="SP">São Paulo</option>
                            <option value="MG">Minas Gerais</option>
                            <option value="RJ">Rio de Janeiro</option>
                        </optgroup>
                        
                        <optgroup label="Região Sul">
                        <option value="SC">Santa Catarina</option>
                            <option value="PR">Paraná</option>
                        </optgroup>
                        
                        <optgroup label="Região Nordeste">
                            <option value="BH">Bahia</option>
                            <option value="CE">Ceára</option>
                        </optgroup>
                        
                    </select>
                </p>
                
                <p><label for="cCity">Cidade:</label> <input type="text" name="tCity" id="cCity" maxlength="40" size="20" placeholder="Sua cidade" list="cidades" /></p>
                <datalist id="cidades">
                    
                    <option value="São Paulo"></option>
                    <option value="Americana"></option>
                    <option value="Campinas"></option>
                    <option value="Nova Odessa"></option>
                    
                </datalist>
                
            </fieldset>

            <fieldset id="mensagem">
                
                <legend>
                    Mensagem do Usuário
                </legend>
                
                <p><label for="cUrg">Grau de Urgência:</label>
                    Mín<input type="range" name="tUrg" id="cUrg" min="0" max="5" step="1" />Máx
                </p>
                <p><label for="cMsg">Mensagem:</label>
                <textarea name="tMsg" id="cMsg" cols="35" rows="5" placeholder="Deixe aqui sua mensagem"></textarea></p>
                
            </fieldset>

            <fieldset id="pedido">
                
                <legend>
                    Quero um Google Glass
                </legend>
                
                <p>
                    <input type="checkbox" name="tPed" id="cPed" checked />
                    <label for="cPed">Gostaria de adquirir um Google Glass quando disponível</label>
                </p>
                <p><label for="cCor">Cor:</label>
                    <input type="color" name="tName" id="cName" value="#0000FF" />
                </p>
                <p><label for="cQtd">Quantidade:</label>
                    <input type="number" name="tQtd" id="cQtd" min="0" max="4" value="0" />
                </p>
                <p><label for="cTot">Preço Total: R$</label>
                    <input type="text" name="tTot" id="cTot" placeholder="Total à pagar" readonly />
                </p>
                
            </fieldset>

            <input type="image" name="tEnviar" id="cEnviar" src="_imagens/botao-enviar.png" />
            
        </form>
        
    </article>
    
</section>