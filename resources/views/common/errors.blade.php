@if(count($errors) > 0)

{{--Form Error List--}}
{{--$errors变量在整个laravel中都可用--}}
<div class="alert alert-danger">
    <b>Whoops! Something Went Wrong!</b>
    <br><br>
    <ul>
        @foreach($errors->all() as  $error)
        <li>
            {{ $error }}
        </li>
        @endforeach
    </ul>
</div>
@endif