<h1>organization管理ページ</h1>

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
