<form action="{{ route('post-contact-save') }}" method="post">
    @csrf
    <div class="row">
        <div class="col-lg-12 mb-4">
            <div class="input-wrap">
                <input type="text" name="name" value="{{old('name')}}" placeholder="Name" class="form-control">
            </div>
        </div>
        <div class="col-lg-12 mb-4">
            <div class="input-wrap">
                <input type="email" name="email" value="{{old('email')}}" placeholder="Email Address" class="form-control">
            </div>
        </div>
        <div class="col-lg-12 mb-5">
            <div class="input-wrap">
                <textarea name="message" id="" cols="30" rows="10" placeholder="Message" class="form-control">{{old('message')}}</textarea>
            </div>
        </div>
        <div class="input-effect">
            {!! app('captcha')->display() !!} @if ($errors->has('g-recaptcha-response'))
            <span class="help-block">
                <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
            </span>
            @endif
        </div>
        <div class="col-lg-12">
            <button type="submit" class="th_btn border-0"><i class="fa-regular fa-paper-plane"></i> &nbsp; Send Message</button>
        </div>
    </div>
</form>