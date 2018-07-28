<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'tool_uploadcourse', language 'pt_br', branch 'MOODLE_31_STABLE'
 *
 * @package   tool_uploadcourse
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowdeletes'] = 'Permitir deleção';
$string['allowdeletes_help'] = 'Se o campo "delete" é aceito ou não.';
$string['allowrenames'] = 'Permitir renomeação';
$string['allowrenames_help'] = 'Se o campo "rename" é aceito ou não.';
$string['allowresets'] = 'Permitir reconfiguração';
$string['allowresets_help'] = 'Se o campo "reset" é aceito ou não.';
$string['cachedef_helper'] = 'Cache de ajuda';
$string['cannotdeletecoursenotexist'] = 'Não é possível apagar uma disciplina que não existe';
$string['cannotgenerateshortnameupdatemode'] = 'Não é possível gerar um nome breve quando atualizações estão permitidas';
$string['cannotreadbackupfile'] = 'Não é possível ler o arquivo de backup';
$string['cannotrenamecoursenotexist'] = 'Não é possível renomear uma disciplina que não existe';
$string['cannotrenameidnumberconflict'] = 'Não é possível renomear a disciplina, o número ID conflita com uma disciplina existente';
$string['cannotrenameshortnamealreadyinuse'] = 'Não é possível renomear a disciplina, o nome breve já está em uso';
$string['cannotupdatefrontpage'] = 'É proibido modificar a página inicial';
$string['canonlyrenameinupdatemode'] = 'Só é possível renomear uma disciplina quando a atualização está habilitada';
$string['canonlyresetcourseinupdatemode'] = 'Só é possível reconfigurar uma disciplina quando no modo de atualização';
$string['couldnotresolvecatgorybyid'] = 'Não foi possível resolver a categoria pelo ID';
$string['couldnotresolvecatgorybyidnumber'] = 'Não foi possível resolver a categoria pelo número ID';
$string['couldnotresolvecatgorybypath'] = 'Não foi possível resolver categoria pelo caminho';
$string['coursecreated'] = 'Disciplina criado';
$string['coursedeleted'] = 'Disciplina apagado';
$string['coursedeletionnotallowed'] = 'Deleção de disciplinas está permitida';
$string['coursedoesnotexistandcreatenotallowed'] = 'O disciplina não existe e a criação de disciplinas está proibida';
$string['courseexistsanduploadnotallowed'] = 'O disciplina existe e a atualização de disciplina está proibida';
$string['coursefile'] = 'Arquivo';
$string['coursefile_help'] = 'Este arquivo deve ser um arquivo CSV.';
$string['courseidnumberincremented'] = 'Número ID da disciplina incrementado {$a->from} -> {$a->to}';
$string['courseprocess'] = 'Processo da disciplina';
$string['courserenamed'] = 'Disciplina renomeado';
$string['courserenamingnotallowed'] = 'Renomeação de disciplinas proibida';
$string['coursereset'] = 'Reconfiguração da disciplina';
$string['courseresetnotallowed'] = 'Reconfiguração de disciplina não permitida';
$string['courserestored'] = 'Disciplina restaurado';
$string['coursescreated'] = 'Disciplinas criados: {$a}';
$string['coursesdeleted'] = 'Disciplinas apagados: {$a}';
$string['courseserrors'] = 'Erros de disciplina: {$a}';
$string['courseshortnamegenerated'] = 'Nome breve de disciplina gerado: {$a}';
$string['courseshortnameincremented'] = 'No breve da disciplina incrementado {$a->from} -> {$a->to}';
$string['coursestotal'] = 'Total de disciplinas: {$a}';
$string['coursesupdated'] = 'Disciplinas atualizados: {$a}';
$string['coursetemplatename'] = 'Restaurar a partir desse disciplina depois de fazer o';
$string['coursetemplatename_help'] = 'Insira o nome breve de uma disciplina existente para usá-lo como modelo para todas as disciplinas.';
$string['coursetorestorefromdoesnotexist'] = 'O disciplina escolhido como modelo não existe';
$string['courseupdated'] = 'Disciplina atualizado';
$string['createall'] = 'Criar todos, incrementar nome breve se necessário';
$string['createnew'] = 'Criar novas disciplinas apenas, saltar disciplinas existentes';
$string['createorupdate'] = 'Criar novas disciplinas ou atualizar disciplinas existentes';
$string['csvdelimiter'] = 'Delimitador do CSV';
$string['csvdelimiter_help'] = 'Delimitador CSV do arquivo CSV.';
$string['csvfileerror'] = 'Há algo de errado com o formato do arquivo CSV. Por favor, verifique o número de títulos e colunas correspondentes, e se o delimitador e codificação do arquivo estão corretos: {$a}';
$string['csvline'] = 'Linha';
$string['defaultvalues'] = 'Valores padrão para disciplinas';
$string['encoding'] = 'Codificação';
$string['encoding_help'] = 'Codificação do arquivo CSV.';
$string['errorwhiledeletingcourse'] = 'Erro ao apagar a disciplina';
$string['errorwhilerestoringcourse'] = 'Erro ao restaurar a disciplina';
$string['generatedshortnamealreadyinuse'] = 'O nome breve gerado já está em uso';
$string['generatedshortnameinvalid'] = 'O nome breve gerado é inválido';
$string['id'] = 'ID';
$string['idnumberalreadyinuse'] = 'Número ID já utilizado por uma disciplina';
$string['importoptions'] = 'Opções de importação';
$string['invalidbackupfile'] = 'Arquivo de backup inválido';
$string['invalidcourseformat'] = 'Formato de disciplina inválido';
$string['invalidcsvfile'] = 'Arquivo CSV inválido';
$string['invalidencoding'] = 'Codificação inválida';
$string['invalideupdatemode'] = 'Modo de atualização selecionado inválido';
$string['invalidmode'] = 'Modo inválido selecionado';
$string['invalidroles'] = 'Nome de papel inválido';
$string['invalidshortname'] = 'Nome breve inválido';
$string['missingmandatoryfields'] = 'Valores ausentes em campos obrigatórios: {$a}';
$string['missingshortnamenotemplate'] = 'Nome breve não definido e modelo de nome breve não definido';
$string['mode'] = 'Modo de carregamento';
$string['mode_help'] = 'Isso permite que você especifique se as disciplinas podem ser criados e/ou atualizados.';
$string['nochanges'] = 'Sem alterações';
$string['pluginname'] = 'Carregamento de disciplinas';
$string['preview'] = 'Pré-visualizar';
$string['reset'] = 'Reconfigurar disciplina depois de carregar';
$string['reset_help'] = 'Se depois de criar/atualizar uma disciplina será feito o "reset".';
$string['restoreafterimport'] = 'Restaurar depois de imiportar';
$string['result'] = 'Resultado';
$string['rowpreviewnum'] = 'Linhas de pré-visualização';
$string['rowpreviewnum_help'] = 'Número de linhas do arquivo CSV que serão visualizadas na próxima página. Esta opção existe para limitar o tamanho da próxima página.';
$string['shortnametemplate'] = 'Modelo para gerar um nome breve';
$string['shortnametemplate_help'] = 'O nome breve da disciplina é exibido na navegação. Você pode usar a sintaxe de modelos aqui (%f = fullname, %i = idnumber), ou inserir um valor individual que é incrementado.';
$string['templatefile'] = 'Restaurar a partir do arquivo depois de carregado';
$string['templatefile_help'] = 'Selecionar um arquivo para usar com modelo para a criação de todas as disciplinas.';
$string['unknownimportmode'] = 'Modo de importação desconhecido';
$string['updatemissing'] = 'Completar dados faltantes do CSV e padrões';
$string['updatemode'] = 'Modo de atualização';
$string['updatemodedoessettonothing'] = 'Modo de atualização impede qualquer atuazação';
$string['updatemode_help'] = 'Se você permitir que disciplinas sejam atualizados, você também tem que dizer qual ferramenta será utilizada para atualizar as disciplinas.';
$string['updateonly'] = 'Somente atualizar disciplina existentes';
$string['updatewithdataonly'] = 'Atualizar com dados do CSV apenas';
$string['updatewithdataordefaults'] = 'Atualizar com dados do CSV e padrões';
$string['uploadcourses'] = 'Carregar disciplinas';
$string['uploadcourses_help'] = 'As disciplinas podem ser criados a partir de um arquivo texto. O formato do arquivo deve ser o seguinte:

* Cada linha do arquivo contém um registro
* Cada registro é uma sequência de dados separados por vírgulas (ou outros delimitadores)
* A primeira linha contém uma lista de campos que define o formato do resto do arquivo
* Campos Obrigatórios são shortname, fullname, summary e category';
$string['uploadcoursespreview'] = 'Pré-visualização de disciplinas carregados';
$string['uploadcoursesresult'] = 'Resultado das disciplinas carregados';
