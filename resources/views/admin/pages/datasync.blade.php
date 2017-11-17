@extends('admin.layouts.dashboard') 

@section('template_title') Data Sync 
@endsection 

@section('template_fastload_css') 
@endsection 

@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="content-wrapper">
    <section class="content-header">
        <h1>
        Data Sync
        <small> {{ Lang::get('pages.dashboard-access-level',['access' => $access] ) }} </small>
      </h1> {!! Breadcrumbs::render('profile_edit', $user) !!}

    </section>
    <section class="content">
        <div class="row">

            <div class="col-md-12">
                <div class="box">
            <div class="box-header">
              <h3 class="box-title">Airtable -> MySQL</h3>
            </div>
            <div class="box-body">
              <p>Please click follow button.</p>
              <a href="http://localhost:8000/entity.php" class="btn btn-app">
                <i class="fa fa-cogs"></i> Entity
              </a>
              <a href="http://localhost:8000/facets.php" class="btn btn-app">
                <i class="fa  fa-bank"></i> Facets
              </a>
              <a href="http://localhost:8000/resources.php" class="btn btn-app">
                <i class="fa fa-sitemap"></i> Resources
              </a>
              <a href="http://localhost:8000/locations.php" class="btn btn-app">
                <i class="fa fa-location-arrow"></i> Locations
              </a>
            </div>
            <!-- /.box-body -->
          </div>
            </div>
        </div>
    </section>
</div>

@endsection 

@section('template_scripts') 
    @include('admin.structure.dashboard-scripts')

@endsection