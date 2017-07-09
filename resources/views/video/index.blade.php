@extends('layouts.layout')


<div class=" w3-padding-64  w3-grayscale-min w3-center fondo" id="video">
   <div class="w3-row">
     @foreach($videos as $video)

    <a href="#">
    <div class="w3-col w3-container m4 l4 s12 w3-red  play-music video{{$video->id}}"  >
      <p  class="fa fa-youtube-play music-play"></p>
        <h4><strong>{{$video->name}}.</strong></h4>
    </div>
    </a>
    <script type="text/javascript">
    $('.video{{$video->id}}').css('background-image','url({{ URL::asset("$video->directory") }})');
    </script>
    @endforeach
  </div>
</div>
