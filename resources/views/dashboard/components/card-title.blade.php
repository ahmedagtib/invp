<div class="card">
    <div class="card-body">
        <div class="d-flex position-relative">
            
            <img src="{{asset('robot.gif')}}" class="flex-shrink-0 me-3 avatar-xl rounded" alt="">

            <div>
                {{ $slot }}
            </div>
        </div>
    </div>
</div>