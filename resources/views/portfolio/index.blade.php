@extends('layouts.app')
@section('content')
<script>
    function scrollToItem(item) {
    var diff=(item.offsetTop-window.scrollY)/8
    if (Math.abs(diff)>1) {
        window.scrollTo(0, (window.scrollY+diff))
        clearTimeout(window._TO)
        window._TO=setTimeout(scrollToItem, 30, item)
    } else {
        window.scrollTo(0, item.offsetTop)
    }
}
</script>
    <div id="portfolioheading">
        <h1 id="portfolioheadingtitle">My Work</h1>
        <p id="portfolioheadingtext">Beautiful Design Flawless Development</p>
        <div onclick="scrollToItem(portfoliopage)" id="symbol"><i class="ion-arrow-down-b"></i></div>
    </div>
<div id="div_id"></div>
<div id="portfoliopage"  >
    
    @forelse ($portfolios as $portfolio)              

    <div class="as">    
        <div class="portfoliobox">
                <img id="portfolioimage" src="../images/websites/ITwiz.jpg" class="img-rounded" alt="Cinque Terre" >
                <br><br>
                <h4>{{ $portfolio->name }}</h4>
                <p>{{ $portfolio->description }}</p><br>
                
                
        </div>
        <div class="overlay">
            <h4>{{ $portfolio->name }}</h4><br>
            <a href="{{$portfolio->url}}"><button type="button" class="btn btn-primary btn-lg">Visit Website</button></a>
            <br><br>
            <a href="{{$portfolio->repository}}"><button type="button" class="btn btn-success btn-lg">View Repository</button></a>
        </div>
    </div>
    </script>
    @empty
        <p>No users</p>
    @endforelse
            <div id="pagelinks">

                {{$portfolios->links() }}

            </div>
</div>



@endsection

