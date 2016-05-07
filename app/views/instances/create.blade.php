@extends('layouts.master')

@section('top-script')
@stop

@section('content')
 <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1 class="display-3">Start Conserving</h1>
        <p>How much water are you using? Chances are it's more than you think! Use our water consumption recorder to help you stay conscious of your habits, and begin down the path of conservation!</p>
      </div>
    </div>

    <div class="container">
      <h2>Describe Your Water Use Activity</h2>
      <form>
        <fieldset class="form-group">
          <label for="title">Title</label>
          <input type="text" class="form-control" id="title" placeholder="Enter water use activity title">
        </fieldset>
        <fieldset class="form-group">
          <label for="selectType">Type of Activity</label>
          <select class="form-control" id="selectType">
            <option>Shower</option>
            <option>Bath</option>
            <option>Brushing Teeth</option>
            <option>Toilet</option>
            <option>Dishwasher</option>
            <option>Laundry</option>
            <option>Carwash (home)</option>
            <option>Carwash (Drive-Through)</option>
            <option>Watering Lawn (hose)</option>
            <option>Watering Lawn (sprinkler)</option>
          </select>
        </fieldset>
        <fieldset class="form-group">
          <label for="date">date</label>
          <input type="date" class="form-control" id="date" placeholder="ex 08/15/16">
        </fieldset>
        <fieldset class="form-group">
          <label for="hours">Hours</label>
          <input type="number" class="form-control" id="hours" placeholder="Enter number of hours" value="0">
        </fieldset>
        <fieldset class="form-group">
          <label for="minutes">Minutes</label>
          <input type="number" class="form-control" id="minutes" placeholder="Enter number of minutes" value="0">
        </fieldset>
        <fieldset class="form-group">
          <label for="seconds">Seconds</label>
          <input type="number" class="form-control" id="seconds" placeholder="Enter number of seconds" value="0">
        </fieldset>
        <div class="checkbox">
          <label>
            <input type="checkbox"> Use Current Date/Time
          </label>
        </div>
      <hr>
        <h2>How Long Were You Using Water?</h2>

        <h3>Use The Timer</h3>
          <div id="timer">
            <span id="sw_h">00</span>:
            <span id="sw_m">00</span>:
            <span id="sw_s">00</span>:
            <span id="sw_ms">00</span>
            <br/>
            <br/>
            <input type="button" value="Start" id="sw_start" />
            <input type="button" value="Pause" id="sw_pause" />
            <input type="button" value="Stop"  id="sw_stop" />
            <input type="button" value="Reset" id="sw_reset" />
            <br/>
            <br/>
            <span class="hide" id="sw_status">Stopwatch Status: Idle</span>
        </div>
        <h3>Or enter manually</h3>
        <fieldset class="form-group">
          <label for="recordHours">Hours</label>
          <input type="number" class="form-control" id="recordHours" placeholder="Enter number of hours" value="0">
        </fieldset>
        <fieldset class="form-group">
          <label for="recordMinutes">Minutes</label>
          <input type="number" class="form-control" id="recordMinutes" placeholder="Enter number of minutes" value="0">
        </fieldset>
        <fieldset class="form-group">
          <label for="recordSeconds">Seconds</label>
          <input type="number" class="form-control" id="recordSeconds" placeholder="Enter number of seconds" value="0">
        </fieldset>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <hr>
    </div>
@stop

@section('bottom-script')
@stop