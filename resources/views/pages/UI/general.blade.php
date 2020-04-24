@extends('layouts.index')
@push('style')
  <style>
    .color-palette {
      height: 35px;
      line-height: 35px;
      text-align: right;
      padding-right: .75rem;
    }

    .color-palette.disabled {
      text-align: center;
      padding-right: 0;
      display: block;
    }

    .color-palette-set {
      margin-bottom: 15px;
    }

    .color-palette span {
      display: none;
      font-size: 12px;
    }

    .color-palette:hover span {
      display: block;
    }

    .color-palette.disabled span {
      display: block;
      text-align: left;
      padding-left: .75rem;
    }

    .color-palette-box h4 {
      position: absolute;
      left: 1.25rem;
      margin-top: .75rem;
      color: rgba(255, 255, 255, 0.8);
      font-size: 12px;
      display: block;
      z-index: 7;
    }
  </style>
@endpush

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Inline Charts</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Inline Charts</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- COLOR PALETTE -->
        <div class="card card-default color-palette-box">
          <div class="card-header">
            <h3 class="card-title">
              <i class="fas fa-tag"></i>
              Color Palette
            </h3>
          </div>
          <div class="card-body">
            <div class="col-12">
              <h5>Theme Colors</h5>
            </div>
            <!-- /.col-12 -->
            <div class="row">
              <div class="col-sm-4 col-md-2">
                <h4 class="text-center">Primary</h4>

                <div class="color-palette-set">
                  <div class="bg-primary color-palette"><span>#e2136e</span></div>
                  <div class="bg-primary disabled color-palette"><span>Disabled</span></div>
                </div>
              </div>
              <!-- /.col -->
              <div class="col-sm-4 col-md-2">
                <h4 class="text-center">Secondary</h4>

                <div class="color-palette-set">
                  <div class="bg-secondary color-palette"><span>#6c757d</span></div>
                  <div class="bg-secondary disabled color-palette"><span>Disabled</span></div>
                </div>
              </div>
              <!-- /.col -->
              <div class="col-sm-4 col-md-2">
                <h4 class="text-center">Info</h4>

                <div class="color-palette-set">
                  <div class="bg-info color-palette"><span>#17a2b8</span></div>
                  <div class="bg-info disabled color-palette"><span>Disabled</span></div>
                </div>
              </div>
              <!-- /.col -->
              <div class="col-sm-4 col-md-2">
                <h4 class="text-center">Success</h4>

                <div class="color-palette-set">
                  <div class="bg-success color-palette"><span>#28a745</span></div>
                  <div class="bg-success disabled color-palette"><span>Disabled</span></div>
                </div>
              </div>
              <!-- /.col -->
              <div class="col-sm-4 col-md-2">
                <h4 class="text-center bg-warning">Warning</h4>

                <div class="color-palette-set">
                  <div class="bg-warning color-palette"><span>#ffc107</span></div>
                  <div class="bg-warning disabled color-palette"><span>Disabled</span></div>
                </div>
              </div>
              <!-- /.col -->
              <div class="col-sm-4 col-md-2">
                <h4 class="text-center">Danger</h4>

                <div class="color-palette-set">
                  <div class="bg-danger color-palette"><span>#dc3545</span></div>
                  <div class="bg-danger disabled color-palette"><span>Disabled</span></div>
                </div>
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
        <!-- START ALERTS AND CALLOUTS -->
        <h5 class="mt-4 mb-2">Alerts and Callouts</h5>

        <div class="row">
          <div class="col-md-6">
            <div class="card card-default">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-exclamation-triangle"></i>
                  Alerts
                </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-ban"></i> Alert!</h5>
                  Danger alert preview. This alert is dismissable. A wonderful serenity has taken possession of my
                  entire
                  soul, like these sweet mornings of spring which I enjoy with my whole heart.
                </div>
                <div class="alert alert-info alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-info"></i> Alert!</h5>
                  Info alert preview. This alert is dismissable.
                </div>
                <div class="alert alert-warning alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-exclamation-triangle"></i> Alert!</h5>
                  Warning alert preview. This alert is dismissable.
                </div>
                <div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-check"></i> Alert!</h5>
                  Success alert preview. This alert is dismissable.
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->

          <div class="col-md-6">
            <div class="card card-default">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-bullhorn"></i>
                  Callouts
                </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="callout callout-danger">
                  <h5>I am a danger callout!</h5>

                  <p>There is a problem that we need to fix. A wonderful serenity has taken possession of my entire
                    soul,
                    like these sweet mornings of spring which I enjoy with my whole heart.</p>
                </div>
                <div class="callout callout-info">
                  <h5>I am an info callout!</h5>

                  <p>Follow the steps to continue to payment.</p>
                </div>
                <div class="callout callout-warning">
                  <h5>I am a warning callout!</h5>

                  <p>This is a yellow callout.</p>
                </div>
                <div class="callout callout-success">
                  <h5>I am a success callout!</h5>

                  <p>This is a green callout.</p>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
        <!-- END CUSTOM TABS -->
        <!-- START PROGRESS BARS -->
        <h5 class="mt-4 mb-2">Progress Bars</h5>

        <div class="row">
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Progress Bars Different Sizes</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <p><code>.progress</code></p>

                <div class="progress">
                  <div class="progress-bar bg-primary progress-bar-striped" role="progressbar"
                       aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                    <span class="sr-only">40% Complete (success)</span>
                  </div>
                </div>
                <p><code>.progress-sm</code></p>

                <div class="progress progress-sm active">
                  <div class="progress-bar bg-success progress-bar-striped" role="progressbar"
                       aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                    <span class="sr-only">20% Complete</span>
                  </div>
                </div>
                <p><code>.progress-xs</code></p>

                <div class="progress progress-xs">
                  <div class="progress-bar bg-warning progress-bar-striped" role="progressbar"
                       aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                    <span class="sr-only">60% Complete (warning)</span>
                  </div>
                </div>
                <p><code>.progress-xxs</code></p>

                <div class="progress progress-xxs">
                  <div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar"
                       aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                    <span class="sr-only">60% Complete (warning)</span>
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col (left) -->
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Progress bars</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="progress mb-3">
                  <div class="progress-bar bg-success" role="progressbar" aria-valuenow="40" aria-valuemin="0"
                       aria-valuemax="100" style="width: 40%">
                    <span class="sr-only">40% Complete (success)</span>
                  </div>
                </div>
                <div class="progress mb-3">
                  <div class="progress-bar bg-info" role="progressbar" aria-valuenow="20" aria-valuemin="0"
                       aria-valuemax="100" style="width: 20%">
                    <span class="sr-only">20% Complete</span>
                  </div>
                </div>
                <div class="progress mb-3">
                  <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                       aria-valuemax="100" style="width: 60%">
                    <span class="sr-only">60% Complete (warning)</span>
                  </div>
                </div>
                <div class="progress mb-3">
                  <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0"
                       aria-valuemax="100" style="width: 80%">
                    <span class="sr-only">80% Complete</span>
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col (right) -->
        </div>
        <!-- /.row -->
        <div class="row">
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Vertical Progress Bars Different Sizes</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body text-center">
                <p>By adding the class <code>.vertical</code> and <code>.progress-sm</code>, <code>.progress-xs</code>
                  or
                  <code>.progress-xxs</code> we achieve:</p>

                <div class="progress vertical active">
                  <div class="progress-bar bg-primary progress-bar-striped" role="progressbar"
                       aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="height: 40%">
                    <span class="sr-only">40%</span>
                  </div>
                </div>
                <div class="progress vertical progress-sm">
                  <div class="progress-bar bg-success" role="progressbar" aria-valuenow="20" aria-valuemin="0"
                       aria-valuemax="100" style="height: 100%">
                    <span class="sr-only">100%</span>
                  </div>
                </div>
                <div class="progress vertical progress-xs">
                  <div class="progress-bar bg-warning progress-bar-striped" role="progressbar"
                       aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="height: 60%">
                    <span class="sr-only">60%</span>
                  </div>
                </div>
                <div class="progress vertical progress-xxs">
                  <div class="progress-bar bg-info progress-bar-striped" role="progressbar" aria-valuenow="60"
                       aria-valuemin="0" aria-valuemax="100" style="height: 60%">
                    <span class="sr-only">60%</span>
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col (left) -->
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Vertical Progress bars</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body text-center">
                <p>By adding the class <code>.vertical</code> we achieve:</p>

                <div class="progress vertical">
                  <div class="progress-bar bg-success" role="progressbar" aria-valuenow="40" aria-valuemin="0"
                       aria-valuemax="100" style="height: 40%">
                    <span class="sr-only">40%</span>
                  </div>
                </div>
                <div class="progress vertical">
                  <div class="progress-bar bg-info" role="progressbar" aria-valuenow="20" aria-valuemin="0"
                       aria-valuemax="100" style="height: 20%">
                    <span class="sr-only">20%</span>
                  </div>
                </div>
                <div class="progress vertical">
                  <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                       aria-valuemax="100" style="height: 60%">
                    <span class="sr-only">60%</span>
                  </div>
                </div>
                <div class="progress vertical">
                  <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0"
                       aria-valuemax="100" style="height: 80%">
                    <span class="sr-only">80%</span>
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col (right) -->
        </div>
        <!-- /.row -->
        <!-- END PROGRESS BARS -->

        <!-- START ACCORDION & CAROUSEL-->
        <h5 class="mt-4 mb-2">Bootstrap Accordion & Carousel</h5>

        <div class="row">
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Carousel</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img class="d-block w-100" src="https://placehold.it/900x500/39CCCC/ffffff&text=I+Love+Bootstrap" alt="First slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="https://placehold.it/900x500/3c8dbc/ffffff&text=I+Love+Bootstrap" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="https://placehold.it/900x500/f39c12/ffffff&text=I+Love+Bootstrap" alt="Third slide">
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
        <!-- END ACCORDION & CAROUSEL-->

        <!-- START TYPOGRAPHY -->
        <h5 class="mt-4 mb-2">Typography</h5>

        <div class="row">
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-text-width"></i>
                  Headlines
                </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <h1>h1. Bootstrap heading</h1>

                <h2>h2. Bootstrap heading</h2>

                <h3>h3. Bootstrap heading</h3>
                <h4>h4. Bootstrap heading</h4>
                <h5>h5. Bootstrap heading</h5>
                <h6>h6. Bootstrap heading</h6>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- ./col -->
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-text-width"></i>
                  Text Emphasis
                </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <p class="lead">Lead to emphasize importance</p>

                <p class="text-success">Text green to emphasize success</p>

                <p class="text-info">Text aqua to emphasize info</p>

                <p class="text-primary">Text light blue to emphasize info (2)</p>

                <p class="text-danger">Text red to emphasize danger</p>

                <p class="text-warning">Text yellow to emphasize warning</p>

                <p class="text-muted">Text muted to emphasize general</p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->

        <div class="row">
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-text-width"></i>
                  Primary Block Quotes
                </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <blockquote>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                  <small>Someone famous in <cite title="Source Title">Source Title</cite></small>
                </blockquote>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- ./col -->
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-text-width"></i>
                  Secondary Block Quotes
                </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body clearfix">
                <blockquote class="quote-secondary">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                  <small>Someone famous in <cite title="Source Title">Source Title</cite></small>
                </blockquote>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->

        <div class="row">
          <div class="col-md-4">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-text-width"></i>
                  Unordered List
                </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <ul>
                  <li>Lorem ipsum dolor sit amet</li>
                  <li>Consectetur adipiscing elit</li>
                  <li>Integer molestie lorem at massa</li>
                  <li>Facilisis in pretium nisl aliquet</li>
                  <li>Nulla volutpat aliquam velit
                    <ul>
                      <li>Phasellus iaculis neque</li>
                      <li>Purus sodales ultricies</li>
                      <li>Vestibulum laoreet porttitor sem</li>
                      <li>Ac tristique libero volutpat at</li>
                    </ul>
                  </li>
                  <li>Faucibus porta lacus fringilla vel</li>
                  <li>Aenean sit amet erat nunc</li>
                  <li>Eget porttitor lorem</li>
                </ul>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- ./col -->
          <div class="col-md-4">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-text-width"></i>
                  Ordered Lists
                </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <ol>
                  <li>Lorem ipsum dolor sit amet</li>
                  <li>Consectetur adipiscing elit</li>
                  <li>Integer molestie lorem at massa</li>
                  <li>Facilisis in pretium nisl aliquet</li>
                  <li>Nulla volutpat aliquam velit
                    <ol>
                      <li>Phasellus iaculis neque</li>
                      <li>Purus sodales ultricies</li>
                      <li>Vestibulum laoreet porttitor sem</li>
                      <li>Ac tristique libero volutpat at</li>
                    </ol>
                  </li>
                  <li>Faucibus porta lacus fringilla vel</li>
                  <li>Aenean sit amet erat nunc</li>
                  <li>Eget porttitor lorem</li>
                </ol>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- ./col -->
          <div class="col-md-4">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-text-width"></i>
                  Unstyled List
                </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <ul class="list-unstyled">
                  <li>Lorem ipsum dolor sit amet</li>
                  <li>Consectetur adipiscing elit</li>
                  <li>Integer molestie lorem at massa</li>
                  <li>Facilisis in pretium nisl aliquet</li>
                  <li>Nulla volutpat aliquam velit
                    <ul>
                      <li>Phasellus iaculis neque</li>
                      <li>Purus sodales ultricies</li>
                      <li>Vestibulum laoreet porttitor sem</li>
                      <li>Ac tristique libero volutpat at</li>
                    </ul>
                  </li>
                  <li>Faucibus porta lacus fringilla vel</li>
                  <li>Aenean sit amet erat nunc</li>
                  <li>Eget porttitor lorem</li>
                </ul>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->

        <div class="row">
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-text-width"></i>
                  Description
                </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <dl>
                  <dt>Description lists</dt>
                  <dd>A description list is perfect for defining terms.</dd>
                  <dt>Euismod</dt>
                  <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
                  <dd>Donec id elit non mi porta gravida at eget metus.</dd>
                  <dt>Malesuada porta</dt>
                  <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
                </dl>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- ./col -->
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-text-width"></i>
                  Description Horizontal
                </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <dl class="row">
                  <dt class="col-sm-4">Description lists</dt>
                  <dd class="col-sm-8">A description list is perfect for defining terms.</dd>
                  <dt class="col-sm-4">Euismod</dt>
                  <dd class="col-sm-8">Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
                  <dd class="col-sm-8 offset-sm-4">Donec id elit non mi porta gravida at eget metus.</dd>
                  <dt class="col-sm-4">Malesuada porta</dt>
                  <dd class="col-sm-8">Etiam porta sem malesuada magna mollis euismod.</dd>
                  <dt class="col-sm-4">Felis euismod semper eget lacinia</dt>
                  <dd class="col-sm-8">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo
                    sit amet risus.
                  </dd>
                </dl>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- END TYPOGRAPHY -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
