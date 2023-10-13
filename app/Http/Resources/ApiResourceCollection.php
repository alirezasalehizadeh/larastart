<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class ApiResourceCollection extends ResourceCollection
{
    /**
     * @var string
     */
    public $message;

    /**
     * @var int
     */
    public $code;

    /**
     * Create a new resource instance.
     *
     * @param mixed $data
     * @param string $message
     * @param int $code
     */
    public function __construct($data = [], string $message = '', int $code = 200)
    {
        parent::__construct($data);
        $this->message = $message;
        $this->code = $code;
    }

    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'data' => $this->collection,
            'message' => $this->message,
            'code' => $this->code,
        ];
    }
}
