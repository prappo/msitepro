<div align="center">
    @if(Auth::user()->code == null)
        Your account is not acitivated
    @else

        <h1>Thank your for registration</h1>
        <h3>An activation code sent to your email please check your email</h3>

    @endif

</div>