<body>
<x-header />
<form action="#" method="post">
    @csrf
<div class="container-form">
    <div class="reg-form">
        <label for="email" class="email">Введите вашу почту</label>
        <input type="email" class="email" name="email">
        @error('email')
            {{$message}}
        @enderror
        <label for="name" class="name">Введите ваше имя</label>
        <input type="name" class="name" name="name">
        @error('name')
            {{$message}}
        @enderror
        <label for="password" class="password">Введите пароль</label>
        <input type="password" class="password" name="password">
        @error('password')
            {{$message}}
        @enderror
        <label for="password_repeat" class="password_repeat">Подвтердите пароль</label>
        <input type="password" class="password" name="password_repeat">
        @error('password_repeat')
            {{$message}}
        @enderror
        <button type="submit" class="button">Зарегистрироваться</button>
        <p class="auth-text">Вы уже есть в системе?<a href="{{route('auth')}}">Авторизироваться</a></p>
    </div>
</div>
</form>
</body>