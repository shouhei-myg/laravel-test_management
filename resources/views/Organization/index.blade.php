<h1>会社一覧</h1><hr>
<a href="{{ route('organization.create') }}">会社追加</a>
<table>
  <thead>
    <tr>
      <th>会社名</th>
      <th>作成日</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($organizations as $organization)
    <tr>
      <td>{{ $organization->name }}</td>
      <td>{{ $organization->created_at }}</td>
    </tr>
    @endforeach
  </tbody>
</table>
