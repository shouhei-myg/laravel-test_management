<div class="container small">
  <h1>会社を登録</h1>
  <form action="{{ route('organization.store') }}" method="POST">
  @csrf
    <fieldset>
        <div class="form-group">
            <label for="name">{{ __('会社の名称') }}<span class="badge badge-danger ml-2">{{ __('必須') }}</span></label>
            <input type="text" class="form-control" name="name" id="name">
        <div class="d-flex justify-content-between pt-3">
          <a href="{{ route('organization.index') }}" class="btn btn-outline-secondary" role="button">
              <button type="submit" class="btn btn-success">
                  {{ __('登録') }}
              </button><br><hr>
              <i class="fa fa-reply mr-1" aria-hidden="true"></i>{{ __('一覧画面へ') }}
          </a>
        </div>
    </fieldset>
  </form>
</div>
