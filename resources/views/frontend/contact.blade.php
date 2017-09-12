<form action="{{url('contact')}}" method="POST" id="contact">
    {{ csrf_field() }}
    <div class="form-group">
        <input type="text" class="form-control" id="name" name="name" placeholder="{{trans('app.name')}}" required>
    </div>
    <div class="form-group">
        <input type="text" class="form-control" id="email" name="email" placeholder="{{trans('app.email')}}" required>
    </div>

    <div class="form-group">
        <input type="text" class="form-control" id="subject" name="subject" placeholder="{{trans('app.subject')}}" required>
    </div>
    <div class="form-group">
        <textarea class="form-control" type="textarea" id="message" name="text" placeholder="{{trans('app.message')}}" maxlength="200" rows="5"></textarea>
        <span class="help-block"><p id="characterLeft" class="help-block "></p></span>
    </div>
    <button type="submit" name="submit"
            class="btn btn-primary pull-right">{{trans('app.send message')}}</button>
</form>