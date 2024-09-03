<table class="table table-responsive" id="userProfiles-table">
    <thead>
        <th>Facebook</th>
        <th>Twitter</th>
        <th>Googleplus</th>
        <th>Linkedin</th>
        <th>About</th>
        <th>Website</th>
        <th>Phone</th>
        <th>Deleted By</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
        @foreach ($userProfiles as $userProfile)
            <tr>
                <td>{{ $userProfile->facebook }}</td>
                <td>{{ $userProfile->twitter }}</td>
                <td>{{ $userProfile->googleplus }}</td>
                <td>{{ $userProfile->linkedin }}</td>
                <td>{{ $userProfile->about }}</td>
                <td>{{ $userProfile->website }}</td>
                <td>{{ $userProfile->phone }}</td>
                <td>{{ $userProfile->deleted_by }}</td>
                <td>
                    <form id='deleteForm' action='{{ route('userProfiles.destroy', [$userProfile->id]) }}' method='POST'>
                        @csrf
                        @method('DELETE')
                        <div class='btn-group'>
                            <a href="{{ route('userProfiles.show', [$userProfile->id]) }}"
                                class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                            <a href="{{ route('userProfiles.edit', [$userProfile->id]) }}"
                                class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                            <a href="#" onclick="document.getElementById('deleteForm').submit(); return false;"
                                class="btn btn-danger btn-xs">delete</a>
                        </div>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
