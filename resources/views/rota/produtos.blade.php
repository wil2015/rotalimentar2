
@section('produtos_velho')
  <section id="produtos">
    
  <div class="container wow fadeInUp">
     <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">vendas</h3>
          <div class="section-title-divider"></div>
          <p class="section-description">Laravel - Image Gallery CRUD Example</p>
        </div>
      </div>

    

    <form action="{{ url('index') }}" class="form-image-upload" method="POST" enctype="multipart/form-data">


        {!! csrf_field() !!}


        @if (count($errors) > 0)

            <div class="alert alert-danger">

                <strong>Whoops!</strong> There were some problems with your input.<br><br>

                <ul>

                    @foreach ($errors->all() as $error)

                        <li>{{ $error }}</li>

                    @endforeach

                </ul>

            </div>

        @endif


        @if ($message = Session::get('success'))

        <div class="alert alert-success alert-block">

            <button type="button" class="close" data-dismiss="alert">×</button>

                <strong>{{ $message }}</strong>

        </div>

        @endif


        <div class="row">

            <div class="col-md-5">

                <strong>Title:</strong>

                <input type="text" name="title" class="form-control" placeholder="Title">

            </div>

            <div class="col-md-5">

                <strong>Image:</strong>

                <input type="file" name="image" class="form-control">

            </div>

            <div class="col-md-2">

                <br/>

                <button type="submit" class="btn btn-success">Upload</button>

            </div>

        </div>


    </form> 


    <div class="row">

    <div class='list-group gallery'>


            @if($images->count())

                @foreach($images as $image)

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>

                    <a class="thumbnail fancybox" rel="ligthbox" href="/images/{{ $image->image }}">

                        <img class="img-responsive" alt="" src="/images/{{ $image->image }}" />

                        <div class='text-center'>

                            <small class='text-muted'>{{ $image->title }}</small>

                        </div> <!-- text-center / end -->

                    </a>

                    <form action="{{ url('index',$image->id) }}" method="POST">

                    <input type="hidden" name="_method" value="delete">

                    {!! csrf_field() !!}

                    <button type="submit" class="close-icon btn btn-danger"><i class="glyphicon glyphicon-remove"></i></button>

                    </form>

                </div> <!-- col-6 / end -->

                @endforeach

            @endif


        </div> <!-- list-group / end -->

    </div> <!-- row / end -->

</div> <!-- container / end -->
  </section>
@endsection


@section('produtos_emcontrucao')
  <section id="produtos">
     
		
      <div class="container wow fadeInUp">
        <div class="row">
            <div class="col-md-12">
              <h3 class="section-title">Produtos em Oferta</h3>
              <div class="section-title-divider"></div>
              <p class="section-description">Mostre aqui o seu produto</p>
            </div>
          </div>

                    

          @if($images->count())

              
              <div class='table-responsive'>
                    <table class="table table-striped table-bordered">
                      <thead class="thead-dark">
                        <tr class="text-center">
                          <th>#</th>
                          <th>Produto</th>
                          <th>Descrição</th>
                        </tr>
                      </thead>
                      <tbody>
                  
                        @foreach($images as $image)

                            <tr>

                              <td> 
                                    <p class="list-group-item-text">{{ $image->id }} </p>
                              </td>

                              <td>   
                                
                                    <img class="img-responsive" alt="" src="/images/{{ $image->image }}" width="304" height="228" />
                                  
                              </td>
                              
                              <Td>
                                    <p class="list-group-item-text">{{ $image->title }} </p>
                              </td>
                            </tr>                   

                                          
                        @endforeach
                      </tbody>
                    </table>
              
              </div> <!-- col-6 / end -->

              
          @endif
         

      </div> <!-- container / end -->
  </section>
@endsection



@section('produtos')
  <section id="produtos">
     
		
      <div class="container wow fadeInUp">
        <div class="row">
            <div class="col-md-12">
              <h3 class="section-title">Marketplace</h3>
              <div class="section-title-divider"></div>
              <p class="section-description">Em Construção</p>
            </div>
          </div>

                 

         
         

      </div> <!-- container / end -->
  </section>
@endsection
