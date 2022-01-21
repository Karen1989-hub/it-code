@include('admin.layout.adminHeader')
        @include('admin.layout.menu')

        <!-- Main Content-->
        <div class="app-content  my-3 my-md-5">
            <div class="side-app">
                <div class="page-header">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">{{$category}}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{$section}}</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
   @include('admin.layout.adminFooter')
