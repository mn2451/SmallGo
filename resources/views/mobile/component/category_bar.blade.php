<div class="category-bar">
    <ul>
    @foreach($children as $item)
        <li class="item">
            <a href="{{url('category',['id'=>$category_info->id,'sub_id'=>$item->id])}}">
                <i class="iconfont {{$item->icon}}"></i>
                <p>{{$item->name}}</p>
            </a>
        </li>
    @endforeach
    </ul>
</div>