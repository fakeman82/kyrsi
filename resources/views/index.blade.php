<body>
  <x-header />

    <main>
        <section id="hero" class="d-flex justify-content-center align-items-center">
            <h1 class="m-3 text-white bg-dark p-1 opacity-75">Онлайн курсы - это не круто!</h1>
        </section>
        <section id="about">
            <div class="container">
                <h2 class="m3">
                    О нас
                </h2>
            <div class="row mb-3">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Преимущества 1</h5>
        <p class="card-text">Описание преимущества</p>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Преимущества 2</h5>
        <p class="card-text">Описание преимущества</p>
      </div>
    </div>
  </div>
</div>


<div class="row mb-3">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Преимущества 3</h5>
        <p class="card-text">Описание преимущества</p>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Преимущества 4</h5>
        <p class="card-text">Описание преимущества</p>
      </div>
    </div>
  </div>
</div>
            </div>
        </section>


        <section id="courses">
    <div class="container">
                <h2 class="m3">Наши курсы</h2>
            <div class="d-flex" style="justify-content: center;">
            @foreach ($all_courses as $item)
        <div class="card" style="width: 18rem;">
            <img src="/images/{{$item->image}}" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">{{$item->title}}</h5>
            <p class="card-text">{{$item->description}}</p>
            <p class="card-text"><b>Стоимость курса {{$item->cost}}₽</b></p>
            <p class="card-text"><b>Продолжительность курса {{$item->duration}}</b> недель(-и/-я)</p>
            <a href="#" class="btn btn-primary">Потратить деньги и время</a>
        </div>
                
            </div>
            @endforeach
            
</div>
{{ $all_courses->links('pagination::bootstrap-5') }}
            </div>
        </section>


        <section id="enroll">
            <div class="container">
                <!-- @foreach($errors -> all() as $error)
                {{$error}}
                @endforeach -->
            <form class="w-50 my-0 mx-auto" action="/enroll" method="POST">
              @csrf
            <h2 class="m-3">Записаться на курс</h2>
  <div class="mb-3">
    <label for="Email" class="form-label">Введите свою почту</label>
    <input type="email" class="form-control" id="Email"  name="email">
    @error('email')
    <div class="alert alert-danger mt-3"  role="alert">
    {{$message}}
    </div>
    @enderror
  </div>

  <div class="mb-3">
    <label for="name" class="form-label">Введите свое имя</label>
    <input type="text" class="form-control" id="name" name="name" >
    @error('name')
    <div class="alert alert-danger mt-3"  role="alert">
    {{$message}}
    </div>
    
    @enderror
  </div>

  <div class="mb-3">
    <label for="name" class="form-label" name="course">Выберите курс</label>
    <select class="form-select" aria-label="Default select example" name="course">
  @foreach ($all_courses as $item)
    <option value="{{$item->id}}" selected>{{$item->title}}</option>
  @endforeach

  </div>
  
</select>
  <button type="submit" class="btn btn-primary">Записаться</button>
            </form>

            </div>
        </section>




    </main>

</body>
</html>
