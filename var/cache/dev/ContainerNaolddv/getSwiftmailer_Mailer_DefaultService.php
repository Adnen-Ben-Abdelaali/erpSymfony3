<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'swiftmailer.mailer.default' shared service.

require_once $this->targetDirs[3].'\\vendor\\swiftmailer\\swiftmailer\\lib\\classes\\Swift\\Mailer.php';

return $this->services['swiftmailer.mailer.default'] = new \Swift_Mailer(${($_ = isset($this->services['swiftmailer.mailer.default.transport']) ? $this->services['swiftmailer.mailer.default.transport'] : $this->load(__DIR__.'/getSwiftmailer_Mailer_Default_TransportService.php')) && false ?: '_'});
