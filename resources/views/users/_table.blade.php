
@foreach($menus as $menu)
        <tr>
            <td> {{ Form::checkbox('menus[]',1,false) }}</td>
            <td>Update software</td>
        </tr>
@endforeach
