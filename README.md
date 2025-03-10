📌 Explicação da estrutura:
🔹 docker/ → Pasta onde ficarão os arquivos de configuração do Docker.
🔹 nginx/ → Configuração do servidor Nginx.
🔹 php/ → Configuração da imagem do PHP.
🔹 src/ → Onde ficará o código da aplicação (index.php vai aqui).
🔹 docker-compose.yml → Arquivo principal que define os serviços do Docker.



# Configuração do Terminal Oh My Zsh com WSL (Windows Subsystem for Linux)

🛠️ Passo a Passo Completo

1. Instalação do WSL

Verifique se o WSL está instalado digitando o comando no terminal PowerShell:

wsl --list

Se aparecer alguma distribuição (como Ubuntu), significa que o WSL já está ativo.

Caso não esteja instalado, execute o seguinte comando para ativar o WSL:

wsl --install

2. Instalando o Zsh

Agora vamos instalar o Zsh, que é o terminal onde o Oh My Zsh vai rodar:

sudo apt update
sudo apt install zsh -y

Após instalar, verifique se o Zsh está instalado com:

zsh --version

3. Instalando o Oh My Zsh

Para instalar o Oh My Zsh, execute o comando:

sh -c "$(curl -fsSL https://raw.githubusercontent.com/ohmyzsh/ohmyzsh/master/tools/install.sh)"

Quando ele perguntar se deseja definir o Zsh como shell padrão, digite Y e pressione Enter.

4. Plugins do Oh My Zsh

Autosuggestions (Sugestões automáticas de comandos)

Clone o repositório:

git clone https://github.com/zsh-users/zsh-autosuggestions $ZSH_CUSTOM/plugins/zsh-autosuggestions

Abra o arquivo de configuração:

nano ~/.zshrc

Adicione o plugin na linha:

plugins=(git zsh-autosuggestions)

Salve o arquivo pressionando CTRL + O, depois ENTER e CTRL + X para sair.

Recarregue o terminal para aplicar as mudanças:

source ~/.zshrc

5. Tema Powerlevel10k (Opcional, mas deixa o terminal bonitão 🖤)

Clone o repositório:

git clone --depth=1 https://github.com/romkatv/powerlevel10k.git $ZSH_CUSTOM/themes/powerlevel10k

Abra o arquivo .zshrc novamente e altere esta linha:

ZSH_THEME="powerlevel10k/powerlevel10k"

Recarregue o terminal:

source ~/.zshrc

Quando reiniciar o terminal, vai aparecer um assistente para personalizar o tema!

6. Comandos úteis

Comando

Função

source ~/.zshrc

Recarregar o terminal

nano ~/.zshrc

Editar o arquivo de configuração

zsh --version

Verificar versão do Zsh

🚀 Pronto!

Seu terminal agora está estiloso, rápido e com plugins automáticos!

Se precisar adicionar mais plugins, é só clonar o repositório e adicionar no arquivo .zshrc. 😎

### Sobre o projeto
- Ambiente configurado com Docker (PHP + Node.js + MySQL + Nginx)
- Utilizando WSL + Oh My Zsh para simular um ambiente Linux no Windows
- Código organizado e versionado com Git
- Boas práticas como .gitignore


