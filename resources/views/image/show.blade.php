@section('content')
    <div class="row">
        <div class="col-4 text-center d-lg-flex align-self-center justify-content-lg-start align-items-lg-end">
            <div class="container">
                <div class="card">
                <div class="card-header"><b>{{$img}}</b></div>
                    <div class="card-body">
                        <img src="{{$img}}" width="110" height="110">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection