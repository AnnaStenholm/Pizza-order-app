<html>
    <body>

<h1>Alla användare</h1>
<ul>
    @foreach($users as $user)
    <li>Denna användare heter {{$user->name}} och är {{$user->age}} år gammal</li>
    @endforeach
</ul>

<form id="form" name="form" method="post">
    <h1>Fyll i dina uppgifter</h1>
    <div>
    <input type="text" name="fname" placeholder="firstname" id="fname">
</div>
<div>
    <input type="text" name="lname" placeholder="laststname" id="lname">
</div>
<div>
    <input type="text" name="epost" placeholder="email" id="epost">
</div>
<div>
    <input type="text" name="password" placeholder="password" id="password">
</div>
<div>
<input type="submit" name="send" id="send" value="send" />
</div>
</form>
    </body>
</html>