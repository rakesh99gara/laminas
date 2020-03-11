<?php
namespace Review;
use Laminas\Db\Adapter\AdapterInterface;
use Laminas\Db\ResultSet\ResultSet;
use Laminas\Db\TableGateway\TableGateway;
use Laminas\ModuleManager\Feature\ConfigProviderInterface;
class Module implements ConfigProviderInterface
{
	public function getConfig()
	{
	    return include __DIR__ . '/../config/module.config.php';
	}
	public function getServiceConfig()
    {
        return [
            'factories' => [
                Model\ReviewTable::class => function($container) {
                    $tableGateway = $container->get(Model\ReviewTableGateway::class);
                    return new Model\ReviewTable($tableGateway);
                },
                Model\ReviewTableGateway::class => function ($container) {
                    $dbAdapter = $container->get(AdapterInterface::class);
                    $resultSetPrototype = new ResultSet();
                    $resultSetPrototype->setArrayObjectPrototype(new Model\Review());
                    return new TableGateway('reviews', $dbAdapter, null, $resultSetPrototype);
                },
            ],
        ];
    }
     public function getControllerConfig()
    {
        return [
            'factories' => [
                Controller\ReviewController::class => function($container) {
                    return new Controller\ReviewController(
                        $container->get(Model\ReviewTable::class)
                    );
                },
            ],
        ];
    }
}