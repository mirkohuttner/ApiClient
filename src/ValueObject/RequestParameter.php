<?php declare(strict_types=1);

namespace MirkoHuttner\ApiClient\ValueObject;

class RequestParameter
{
	public string $name;

	public bool $required;

	public string $type;

	public ?string $description;

	public function __construct(string $name, bool $required, string $type, ?string $description)
	{
		$this->name = $name;
		$this->required = $required;
		$this->type = $type;
		$this->description = $description;
	}
}
