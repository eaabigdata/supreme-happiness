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
      <form>
        <fieldset class="form-group">
          <label for="title">Title</label>
          <input type="text" class="form-control" id="title" placeholder="Give your DIY tip a name.">
        </fieldset>
        <fieldset class="form-group">
          <label for="description">Description</label>
          <textarea class="form-control" id="description" rows="3" placeholder="Describe your DIY tip in detail."></textarea>
        </fieldset>
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
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
@stop

@section('bottom-script')
@stop