@extends('necessary_html')

@section('content')
<div class="" style="margin: auto">
    <table>
        <tr>
            <th colspan="4">{{$countyData->name}}</th>
        </tr>
        @if(count($citiesData) == 0)
        <tr>
            <td>A megyének nincs egy városa sem.</td>
        </tr>
        @else
        @foreach($citiesData as $city)
            @if(isset($_POST['modify']))
                @include('forms.citiesForm')
            @else
                @include('content.citiesContent')
            @endif
        @endforeach
        @endif
        <tr>
            <td colspan="4"><button type="submit" name="add"><i class="fa-solid fa-plus"></i></button></td>
        </tr>
    </table>
</div>
@endsection
