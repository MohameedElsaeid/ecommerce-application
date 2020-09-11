{{$product->product_id}}
<br>
{{$product->title}}
<br>
{{$product->brief}}
<br>
{{$product->category_id}}
<br>
@foreach($product->images()->get() as $image)
    <h4>{{asset('img/'.$image->image)}}</h4>
@endforeach

{{$product->specification()->first()->width}}
