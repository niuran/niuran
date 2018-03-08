@if (count($questions))

<table class="table table-hover">
      <thead>
        <tr>
          <th>#</th>
          <th>创建者</th>
          <th>类型</th>
          <th>题目</th>
          <th>选项</th>
          <th>答案</th>
          <th>排序</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($questions as $question)
        <tr>
          <th scope="row">{{ $question->id}}</th>
          <td>{{ $question->userid }}</td>
          <td>
              @switch($question->type)
                @case('radio')
                  单选
                  @break
                @case('text')
                  填空
                  @break
                @case('checkbox')
                  多选
                  @break
                @case('textarea')
                  文章
                  @break
                @default
                  其他
              @endswitch
          </td>
          <td>{{ $question->title }}</td>
          <td>
            @if($question->content != 'null')
            {{ implode("， ", json_decode($question->content, true)) }}
            @else
            <span style="color:red;">无</span>
            @endif
          </td>
          <td>
            {{ $question->answer }}
          </td>
          <td>{{ $question->sort }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>

@else
   <div class="empty-block">暂无数据 ~_~ </div>
@endif
