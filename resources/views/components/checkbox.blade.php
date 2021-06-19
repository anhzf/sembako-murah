@props(['label' => '', 'checkboxClass' => '', 'id' => Str::uuid(), 'value' => isset($attributes['name']) ?? old($attributes['name'])])

@php
$_isInvalidInput = isset($attributes['name']) && $errors->has($attributes['name']);
$_containerAttributes = $attributes->filter(fn($v, $k) => $k === 'class')->merge([
    'class' => 'form-check',
]);
$_inputAttributes = $attributes->filter(fn($v, $k) => $k !== 'class')->merge([
    'label' => $label,
    'id' => $id,
    'type' => 'checkbox',
    'class' => "form-check-input {$checkboxClass}",
]);
@endphp

<div {!! $_containerAttributes !!}>
  <input {!! $_inputAttributes !!} />
  <label for="{{ $id }}" class="form-check-label">{{ $label }}</label>

  {{-- validation message if already --}}
  @if ($_isInvalidInput)
    <div class="invalid-feedback">
      @foreach ($errors->get($attributes['name']) as $error)
        {{ $error }}
      @endforeach
    </div>
  @endif
</div>
