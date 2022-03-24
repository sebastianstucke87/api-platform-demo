<?php
declare(strict_types=1);

namespace App\ApiPlatform\Handler;

use ApiPlatform\Core\DataPersister\ContextAwareDataPersisterInterface;
use ApiPlatform\Core\DataProvider\ItemDataProviderInterface;
use App\Entity\Example;
use Symfony\Component\HttpFoundation\RequestStack;

class ExampleHandler implements ContextAwareDataPersisterInterface, ItemDataProviderInterface
{
	public function __construct(
		private RequestStack $requestStack
	){}

	public function supports($data, array $context = []): bool
	{
		return $data instanceof Example;
	}

	public function persist($data, array $context = [])
	{
		xdebug_break();
	}

	public function remove($data, array $context = [])
	{
		// NOP
	}

	public function getItem(string $resourceClass, $id, string $operationName = null, array $context = [])
	{
		$Payload = $this->requestStack->getCurrentRequest()->request;

		$actualPayload = file_get_contents('php://input');
		$actualPayloadAsArray = json_decode($actualPayload, true);

		xdebug_break();
	}
}
