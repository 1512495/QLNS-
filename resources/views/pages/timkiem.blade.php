@extends('layout.index')

@section('content')
<!-- Page Content -->
<div class="container">
    <div class="row">

        <?php 
            function doimau($str,$tukhoa)
            {
                return str_replace($tukhoa, "<span style='color:red;'>$tukhoa</span>", $str);
            }
        ?>
        <div class="col-md-9 ">
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color:#337AB7; color:white;">
                    <h4><b>Tìm kiếm: {{$tukhoa}}</b></h4>
                </div>

                @foreach ($timduoc as $tt)
                	<div class="row-item row">
	                    <div class="col-md-3">
	                        <a href="chitietsach/{{$tt->id}}">
	                            <br>
	                            <img width="200px" height="200px" class="img-responsive" src="source/image/sach/{{$tt->hinh}}">
	                        </a>
	                    </div>

	                    <div class="col-md-9">
	                        <h3>{!!doimau($tt->name,$tukhoa)!!}</h3>
                            <br>
                            <p>{!!doimau($tt->mota,$tukhoa)!!}</p>
                            <br>
	                        <a class="btn btn-primary" href="chitietsach/{{$tt->id}}">Xem chi tiết <span class="glyphicon glyphicon-chevron-right"></span></a>
	                    </div>
	                    <div class="break"></div>
	                </div>
                @endforeach
                
                <div style="text-align: center;">
                	 {{$timduoc->links()}}
                </div>
               
            </div>
        </div> 

    </div>

</div>
<!-- end Page Content -->

@endsection