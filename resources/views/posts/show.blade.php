@extends('layouts.app')

@section('template_title')
    {{ $region->name ?? 'Show Region' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Region</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('regions.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Region:</strong>
                            {{ $region->region }}
                        </div>
                        <div class="form-group">
                            <strong>Abbreviation:</strong>
                            {{ $region->abbreviation }}
                        </div>
                        <div class="form-group">
                            <strong>Capital:</strong>
                            {{ $region->capital }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
