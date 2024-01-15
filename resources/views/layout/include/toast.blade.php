<div class="toast-container position-absolute top-0 end-0 p-2">
    @php
        $delayMax = Session::has('message') ? 6 : 5;
        if (isset($errors))
        {
            $delayMax += count($errors);
        }
    @endphp
    @if (Session::has('message'))
        <div class="toast align-items-center text-bg-{{ Session::get('alert-class') }} border-0" aria-live="polite" aria-atomic="true" data-bs-delay="{{ $delayMax * 1000 }}">
            <div class="d-flex">
                <div class="toast-body">
                    {{ Session::get('message') }}
                </div>            
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button>
            </div>
        </div>
    @endif

    @if (isset($errors) && $errors->any())
        @foreach($errors->all() as $error)
        @php
            $delayMax -= 1;
        @endphp
            <div class="toast align-items-center text-bg-danger mx-1" aria-live="polite" aria-atomic="true" data-bs-delay="{{ $delayMax * 1000 }}">
                <div class="d-flex">
                    <div class="toast-body">
                        {{ $error }}
                    </div>
                    <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button>
                </div>
            </div>
        @endforeach
    @endif

</div>