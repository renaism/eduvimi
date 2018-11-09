<style>
    html, body{
        height: 100%;
    }
    #sidebar {
        padding-top: 60px;
    }
</style>

@include('inc.navbar')
<div class="container-fluid d-flex flex-column h-100">
    <div class="row flex-grow-1">
        <div class="col-2 p-0">
            @include('inc.sidebar')
        </div>
        <div class="col-10 container bg-white">
            
        </div>
    </div>
</div>
