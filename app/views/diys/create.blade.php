@extends('layouts.master')

@section('top-script')

@stop

@section('content')
<!-- CONTENT -->
    <div class="jumbotron">
      <div class="container">
        <h1 class="display-3">Share your knowledge</h1>
        <p>We know you've got some great conservation tips. Use the form below to share them with the rest of the world!</p>
      </div>
    </div>
    <div class="container">

      <h2>Give us the goods!</h2>
      {{ Form::open(array('method' => 'post', 'action' => 'DiysController@store', 'files' => true)) }}
        <div class="form-group {{ ($errors->has('title')) ? 'has-error' : '' }}">
          {{ $errors->first('title', '<div class="alert alert-danger">:message</div>') }}
          {{ Form::label('title', 'Title') }}
          {{ Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Enter your title']) }}
        </div>
        <div class="form-group {{ ($errors->has('content')) ? 'has-error' : '' }}">
          {{ $errors->first('content', '<div class="alert alert-danger">:message</div>') }}
          {{ Form::label('content', 'Content') }}
          {{ Form::textarea('content', null, ['class' => 'form-control', 'rows'=>'3','placeholder' => 'Describe your DIY tip in detail.']) }}
        </div>
        <fieldset class="form-group">
          <label for="inputFile">Upload a photo</label>
          <input type="filepicker" data-fp-apikey="A9Y9ttbXcRTeOD3Z1hYl7z"
          onchange="alert(event.fpfile.url)">
          <small class="text-muted">Upload a photo of your DIY tip in action! (Optional)</small>
        </fieldset>

        <fieldset class="form-group">
          <label for="tags">Description</label>
          <input type="text" class="form-control" id="tags" placeholder="Tag your DIY tip with at least 2 relevant keywords.">
        </fieldset>
        <!-- CODE FOR TAG INPUTS BELOW-->
        <!-- https://bootstrap-tagsinput.github.io/bootstrap-tagsinput/examples/ -->
       
        {{ Form::submit('submit', ['class'=>'btn btn-default']) }}
        {{ Form::close() }}
      </form>
@stop

@section('bottom-script')
  <script type="text/javascript">
    filepicker.setKey("A9Y9ttbXcRTeOD3Z1hYl7z");  
          
          // create function for the button
          function upload(){ 
              
              filepicker.pick(
                  {
                      mimetype: 'image/*', 
                      container: 'modal', 
                      services: ['COMPUTER', 'INSTAGRAM', 'FACEBOOK', 'FLICKR', 'PICASA', 'IMAGE_SEARCH'], 
                      imageDim: [610, 440]
                  }, 
                  function(Blob) {
                      console.log(Blob); 
                      console.log(Blob.url); 
                      
                      $.ajax("/upload", {
                          type: "POST",
                          data: {
                              img_path: Blob.url
                          }
                      });
                      
                  }
              )
          }; 
          $('#filestack').on('click', upload);
  </script>
@stop