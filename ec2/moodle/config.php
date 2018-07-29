<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

/* Database settings */
$CFG->dbtype    = 'mysqli';
$CFG->dblibrary = 'native';
$CFG->dbhost    = getenv('RDS_HOSTNAME');
$CFG->dbname    = getenv('RDS_DB_NAME');
$CFG->dbuser    = getenv('RDS_USERNAME');
$CFG->dbpass    = getenv('RDS_PASSWORD');
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => '',
  'dbsocket' => '',
);

/* E-mail Settings */
$CFG->debugsmtp         = getenv("SMTP_DEBUG_SMTP");
$CFG->smtphosts         = getenv("SMTP_HOSTS");
$CFG->smtpsecure        = getenv("SMTP_SECURE");
$CFG->smtpuser          = getenv("SMTP_USER");
$CFG->smtppass          = getenv("SMTP_PASSWORD");
$CFG->divertallemailsto = getenv("SMTP_DIVERT_ALL_EMAILS_TO");
$CFG->noreplyaddress    = getenv("SMTP_NO_REPLY_ADDRESS");
$CFG->emailonlyfromnoreplyaddress = getenv("SMTP_EMAIL_ONLY_FROM_NO_REPLY_ADDRESS");

/* Moodle setup */
$CFG->wwwroot   = getenv('MOODLE_WWW_ROOT');
$CFG->dataroot  = getenv('MOODLE_DATA_ROOT');
$CFG->sslproxy  = getenv('MOODLE_SSL_PROXY');
$CFG->admin     = 'admin';
$CFG->tempdir = "/tmp";
$CFG->localcache = "/tmp";
$CFG->cachedir = "/tmp";

$CFG->directorypermissions = 0777;

require_once(dirname(__FILE__) . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
