<h1>会社一覧、ラーメンは一蘭、学校は学ラン、</h1>

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
