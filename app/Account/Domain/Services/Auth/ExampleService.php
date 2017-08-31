<?php
use Illuminate\Contracts\Support\Responsable;

class ExampleService implements Responsable
{
 public function __construct($name = null)
 {
  $this->name = $name ?? 'Teapot';
 }

 public function status()
 {
  switch (strtolower($this->name)) {
   case 'teapot' :
    return 418;
   default :
    return 200;
  }
 }

 public function toResponse()
 {
  return response(
   "Hello {$this->name}",
   $this->status(),
   ['X-Person' => $this->name]
  );
 }

}