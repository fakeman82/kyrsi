<x-admin.header />
    <main>
        <section>
            <div class="container">
                <h2 class="m-3">Список заявок</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Email</th>
                            <th scope="col">Имя клиента</th>
                            <th scope="col">Курс</th>
                            <th scope="col">Дата заявки</th>
                            <th scope="col">Статус заявки</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        @foreach ($applications as $item)
                        <tr>
                        <th scope="row">{{$item->id}}</th>
                        <td>{{$item->email}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->course_id}}</td>
                        <td>{{$item->created_at}}</td>
                        <td>
                            @if ($item->is_confirm == 0) 
                            Не подтверждена
                            @else 
                            Подтверждено
                            @endif
                            </td>
                            <td>
                                <a href="/application/{{$item->id}}/confirm">
                                    <img src="images/confirm.png" alt="Подтвердить">
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>


            </div>
        </section>


        <section>
        <h2 class="m-3">Создать курс</h2>
          <form action="create_course" method="get">
            @csrf
            <label for="name">Название курса</label>
            <input type="text" class="form-control" id="name"  name="name">
            <label for="description">Описание курса</label>
            <input type="text" class="form-control" id="description"  name="description">
            <label for="cost">Стоимость курса</label>
            <input type="text" class="form-control" id="cost"  name="cost">
            <label for="duration">Длительность</label>
            <input type="text" class="form-control" id="duration"  name="duration">
            <label for="photo">Длительность</label>
            <!-- <input type="file" class="form-control" id="file"  name="file"> -->
            <label for="category">Категория курса</label>
            <select class="form-select" aria-label="Default select example" name="course">
              @foreach ($category as $item)
                <option value="{{$item->id}}" selected>{{$item->title}}</option>
              @endforeach
              </select>
              <button type="submit" class="btn btn-primary">Создать курс</button>
              


        

  </div>
        </section>
    </main>
</body>
</html>
