@extends('layout.main')

@section('main')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Manage Campaigns</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group mr-2">
            <a href="{{route('campaign.create')}}" class="btn btn-sm btn-outline-secondary">Create new campaigns</a>
        </div>
    </div>
</div>

<div class="row campaign">

    @foreach($dataCampaigns as $campaign)

    <div class="col-md-4">
        <div class="card mb-4 shadow-sm">
            <a href="campaigns/detail.html" class="btn text-left campaign">
                <div class="card-body">
                    <h5 class="card-title">{{$campaign['name']}}</h5>
                    <p class="card-subtitle">{{$campaign['date']}}</p>
                    <hr>
                    <p class="card-text">3,546 registrations</p>
                </div>
            </a>
        </div>
    </div>

    @endforeach
</div>

@endsection