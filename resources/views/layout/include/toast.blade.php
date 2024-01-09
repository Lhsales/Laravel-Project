@if (Session::has('message'))
    <div class="position-relative">
        <div class="toast position-absolute top-0 end-0 align-items-center text-bg-{{ Session::get('alert-class') }} border-0 m-3 zindex-toast" aria-live="polite" aria-atomic="true" data-bs-delay="5000">
            <div class="d-flex">                
                <div class="toast-body">
                    {{ Session::get('message') }}
                </div>            
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button>
            </div>
        </div>
    </div>
@endif