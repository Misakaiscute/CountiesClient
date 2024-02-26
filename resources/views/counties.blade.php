@extends('necessary_html')

@section('content')
    <div class="center">
        <table>
            <tr>
                <th>Megye</th>
                <th>Lakossága</th>
                <th>Megyeszékhely</th>
            </tr>
            @foreach($data as $oneData)
                @if(isset($_POST['modify']))
                    @include('forms.countiesForm')
                @else
                    @include('content.countiesContent')
                @endif
            @endforeach
        </table>
    </div>
@endsection
