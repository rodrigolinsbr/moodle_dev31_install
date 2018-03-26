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
 * Automatically generated strings for Moodle installer
 *
 * Do not edit this file manually! It contains just a subset of strings
 * needed during the very first steps of installation. This file was
 * generated automatically by export-installer.php (which is part of AMOS
 * {@link http://docs.moodle.org/dev/Languages/AMOS}) using the
 * list of strings defined in /install/stringnames.txt.
 *
 * @package   installer
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['admindirname'] = 'Directorio Admin';
$string['availablelangs'] = 'Lista de idiomas dispoñíbeis';
$string['chooselanguagehead'] = 'Escolla un idioma';
$string['chooselanguagesub'] = 'Escolla un idioma para o proceso de instalación. Este idioma empregarase tamén como idioma predeterminado do sitio, se ben pode cambiarse máis adiante.';
$string['clialreadyconfigured'] = 'Xa existe o ficheiro config.php. Empregue admin/cli/install_database.php se quere actualizar o seu sitio web.';
$string['clialreadyinstalled'] = 'Xa existe o ficheiro config.php. Empregue admin/cli/upgrade.php se quere actualizar o seu sitio web.';
$string['cliinstallheader'] = 'Programa de instalación de Moodle en liña de ordes {$a}';
$string['databasehost'] = 'Enderezo/máquina da base de datos';
$string['databasename'] = 'Nome de base de datos';
$string['databasetypehead'] = 'Escolla o controlador da base de datos';
$string['dataroot'] = 'Directorio de datos';
$string['datarootpermission'] = 'Permisos dos directorios de datos';
$string['dbprefix'] = 'Prefixo das táboas';
$string['dirroot'] = 'Directorio de Moodle';
$string['environmenthead'] = 'Comprobando o seu entorno ...';
$string['environmentsub2'] = 'Cada versión de Moodle ten algún requisito mínimo da versión de PHP e un número obrigatorio de extensións de PHP.
Antes de cada instalación ou actualización faise unha comprobación completa do entorno . Póñase en contacto co administrador do servidor se non sabe como instalar a nova versión ou activar as extensións PHP.';
$string['errorsinenvironment'] = 'A comprobación do entorno no foi satisfactoria!';
$string['installation'] = 'Instalación';
$string['langdownloaderror'] = 'Non foi posíbel descargar o idioma «{$a}». O proceso de instalación continuará en inglés.';
$string['memorylimithelp'] = '<p>O límite de memoria PHP no seu servidor está estabelecido en {$a}.</p>

<p>Isto pode facer que Moodle teña problemas de memoria máis adiante, especialmente
    se vostede ten activados un feixe de módulos e/ou unha gran cantidade de usuarios.</p>

<p>Recomendámoslle que configure PHP co límite máis alto posíbel, p.ex. 40M.
    Hai varias maneiras de facer isto que vostede pode probar:</p>
<ol>
<li>Se vostede e quen de facelo, volva compilar PHP con <i>--enable-memory-limit</i>.
    Isto fai que sexa Moodle quen estabeleza o límite de memoria.</li>
<li>Se vostede ten acceso ao ficheiro php.ini, pode cambiar o <b>memory_limit</b>
    estabelecéndoo en, digamos, 40M. Se vostede non ten acceso, podería
    solicitarlle ao administrador que o faga por vostede.</li>
<li>Nalgúns servidores PHP, pode crear un ficheiro .htaccess no directorio Moodle
    que conteña a seguinte liña:
    <blockquote><div>php_value memory_limit 40M</div></blockquote>
    <p>Porén, nalgúns servidores isto impide que traballen <b>todas</b> as páxinas PHP
    (poderá ver os erros cando se miran as páxinas) de modo que terá que eliminar o ficheiro .htaccess.</p></li>
</ol>';
$string['paths'] = 'Rutas';
$string['pathserrcreatedataroot'] = 'O directorio de datos ({$a->dataroot}) non puido ser creado polo instalador.';
$string['pathshead'] = 'Confirme as rutas';
$string['pathsrodataroot'] = 'O directorio dataroot non ten permisos de escritura.';
$string['pathsroparentdataroot'] = 'O directorio principal ({$a->parent}) non ten permisos de escritura. O instalador non pode crear o directorio de datos ({$a->dataroot}).';
$string['pathssubadmindir'] = 'Moi poucos enderezos web empregan /admin como URL especial para
permitirlle acceder a un panel de control ou semellante. Desafortunadamente, isto entra en conflito coa localización estándar das páxinas de administración de Moodle. Vostede pode corrixir isto
renomeando o directorio admin na súa instalación, e poñendo aquí ese novo nome.  Por exemplo: <em>moodleadmin</em>. Iso corrixirá as ligazóns admin en Moodle.';
$string['pathssubdataroot'] = '<p>Necesitase un lugar no que Moodle poida gardar os ficheiros enviados polos usuarios</p>
<p>Este directorio debe ser lexíbel E ESCRIBÍBEL polo usuario do servidor web
(normalmente «nobody», «apache», «www-data»)</p>
<p>Non debería ser accesíbel directamente desde o web.</p>
<p>Se non existe o instalador tentará crealo.</p>';
$string['pathssubdirroot'] = '<p>Ruta completa do directorio de instalación de Moodle.</p>';
$string['pathssubwwwroot'] = 'Enderezo web completo para acceder a Moodle.
Non é posíbel acceder a Moodle empregando enderezos múltiples.
Se o seu sitio ten varios enderezos públicos debe configurar encamiñamentos permanentes en todos eles, agás neste.
Se o seu sitio web é accesíbel tanto desde unha Intranet como desde Internet, escriba aquí o enderezo público e configure o DNS para que os usuarios da Intranet poidan empregar tamén o enderezo público.
Se o enderezo non é correcto, cambie o URL no seu navegador para reiniciar a instalación cun valor diferente.';
$string['pathsunsecuredataroot'] = 'A localización de dataroot non é segura';
$string['pathswrongadmindir'] = 'Non existe o directorio Admin';
$string['phpextension'] = 'Extensión PHP {$a}';
$string['phpversion'] = 'Versión PHP';
$string['phpversionhelp'] = '<p>Moodle require polo menos unha das versións de PHP 4.3.0 ou 5.1.0 ( as versións 5.0.x teñen unha serie de problemas coñecidos).</p>
<p>Neste momento está executandose a versión {$a}</p>
<p>Debe actualizar PHP ou trasladarse a outro servidor cunha versión máis recente de PHP!<br />
(NO caso de 5.0.x podería tamén reverter cara a versión 4.4.x)</p>';
$string['welcomep10'] = '{$a->installername} ({$a->installerversion})';
$string['welcomep20'] = 'Se esta a ver esta páxina é porque puido instalar satisfactoriamente e
    executar o paquete <strong>{$a->packname} {$a->packversion}</strong> no seu computador. Parabéns!';
$string['welcomep30'] = 'Esta versión de <strong>{$a->installername}</strong> inclúe os aplicativos
    para crear un entorno no que <strong>Moodle</strong> funcione, nomeadamente:';
$string['welcomep40'] = 'O paquete inclúe tamen <strong>Moodle {$a->moodlerelease} ({$a->moodleversion})</strong>.';
$string['welcomep50'] = 'O uso de todos os aplicativos do paquete está rexido polas súas respectivas
    licenzas. O paquete completo <strong>{$a->installername}</strong> é
    <a href="http://www.opensource.org/docs/definition_plain.html">código aberto</a> e distribúese
    baixo a licenza <a href="http://www.gnu.org/copyleft/gpl.html">GPL</a>.';
$string['welcomep60'] = 'As páxinas seguintes guiarano a través de algúns sinxelos pasos para configurar
    e axustar <strong>Moodle</strong> no seu computador. Pode empregar os axustes predeterminados
    ou, opcionalmente, modificalos para que se axusten ás súas necesidades.';
$string['welcomep70'] = 'Prema no botón «Seguinte» para continuar coa configuración de <strong>Moodle</strong>.';
$string['wwwroot'] = 'Enderezo web';
