@extends ('layouts.app')

@section('title','Slider')
@push('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
@endpush




@section('content')
 <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="blue">
                                    <h4 class="title">Control</h4>
                                    
                                </div>
                                <div class="card-content table-responsive">
                                    <table id="table" class="table table-striped table-bordered" style="width:100%">
                                        <thead style="font-size:15px;">
                                            <th>ID</th>
                                            <th>Titulo</th>
                                            <th>SubTitulo</th>
                                            <th>Imagen</th>
                                            <th>Nuevo</th>
                                            <th>Actualizar</th>
                                        </thead>
                                        <tbody>
                                           @foreach ($sliders as $key=>$sliders )
                                               <tr>
                                                   <th >{{$key+1}}</th>
                                                   <td>{{$sliders->title}}</td>
                                                   <td>{{$sliders->sub_title}}</td>
                                                   <td>{{$sliders->image}}</td>
                                                    <td>{{$sliders->created_at}}</td>
                                                     <td>{{$sliders->updated_at}}</td>
                                                  
                                               </tr>
                                           @endforeach
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
 @endsection


@push('scripts')
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
<script>
    $(document).ready(function() {
    $('#table').DataTable();
} );
</script>
@endpush