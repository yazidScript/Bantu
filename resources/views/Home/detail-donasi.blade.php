@extends('layouts.master')
@section('content')

<div class="container">
 <div class="row mb-5 mt-5">
   <style>
   img {
    float: left;
   }
   </style>

   <h2>Float Left</h2>
   <p>In this example, the image will float to the left in the paragraph, and the text in the paragraph will wrap around the image.</p>
   <p><img src="./Logo/logo1.jpg" alt="Pineapple" style="width:170px;height:170px;margin-right:15px;">
   Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas odio, vitae scelerisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Mauris ante ligula, facilisis sed ornare eu, lobortis in odio. Praesent convallis urna a lacus interdum ut hendrerit risus congue. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta. Cras ac leo purus. Mauris quis diam velit.</p>

 </div>
</div>


@stop
