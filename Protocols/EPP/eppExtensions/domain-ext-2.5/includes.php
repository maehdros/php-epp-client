<?php
$this->addExtension('domain-ext', 'http://www.eurid.eu/xml/epp/domain-ext-2.5');

include_once(dirname(__FILE__) . '/eppRequests/euridEppTransferDomainRequest.php');
$this->addCommandResponse('Metaregistrar\EPP\euridEppTransferDomainRequest', 'Metaregistrar\EPP\eppTransferResponse');

include_once(dirname(__FILE__) . '/eppRequests/euridEppCreateDomainRequest.php');
$this->addCommandResponse('Metaregistrar\EPP\euridEppCreateDomainRequest', 'Metaregistrar\EPP\eppCreateResponse');

include_once(dirname(__FILE__) . '/eppRequests/euridEppDeleteDomainRequest.php');
$this->addCommandResponse('Metaregistrar\EPP\euridEppDeleteDomainRequest', 'Metaregistrar\EPP\eppDeleteResponse');

include_once(dirname(__FILE__) . '/eppResponses/euridEppInfoDomainResponse.php');
$this->addCommandResponse('Metaregistrar\EPP\eppInfoDomainRequest', 'Metaregistrar\EPP\euridEppInfoDomainResponse');

include_once dirname(__FILE__) . '/eppRequests/euridEppUndeleteDomainRequest.php';
include_once dirname(__FILE__) . '/eppResponses/euridEppUndeleteDomainResponse.php';
$this->addCommandResponse('Metaregistrar\EPP\euridEppUndeleteDomainRequest', 'Metaregistrar\EPP\euridEppUndeleteDomainResponse');

include_once dirname(__FILE__) . '/eppRequests/euridEppUpdateDomainRequest.php';
$this->addCommandResponse('Metaregistrar\EPP\euridEppUpdateDomainRequest', 'Metaregistrar\EPP\eppUpdateDomainResponse');

include_once dirname(__FILE__) . '/eppRequests/euridEppUpdateContactRequest.php';
$this->addCommandResponse('Metaregistrar\EPP\euridEppUpdateContactRequest', 'Metaregistrar\EPP\eppUpdateContactResponse');