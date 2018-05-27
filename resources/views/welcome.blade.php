@extends('layouts.app')
@section('content')

   <div id='parallaxin'>
        <div class="jumbotron" id="jumbotron">
            <h1 id="title">Welcome to my portfolio.</h1>
            <p id='bootstraptext'>I build custom website for clients who require a wide range of web development solutions.</p>
        </div>
    </div>
    <div id="container">
        <h1>Hi, im Mike i am a PHP Laravel & Yii web developer and designer. <br> <br> <br>
          Located near Bristol and Bath in the south west of england. </h1>
    </div>

    <div id='parallaxout'>
      <div id='indexlogo'>
        <div id='indexlogos' class="row">
        <div class="col-sm-6" id='indexpannels'>
             <img src="../images/PHP-logo.svg" alt="Smiley face" height="170" width="170">
        </div>
        <div class="col-sm-6" id='indexpannels'>
          <img src="../images/HTML5logo.svg" alt="Smiley face" height="170" width="170">
        </div>
            <div class="col-sm-6" id='indexpannels'>
          <img src="../images/CSS3logo.svg" alt="Smiley face" height="170" width="170">
        </div>
        <div class="col-sm-6" id='indexpannels'>
           <img src="../images/MYSQLlogo.svg" alt="Smiley face" height="170" width="170">
        </div>
      </div>
      </div>
    </div>

@endsection
