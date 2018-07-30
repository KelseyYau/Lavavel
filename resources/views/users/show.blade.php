@extendS('layouts.default')
@section('title',$user->name)
@section('content')
{{-- 使用@include方法传参，将用户数据以关联数组['user'=>$user]将用户数据传到_user_info --}}
<div class="row">
    <div class="col-md-offset-2 col-md-8">
        <div class="col-md-12">
            <div class="col-md-offset-2 col-md-8">
                <section class="user_info">
                    @include('shared._user_info',['user'=>$user])
                </section>
            </div>
        </div>
    </div>
</div>
@endsection