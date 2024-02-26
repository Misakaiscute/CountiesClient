<tr>
    <td><a href="{{ route('oneCounty', ['id' => $oneData->id]) }}">{{$oneData->name}}</a></td>
    <td>{{$oneData->population}}</td>
    <td>{{$oneData->chief_town}}</td>
    <td><button type="submit" name="modify" id="{{$oneData->id}}"><i class="fa-solid fa-pen-to-square"></i></button></td>
    <td><button type="submit" name="delete" id="{{$oneData->id}}"><i class="fa-solid fa-trash-can"></i></button></td>
</tr>

