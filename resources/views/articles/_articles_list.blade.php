@if (count($articles))

<table class="table table-hover">
      <thead>
        <tr>
          <th>#</th>
          <th>创建者</th>
          <th>标题</th>
          <th>内容</th>
          <th>排序</th>
          <th>操作</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($articles as $article)
        <tr>
          <th scope="row">{{ $article->id}}</th>
          <td>{{ $article->userid }}</td>
          <td>{{ $article->title }}</td>
          <td>
            {{ $article->content }}
          </td>
          <td>{{ $article->sort }}</td>
          <td>
            <form action="{{ route('articles.destroy', $article->id) }}" method="post">
                  {{ csrf_field() }}
                  {{ method_field('DELETE') }}
                  <a class="btn btn-primary" href="{{ route('articles.edit', $article->id) }}">编辑</a>
                  <button onclick="return confirm('确定删除？')" type="submit" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i>删除</button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>

@else
   <div class="empty-block">暂无数据 ~_~ </div>
@endif
