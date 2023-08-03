@if($data['last_page']>1)
    <ul class="pagination">
        @for($i=1;$i<=$data['last_page'];$i++)
            <li>
                <a href="{{$data['path'].'?page='.$i.(!empty($busca) ? '&busca='.$busca : '')}}" class="{{$data['current_page']==$i ? ' active ' : ''}}">
                    0{{$i}}
                </a>
            </li>
        @endfor
    </ul>
@endif
