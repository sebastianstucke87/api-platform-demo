<?php
declare(strict_types=1);

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;

#[ApiResource]
final class Example
{
	public $id;

	public $foo;
}
