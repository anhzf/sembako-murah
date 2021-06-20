@props(['label' => '', 'inputClass' => '', 'id' => Str::uuid()])

@php
$_isTextarea = $attributes['type'] === 'textarea';
$_isInvalidInput = isset($attributes['name']) && $errors->has($attributes['name']);
$_validationClassName = $_isInvalidInput ? 'is-invalid' : '';
$_containerAttributes = $attributes->only(['class'])->merge([
    'class' => 'form-group',
]);
$_inputAttributes = $attributes->except($_isTextarea ? ['class', 'type', 'value'] : ['class'])->merge([
    'label' => $label,
    'id' => $id,
    'class' => "form-control {$inputClass} {$_validationClassName}",
    'value' => old($attributes['name']),
]);
@endphp

<div {!! $_containerAttributes !!}>
  <label for="{{ $id }}">{{ $label }}</label>
  @if ($_isTextarea)
    <textarea {!! $_inputAttributes !!}>
      {{ $attributes['value'] ?? old($attributes['name']) }}
    </textarea>
  @else
    <input {!! $_inputAttributes !!} />
  @endif

  {{-- validation message if already --}}
  @if ($_isInvalidInput)
    <div class="invalid-feedback">
      @foreach ($errors->get($attributes['name']) as $error)
        {{ $error }}
      @endforeach
    </div>
  @endif
</div>
