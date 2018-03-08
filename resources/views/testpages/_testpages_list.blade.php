@if (count($testpages))

<table class="table table-hover">
      <thead>
        <tr>
          <th>#</th>
          <th>创建者</th>
          <th>测试名</th>
          <th>排序</th>
          <th>操作</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($testpages as $testpage)
        <tr>
          <th scope="row">{{ $testpage->id}}</th>
          <td>{{ $testpage->userid }}</td>
          <td>
            <a href="{{ route('testpages.show', $testpage->id) }}">
              {{ $testpage->name }}
            </a>
          </td>
          <td>{{ $testpage->sort }}</td>
          <td>
            <form action="{{ route('testpages.destroy', $testpage->id) }}" method="post">
                  {{ csrf_field() }}
                  {{ method_field('DELETE') }}
                  <a class="btn btn-primary btn-sm" href="{{ route('testpages.edit', $testpage->id) }}">编辑</a>
                  <a class="btn btn-success btn-sm" href="{{ route('testpages.show', $testpage->id) }}">开始测试</a>
                  <a class="btn btn-warning btn-sm" href="{{ route('testquestions.index', $testpage->id) }}">管理试题</a>
                  <button onclick="return confirm('确定删除？')" type="submit" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash"></i>删除</button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>

@else
   <div class="empty-block">暂无数据 ~_~ </div>
@endif
