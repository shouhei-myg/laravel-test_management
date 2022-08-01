<h1>詳細ページ</h1>
<table class="table table-striped">
  <thead>
    <tr>
      <th>会社名</th>
      <th>作成日</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>{{ $organization->id }}</td>
      <td>{{ $organization->name }}</td>
      <td>{{ $organization->created_at }}</td>
    </tr>
  </tbody>
</table>