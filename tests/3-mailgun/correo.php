<?php
# Include the Autoloader (see "Libraries" for install instructions)
require 'vendor/autoload.php';
use Mailgun\Mailgun;

# Instantiate the client.
$mgClient = new Mailgun(getenv("MAILGUN_KEY"));
$domain = getenv("MAILGUN_DOMAIN");

# Make the call to the client.
$result = $mgClient->sendMessage("$domain",
                  array('from'    => 'Mailgun Sandbox <postmaster@sandboxd373a800165f4c7ab23e180f857463e5.mailgun.org>',
                        'to'      => 'nati <natiexperiencia@gmail.com>',
                        'subject' => 'Hello nati',
                        'text'    => 'IeeepaIeeepaIeeepaIeeepaIeeepaIeeepaIeeepaIeeepa'));
?>