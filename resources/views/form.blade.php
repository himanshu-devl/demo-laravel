<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div >
        <h3>Please Register Here:</h3>
        <hr>
        <form action="{{ url('register') }}" method="post">
            @csrf
          <div >
            <div >
              <label for="">username</label>
              <input type="text" name="username" id="" placeholder="username" value={{old('username') }}>
              <span>
                @error('username')
                    {{ $message }}
                @enderror
              </span>
            </div>
            <div >
            <div >
                <label for="">email</label>
                <input type="email"  name="email" id="" placeholder="email">
                <span>
                    @error('email')
                        {{ $message }}
                    @enderror
                  </span>
            </div>
            <div >
                <div >
                    <label for="">password</label>
                    <input type="password"  name="password" id="" placeholder="password">
                    <span>
                        @error('password')
                            {{ $message }}
                        @enderror
                      </span>
                </div>
          <button type="submit" >Sign in</button>
        </form>
        </div>
</body>
</html>