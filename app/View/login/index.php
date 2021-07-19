<form action="/login" method="POST">
	Login:
	<div class="form-group">
		<label for="exampleInputEmail1">Email address</label>
		<input name="email" type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
	</div>
	<div class="form-group">
		<label for="exampleInputPassword1">Password</label>
		<input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
	</div>
	<div class="checkbox">
		<label>
			<input type="checkbox"> Check me out
		</label>
	</div>
	<button type="submit" class="btn btn-default">Submit</button>
</form>
<span>Незарегистрирован? <a href="/register">Создать профиль</a></span>
