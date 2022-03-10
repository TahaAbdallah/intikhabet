<h1>Hello {{ $admins->name }}</h1>

<p>
    الرجاء الضّغط هنا لاعادة تعيين كلمة مرور جديدة
    <a href="{{ url('reset_password/',$admins->email).'/'.$code }}">Reset Password</a>
</p>