<form method="POST" id="modify_form"></form>

<tr>
    @csrf
    <td><input form="modify_form" type="text" name="name" value="{{$oneData->name}}"></td>
    <td><input form="modify_form" type="text" name="postal_code" value="{{$oneData->postal_code}}"></td>
    <td><button form="modify_form" type="submit" name="OK"><i class="fa-solid fa-paper-plane"></i></button></td>
    <td><button form="modify_form" type="submit" name="cancel"><i class="fa-solid fa-xmark"></i></button></td>
</tr>
