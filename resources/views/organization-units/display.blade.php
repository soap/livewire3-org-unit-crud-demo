@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><livewire:unit-breadcrumbs :orgUnit="$unit" /></div>
                <div class="card-body">
                    <livewire:unit-display :orgUnit="$unit" />
                    <livewire:unit-employees :orgUnit="$unit" />
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
