@include('inc.header')

@if(session('info'))
    <div class="alert alert-success">
        {{session('info')}}
    </div>
@endif
<table class="table table-striped table-hover custom-table">
    <thead>
    <tr>
        <th>ID</th>
        <th>Image</th>
        <th>Name</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    @if(count($clefs) > 0)
        @foreach($clefs->all() as $clef)
            <tr>
                <td>{{ $clef->id }}</td>
                <td><img src="{{ $clef->image }}" style="height: 80px;width: 90px"/></td>
                <td>{{ $clef->name }}</td>
                <td>
                    <a href='{{ url("clefs/{$clef->id}/edit") }}' class="edit" data-toggle="modal"><i
                                class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>

                </td>
            </tr>
        @endforeach
    @endif

    </tbody>
</table>
</div>
</div>

@include('inc.footer')