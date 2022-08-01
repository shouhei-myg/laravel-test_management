<h1>会社一覧</h1>
<a href="{{ route('organization.create') }}">会社登録</a>
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
      <td><a href="{{ route('organization.show', ['id'=>$organization->id]) }}" class="btn btn-primary">詳細</a></td>
      <td><a href="{{ route('organization.edit', ['id'=>$organization->id]) }}" class="btn btn-info">編集</a></td>
      <td>
        <form action="{{ route('organization.destroy', ['id'=>$organization->id]) }}" method="POST">
          @csrf
          <button type="submit" class="btn btn-danger">削除</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
