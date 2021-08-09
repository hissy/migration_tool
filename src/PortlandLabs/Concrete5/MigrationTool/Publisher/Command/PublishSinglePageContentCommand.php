<?php

namespace PortlandLabs\Concrete5\MigrationTool\Publisher\Command;

use PortlandLabs\Concrete5\MigrationTool\Publisher\Command\Handler\PublishPageContentCommandHandler;

class PublishSinglePageContentCommand extends AbstractPagePublisherCommand
{

    public static function getHandler(): string
    {
        return PublishPageContentCommandHandler::class;
    }



}