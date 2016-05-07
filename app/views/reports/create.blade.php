@extends('layouts.master')

@section('top-script')

@stop

@section('content')
<!-- CONTENT -->
    <div class="jumbotron">
      <div class="container">
        <h1 class="display-3">Make a report</h1>
        <p>What did you see out there today?</p>
      </div>
    </div>
    <div class="container">

      {{ Form::open(array('method' => 'post', 'action' => 'ReportsController@store', 'files' => true)) }}
        <div class="form-group {{ ($errors->has('description')) ? 'has-error' : '' }}">
          {{ $errors->first('description', '<div class="alert alert-danger">:message</div>') }}
          {{ Form::label('description', 'Description') }}
          {{ Form::textarea('description', null, ['class' => 'form-control', 'rows'=>'3','placeholder' => 'Describe your report in detail.']) }}
        </div>
        <fieldset class="form-group">
          <label for="inputFile">Upload a photo</label>
          <input type="filepicker" data-fp-apikey="A9Y9ttbXcRTeOD3Z1hYl7z" value="event.fpfile.url" onchange="changeText(event.fpfile.url)">
          <hidden id="changeText" name="image_path"value="">
          <small  class="text-muted">Upload a photo for your report! (Optional)</small>
        </fieldset>
        <!-- CODE FOR TAG INPUTS BELOW-->
        <!-- https://bootstrap-tagsinput.github.io/bootstrap-tagsinput/examples/ -->
        {{ Form::submit('submit', ['class'=>'btn btn-default']) }}
        {{ Form::close() }}
      </form>
@stop

@section('bottom-script')

<script type="text/javascript">
	function changeText(){
		$('#changeText').value('Blob.url');
	}	
</script>

@stop