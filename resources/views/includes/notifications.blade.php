@foreach (session(\App\Helpers\UI::NOTIFY_SESSNAME) ?? [] as $item)
  <div class="alert alert-{{ $item['type'] }} alert-dismissible fade show" role="alert">
    <span>{{ $item['message'] }}</span>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endforeach
