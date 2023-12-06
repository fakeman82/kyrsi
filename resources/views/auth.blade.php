<body>
<x-header />
<div class="container-form-auth">
        <form action="#" method="post">
            @csrf
            <label for="email" class="email">Введите вашу почту</label>
            <input type="email" class="email" name="email">
            <label for="password" class="password">Введите пароль</label>
            <input type="password" class="password" name="password">
            <button type="submit" class="button">Авторизироваться</button>
            <p class="auth-text">Вас нет в системе?<a href="{{route('reg')}}">Зарегистрироваться</a></p>
        </form>
</div>
</body>