@props(['label' => '', 'selectClass' => '', 'id' => Str::uuid(), 'options' => []])

@php
use Illuminate\View\ComponentAttributeBag as Attribute;

$_isInvalidInput = isset($attributes['name']) && $errors->has($attributes['name']);
$_containerAttributes = $attributes->only(['class'])->merge([
    'class' => 'form-group',
]);
$_inputAttributes = $attributes->except(['class', 'value'])->merge([
    'label' => $label,
    'id' => $id,
    'class' => "form-control {$selectClass}",
]);
$_value = $attributes['value'] ?? old($attributes['name']);
@endphp

<div {!! $_containerAttributes !!}>
  <label for="{{ $id }}">{{ $label }}</label>
  <select {!! $_inputAttributes !!}>
    <option {{ new Attribute(['selected' => $_value === null, 'disabled' => true]) }}>-----Select one-----</option>
    @foreach ($options as $option)
      <option {{ new Attribute(['value' => $option['value'], 'selected' => $_value == $option['value']] + $option) }}>
        {{ $option['label'] }}
      </option>
    @endforeach
  </select>

  {{-- validation message if already --}}
  @if ($_isInvalidInput)
    <div class="invalid-feedback">
      @foreach ($errors->get($attributes['name']) as $error)
        {{ $error }}
      @endforeach
    </div>
  @endif
</div>
