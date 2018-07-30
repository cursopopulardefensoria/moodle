# Moodle do Curso Popular da Defensoria Pública

## O que é isto?
É o código-fonte da plataforma Moodle do Curso Popular da Defensoria Pública.

## Como contribuir?
Faça um fork deste projeto, faça as alterações desejadas, e nos mande via pull request.

## Infraestrutura

Atualmente, o Moodle do Curso Popular da Defensoria Pública está hospedado na AWS (Amazon Web Services),
por meio do serviço Elastic Beanstalk.

Além disso, utilizamos o serviço de banco de dados AWS RDS MySQL e também EFS (Amazon Elastic File System),
pois o Moodle necessita que parte de seus arquivos voláteis sejam armazenados em um filesystem permanente.

Para subir um clone do ambiente Moodle do Curso Popular da Defensoria Pública:

1. Clone este repositório
2. Rode o comando build.sh (Linux ou similar) para criar um arquivo .zip contendo todo o código-fonte. Caso não
tenha uma instalação Linux à disposição, crie um arquivo .zip contendo todo o conteúdo da pasta /ec2.
3. Crie uma conta na Amazon AWS
4. Crie um partição no serviço Amazon EFS
5. Crie um banco de dados MySQL no serviço Amazon RDS
6. Crie uma nova aplicação no serviço Elastic Beanstalk
7. Envie o arquivo criado no passo 2 como uma nova versão de sua aplicação criada no passo anterior
8. Crie um novo ambiente na aplicação criada no passo 6
9. Configure as variáveis de ambiente definidas no arquivo /ec2/moodle/config.php deste projeto
