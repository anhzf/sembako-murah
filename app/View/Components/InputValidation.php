<?php

namespace App\View\Components;

use Illuminate\View\Component;

class InputValidation extends Component
{
  public bool $isValid;
  public string $message;

  /**
   * Create a new component instance.
   *
   * @return void
   */
  public function __construct(string $message, bool $isValid = false)
  {
    $this->isValid = $isValid;
    $this->message = $message;
  }

  /**
   * Get the view / contents that represent the component.
   *
   * @return \Illuminate\Contracts\View\View|\Closure|string
   */
  public function render()
  {
    return view('components.input-validation');
  }
}
