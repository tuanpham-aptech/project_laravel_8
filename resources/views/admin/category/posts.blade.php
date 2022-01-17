<table>
    <tr style="border:1px solid #ccc;">
        <th>ID</th>
        <th>USER </th>
        <th>CATEGORY</th>
        <th>TITLE</th>
        <th>DESCRIPTION</th>
        <th>HASIMAGE</th>
        <th>CREATED AT</th>
    </tr>
    @foreach($posts as $key)
    <tr>
        <td>{{$key->id}}</td>
        <td>{{$key->userid}}</td>
        <td>
            {{$key->category->name}}
        </td>
        <td>{{$key->title}}</td>
        <td>{{$key->description}}</td>
        <td>{{$key->hasImage}}</td>
        <td>{{$key->created_at}}</td>
    </tr>
    @endforeach
</table>
{{$posts->appends(request()->all())}}
