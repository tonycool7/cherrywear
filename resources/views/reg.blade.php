<div>
    <form method="GET" action="/admin_reg">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="POST">
        <input type="text" name="name"><br>
        <input type="email" name="email"><br>
        <input type="password" name="password">
        <input type="submit" value="submit">
    </form>
</div>