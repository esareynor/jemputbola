@foreach ($data['role'] as $r)
    @if (Auth::user()->id == $r->id_user)
        @if ($r->id_role == 1 || $r->id_role == 2)
            @include('layouts/masterapp')
        @endif
        @if ($r->id_role == 3)
            @include('layouts/singleapp')
        @endif
    @endif
@endforeach
