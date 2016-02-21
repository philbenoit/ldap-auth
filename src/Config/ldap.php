<?php

return [
    // The suffix for your specific ldap connection eg. @example.local
    'suffix' => '',
    // An array of domain controllers
    'domain_controller' => ['dns2.example.local', 'dns1.example.local'],
    'base_dn' => 'OU=People,DC=example,DC=local',
    // Set the fields to be returned from the LDAP search / connection
    'fields' => ['userprincipalname', 'displayname', 'memberof'],
    // When completing the connection request or during auth which ldap field
    // should be queried
    'search_filter' => 'userprincipalname',
    'authIdentifierName' => 'userprincipalname',
    // Indicates to use the hostnames sequentially. This means that this package 
    // will try dns2.example.local first. If it's down, it tries the next one
    // If this is set to false, load balancing will be used instead (random domain controller)
    'backup_rebind' => true,
    // if using TLS this MUST be false
    'ssl' => false,
    // if using SSL this MUST be false
    'tls' => false,
    // Prevent anonymous bindings
    'admin_user' => 'wwfsa\pbenoit',
     // Prevent anonymous bindings
    'admin_pass' => 'Mak31t3@sy' 
];